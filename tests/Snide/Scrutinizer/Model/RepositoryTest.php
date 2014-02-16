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
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp()
    {
        $this->object = new Repository();

        $this->json = '{
            "branch": "master",
            "values": {
            "pdepend.average_hierarchy_height": 0.14285714285714,
            "pdepend.average_number_of_derived_classes": 0.41666666666667,
            "pdepend.calls": 99,
            "pdepend.cyclomatic_complexity_number": 132,
            "pdepend.extended_cyclomatic_complexity_number": 136,
            "pdepend.comment_lines_of_code": 776,
            "pdepend.number_of_abstract_classes": 1,
            "pdepend.number_of_concrete_classes": 11,
            "pdepend.executable_lines_of_code": 697,
            "pdepend.number_of_referenced_classes": 30,
            "pdepend.number_of_leaf_classes": 11,
            "pdepend.logical_lines_of_code": 421,
            "pdepend.lines_of_code": 1693,
            "pdepend.maximum_depth_of_inheritance_tree": 1,
            "pdepend.non_comment_lines_of_code": 917,
            "pdepend.number_of_classes": 12,
            "pdepend.number_of_functions": 0,
            "pdepend.number_of_interfaces": 5,
            "pdepend.number_of_methods": 108,
            "pdepend.number_of_packages": 8,
            "pdepend.roots": 1,
            "scrutinizer.nb_operations": 51,
            "scrutinizer.nb_operations.very_good": 50,
            "scrutinizer.nb_operations.good": 1,
            "scrutinizer.nb_operations.satisfactory": 0,
            "scrutinizer.weight.satisfactory": 0,
            "scrutinizer.nb_operations.pass": 0,
            "scrutinizer.weight.pass": 0,
            "scrutinizer.nb_operations.critical": 0,
            "scrutinizer.weight.critical": 0,
            "scrutinizer.nb_classes": 12,
            "scrutinizer.nb_classes.very_good": 12,
            "scrutinizer.nb_classes.good": 0,
            "scrutinizer.nb_classes.satisfactory": 0,
            "scrutinizer.nb_classes.pass": 0,
            "scrutinizer.nb_classes.critical": 0,
            "scrutinizer.nb_issues": 2,
            "scrutinizer.nb_ignored_issues": 0,
            "scrutinizer.quality": 9.1779459838953,
            "scrutinizer.weight.very_good": 6.11,
            "scrutinizer.weight.good": 0.23,
            "php_code_coverage.files": 17,
            "php_code_coverage.lines_of_code": 1856,
            "php_code_coverage.non_comment_lines_of_code": 915,
            "php_code_coverage.classes": 12,
            "php_code_coverage.methods": 82,
            "php_code_coverage.covered_methods": 77,
            "php_code_coverage.conditionals": 0,
            "php_code_coverage.covered_conditionals": 0,
            "php_code_coverage.statements": 323,
            "php_code_coverage.covered_statements": 295,
            "php_code_coverage.elements": 405,
            "php_code_coverage.covered_elements": 372
            }
        }';
    }

    /**
     * @cover Snide\Scrutinizer\Model\Repository::fromArray
     * @cover Snide\Scrutinizer\Model\Repository::metricsFromArray
     */
    public function testFromArray()
    {
        $this->object->fromArray(json_decode($this->json, true));

        $this->assertEquals(51, $this->object->getMetrics()->getOperationsCount());
        $this->assertEquals(50, $this->object->getMetrics()->getVeryGoodOperationsCount());
        $this->assertEquals(1, $this->object->getMetrics()->getGoodOperationsCount());
        $this->assertEquals(0, $this->object->getMetrics()->getSatisfactoryOperationsCount());
        $this->assertEquals(0, $this->object->getMetrics()->getSatisfactoryOperationsWeight());
        $this->assertEquals(0, $this->object->getMetrics()->getPassOperationsCount());
        $this->assertEquals(0, $this->object->getMetrics()->getPassOperationsWeight());
        $this->assertEquals(0, $this->object->getMetrics()->getCriticalOperationsCount());
        $this->assertEquals(0, $this->object->getMetrics()->getCriticalOperationsWeight());
        $this->assertEquals(12, $this->object->getMetrics()->getClassesCount());
        $this->assertEquals(12, $this->object->getMetrics()->getVeryGoodClassesCount());
        $this->assertEquals(0, $this->object->getMetrics()->getPassClassesCount());
        $this->assertEquals(0, $this->object->getMetrics()->getSatisfactoryClassesCount());
        $this->assertEquals(0, $this->object->getMetrics()->getCriticalClassesCount());
        $this->assertEquals(2, $this->object->getMetrics()->getIssuesCount());
        $this->assertEquals(9.1779459838953, $this->object->getMetrics()->getQuality());
        $this->assertEquals(6.11, $this->object->getMetrics()->getVeryGoodOperationsWeight());
        $this->assertEquals(0.23, $this->object->getMetrics()->getGoodOperationsWeight());

        // Pdepend metrics
        $this->assertEquals(8, $this->object->getPdependMetrics()->getPackagesCount());
        $this->assertEquals(108, $this->object->getPdependMetrics()->getMethodsCount());
        $this->assertEquals(5, $this->object->getPdependMetrics()->getInterfacesCount());
        $this->assertEquals(0, $this->object->getPdependMetrics()->getFunctionsCount());
        $this->assertEquals(12, $this->object->getPdependMetrics()->getClassesCount());
        $this->assertEquals(917, $this->object->getPdependMetrics()->getNonCommentCodeLinesCount());
        $this->assertEquals(1, $this->object->getPdependMetrics()->getMaxInheritanceDepth());
        $this->assertEquals(1693, $this->object->getPdependMetrics()->getCodeLinesCount());
        $this->assertEquals(421, $this->object->getPdependMetrics()->getLogicalCodeLinesCount());
        $this->assertEquals(11, $this->object->getPdependMetrics()->getLeafClassesCount()); // Rename //getLeaf
        $this->assertEquals(30, $this->object->getPdependMetrics()->getReferencedClassesCount());
        $this->assertEquals(697, $this->object->getPdependMetrics()->getExecutableCodeLinesCount());
        $this->assertEquals(11, $this->object->getPdependMetrics()->getConcreteClassesCount());
        $this->assertEquals(1, $this->object->getPdependMetrics()->getAbstractClassesCount());
        $this->assertEquals(776, $this->object->getPdependMetrics()->getCommentCodeLinesCount());
        $this->assertEquals(136, $this->object->getPdependMetrics()->getExtendedCyclomaticCount());
        $this->assertEquals(132, $this->object->getPdependMetrics()->getCyclomaticCount());
        $this->assertEquals(0.41666666666667, $this->object->getPdependMetrics()->getDerivedClassesAvg());
        $this->assertEquals(0.14285714285714, $this->object->getPdependMetrics()->getHierarchyHeightAvg());
        $this->assertEquals(99, $this->object->getPdependMetrics()->getCallsCount());

        // Coverage metrics
        $this->assertEquals(17, $this->object->getCoverageMetrics()->getFilesCount());
        $this->assertEquals(1856, $this->object->getCoverageMetrics()->getCodeLinesCount());
        $this->assertEquals(915, $this->object->getCoverageMetrics()->getNonCommentCodeLinesCount());
        $this->assertEquals(12, $this->object->getCoverageMetrics()->getClassesCount());
        $this->assertEquals(82, $this->object->getCoverageMetrics()->getMethodsCount());
        $this->assertEquals(77, $this->object->getCoverageMetrics()->getCoveredMethodsCount());
        $this->assertEquals(0, $this->object->getCoverageMetrics()->getConditionnalsCount());
        $this->assertEquals(0, $this->object->getCoverageMetrics()->getCoveredConditionnalsCount());
        $this->assertEquals(323, $this->object->getCoverageMetrics()->getStatementsCount());
        $this->assertEquals(295, $this->object->getCoverageMetrics()->getCoveredStatementsCount());
        $this->assertEquals(405, $this->object->getCoverageMetrics()->getElementsCount());
        $this->assertEquals(372, $this->object->getCoverageMetrics()->getCoveredElementsCount());

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