<?php

/*
 * This file is part of the Snide scrutinizer-client package.
 *
 * (c) Pascal DENIS <pascal.denis.75@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Snide\Scrutinizer\Model;

use Snide\Scrutinizer\Hydrator\SimpleHydrator;
use Snide\Scrutinizer\Model\Metrics;
use Snide\Scrutinizer\Model\Pdepend\Metrics as PdependMetrics;
use Snide\Scrutinizer\Model\Coverage\Metrics as CoverageMetrics;

/**
 * Class RepositoryTest
 *
 * @author Pascal DENIS <pascal.denis@businessdecision.com>
 */
class RepositoryTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var Repository
     */
    protected $object;

    protected $json;

    /**
     * @var SimpleHydrator
     */
    protected $hydrator;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp()
    {
        $this->object = new Repository();
        $this->hydrator = new SimpleHydrator();

        $this->json = '{
            "branch": "master",
            "values": {
                "php_code_coverage.files": 6,
                "php_code_coverage.lines_of_code": 422,
                "php_code_coverage.non_comment_lines_of_code": 237,
                "php_code_coverage.classes": 6,
                "php_code_coverage.methods": 16,
                "php_code_coverage.covered_methods": 14,
                "php_code_coverage.conditionals": 0,
                "php_code_coverage.covered_conditionals": 0,
                "php_code_coverage.statements": 91,
                "php_code_coverage.covered_statements": 85,
                "php_code_coverage.elements": 107,
                "php_code_coverage.covered_elements": 99,
                "pdepend.average_hierarchy_height": 2,
                "pdepend.average_number_of_derived_classes": 0.83333333333333,
                "pdepend.calls": 32,
                "pdepend.cyclomatic_complexity_number": 31,
                "pdepend.extended_cyclomatic_complexity_number": 31,
                "pdepend.comment_lines_of_code": 183,
                "pdepend.number_of_abstract_classes": 2,
                "pdepend.number_of_concrete_classes": 4,
                "pdepend.executable_lines_of_code": 192,
                "pdepend.number_of_referenced_classes": 3,
                "pdepend.number_of_leaf_classes": 4,
                "pdepend.logical_lines_of_code": 91,
                "pdepend.lines_of_code": 428,
                "pdepend.maximum_depth_of_inheritance_tree": 2,
                "pdepend.non_comment_lines_of_code": 245,
                "pdepend.number_of_classes": 6,
                "pdepend.number_of_functions": 0,
                "pdepend.number_of_interfaces": 0,
                "pdepend.number_of_methods": 16,
                "pdepend.number_of_packages": 2,
                "pdepend.roots": 1,
                "scrutinizer.test_coverage": 0.93406593406593,
                "scrutinizer.quality": 10,
                "scrutinizer.nb_elements": 22,
                "scrutinizer.nb_classes": 6,
                "scrutinizer.nb_classes.very_good": 6,
                "scrutinizer.nb_classes.good": 0,
                "scrutinizer.nb_classes.satisfactory": 0,
                "scrutinizer.nb_classes.pass": 0,
                "scrutinizer.nb_classes.critical": 0,
                "scrutinizer.nb_operations": 16,
                "scrutinizer.nb_operations.very_good": 16,
                "scrutinizer.nb_operations.good": 0,
                "scrutinizer.nb_operations.satisfactory": 0,
                "scrutinizer.nb_operations.pass": 0,
                "scrutinizer.nb_operations.critical": 0,
                "scrutinizer.weight.very_good": 77.2,
                "scrutinizer.weight.good": 0,
                "scrutinizer.weight.satisfactory": 0,
                "scrutinizer.weight.pass": 0,
                "scrutinizer.weight.critical": 0,
                "scrutinizer.operations_weight.very_good": 77.2,
                "scrutinizer.operations_weight.good": 0,
                "scrutinizer.operations_weight.satisfactory": 0,
                "scrutinizer.operations_weight.pass": 0,
                "scrutinizer.operations_weight.critical": 0,
                "scrutinizer.nb_issues": 8,
                "scrutinizer.nb_ignored_issues": 0
            }
        }';
    }

    public function testLoad()
    {
        $data = json_decode($this->json, true);
        $this->object->setCoverageMetrics($this->hydrator->hydrate(new CoverageMetrics(), $data['values'], 'php_code_coverage'));
        $this->object->setPdependMetrics($this->hydrator->hydrate(new PdependMetrics(), $data['values'], 'pdepend'));
        $this->object->setMetrics($this->hydrator->hydrate(new Metrics(), $data['values'], 'scrutinizer'));
        $this->object->setBranch($data['branch']);
        $this->assertEquals(22, $this->object->getMetrics()->getNbElements());
        $this->assertEquals(10, $this->object->getMetrics()->getQuality());
        $this->assertEquals(0.93406593406593, $this->object->getMetrics()->getTestCoverage());
        $this->assertEquals(16, $this->object->getMetrics()->getNbOperations());
        $this->assertEquals(16, $this->object->getMetrics()->getNbOperationsVeryGood());
        $this->assertEquals(0, $this->object->getMetrics()->getNbOperationsGood());
        $this->assertEquals(0, $this->object->getMetrics()->getNbOperationsSatisfactory());
        $this->assertEquals(0, $this->object->getMetrics()->getNbOperationsPass());
        $this->assertEquals(0, $this->object->getMetrics()->getNbOperationsCritical());
        $this->assertEquals(6, $this->object->getMetrics()->getNbClasses());
        $this->assertEquals(6, $this->object->getMetrics()->getNbClassesVeryGood());
        $this->assertEquals(0, $this->object->getMetrics()->getNbClassesPass());
        $this->assertEquals(0, $this->object->getMetrics()->getNbClassesSatisfactory());
        $this->assertEquals(0, $this->object->getMetrics()->getNbClassesCritical());
        $this->assertEquals(8, $this->object->getMetrics()->getNbIssues());
        $this->assertEquals(0, $this->object->getMetrics()->getNbIgnoredIssues());
        $this->assertEquals(77.2, $this->object->getMetrics()->getWeightVeryGood());
        $this->assertEquals(0, $this->object->getMetrics()->getWeightGood());
        $this->assertEquals(0, $this->object->getMetrics()->getWeightPass());
        $this->assertEquals(0, $this->object->getMetrics()->getWeightCritical());
        $this->assertEquals(0, $this->object->getMetrics()->getWeightSatisfactory());
        $this->assertEquals(77.2, $this->object->getMetrics()->getOperationsWeightVeryGood());
        $this->assertEquals(0, $this->object->getMetrics()->getOperationsWeightGood());
        $this->assertEquals(0, $this->object->getMetrics()->getOperationsWeightPass());
        $this->assertEquals(0, $this->object->getMetrics()->getOperationsWeightCritical());
        $this->assertEquals(0, $this->object->getMetrics()->getOperationsWeightSatisfactory());
        // Pdepend metrics
        $this->assertEquals(6, $this->object->getPdependMetrics()->getNumberOfClasses());
        $this->assertEquals(0, $this->object->getPdependMetrics()->getNumberOfFunctions());
        $this->assertEquals(0, $this->object->getPdependMetrics()->getNumberOfInterfaces());
        $this->assertEquals(16, $this->object->getPdependMetrics()->getNumberOfMethods());
        $this->assertEquals(2, $this->object->getPdependMetrics()->getNumberOfPackages());
        $this->assertEquals(1, $this->object->getPdependMetrics()->getRoots());

        $this->assertEquals(2, $this->object->getPdependMetrics()->getMaximumDepthOfInheritanceTree());
        $this->assertEquals(428, $this->object->getPdependMetrics()->getLinesOfCode());
        $this->assertEquals(91, $this->object->getPdependMetrics()->getLogicalLinesOfCode());
        $this->assertEquals(4, $this->object->getPdependMetrics()->getNumberOfLeafClasses()); // Rename //getLeaf
        $this->assertEquals(3, $this->object->getPdependMetrics()->getNumberOfReferencedClasses());
        $this->assertEquals(192, $this->object->getPdependMetrics()->getExecutableLinesOfCode());
        $this->assertEquals(4, $this->object->getPdependMetrics()->getNumberOfConcreteClasses());
        $this->assertEquals(2, $this->object->getPdependMetrics()->getNumberOfAbstractClasses());
        $this->assertEquals(31, $this->object->getPdependMetrics()->getExtendedCyclomaticComplexityNumber());
        $this->assertEquals(31, $this->object->getPdependMetrics()->getCyclomaticComplexityNumber());
        $this->assertEquals(0.83333333333333, $this->object->getPdependMetrics()->getAverageNumberOfDerivedClasses());
        $this->assertEquals(2, $this->object->getPdependMetrics()->getAverageHierarchyHeight());
        $this->assertEquals(32, $this->object->getPdependMetrics()->getCalls());
        $this->assertEquals(183, $this->object->getPdependMetrics()->getCommentLinesOfCode());
        $this->assertEquals(245, $this->object->getPdependMetrics()->getNonCommentLinesOfCode());


        // Coverage metrics
        $this->assertEquals(6, $this->object->getCoverageMetrics()->getFiles());
        $this->assertEquals(422, $this->object->getCoverageMetrics()->getLinesOfCode());
        $this->assertEquals(237, $this->object->getCoverageMetrics()->getNonCommentLinesOfCode());
        $this->assertEquals(6, $this->object->getCoverageMetrics()->getClasses());
        $this->assertEquals(16, $this->object->getCoverageMetrics()->getMethods());
        $this->assertEquals(14, $this->object->getCoverageMetrics()->getCoveredMethods());
        $this->assertEquals(0, $this->object->getCoverageMetrics()->getConditionals());
        $this->assertEquals(0, $this->object->getCoverageMetrics()->getCoveredConditionals());
        $this->assertEquals(91, $this->object->getCoverageMetrics()->getStatements());
        $this->assertEquals(85, $this->object->getCoverageMetrics()->getCoveredStatements());
        $this->assertEquals(107, $this->object->getCoverageMetrics()->getElements());
        $this->assertEquals(99, $this->object->getCoverageMetrics()->getCoveredElements());

        $this->assertEquals('master', $this->object->getBranch());
    }

    /**
     * @cover Snide\Scrutinizer\Model\Repository::getSlug
     * @cover Snide\Scrutinizer\Model\Repository::setSlug
     */
    public function testSlug()
    {
        $this->assertNull($this->object->getSlug());
        $slug = 'pdenis/monitoring';
        $this->object->setSlug($slug);
        $this->assertEquals($slug, $this->object->getSlug());
    }

    /**
     * @cover Snide\Scrutinizer\Model\Repository::getBranch
     * @cover Snide\Scrutinizer\Model\Repository::setBranch
     */
    public function testBranch()
    {
        $this->assertNull($this->object->getBranch());
        $branch = 'release';
        $this->object->setBranch($branch);
        $this->assertEquals($branch, $this->object->getBranch());
    }

    /**
     * @cover Snide\Scrutinizer\Model\Repository::getMetrics
     * @cover Snide\Scrutinizer\Model\Repository::setMetrics
     */
    public function testMetrics()
    {
        $this->assertNull($this->object->getMetrics());
        $metrics = new Metrics();
        $this->object->setMetrics($metrics);
        $this->assertEquals($metrics, $this->object->getMetrics());
    }

    /**
     * @cover Snide\Scrutinizer\Model\Repository::getPdependMetrics
     * @cover Snide\Scrutinizer\Model\Repository::setPdependMetrics
     */
    public function testPdependMetrics()
    {
        $this->assertNull($this->object->getPdependMetrics());
        $metrics = new PdependMetrics();
        $this->object->setPdependMetrics($metrics);
        $this->assertEquals($metrics, $this->object->getPdependMetrics());
    }

    /**
     * @cover Snide\Scrutinizer\Model\Repository::getCoverageMetrics
     * @cover Snide\Scrutinizer\Model\Repository::setCoverageMetrics
     */
    public function testCoverageMetrics()
    {
        $this->assertNull($this->object->getCoverageMetrics());
        $metrics = new CoverageMetrics();
        $this->object->setCoverageMetrics($metrics);
        $this->assertEquals($metrics, $this->object->getCoverageMetrics());
    }
}