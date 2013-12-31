<?php

/*
 * This file is part of the Snide scrutinizer-client package.
 *
 * (c) Pascal DENIS <pascal.denis.75@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Snide\Scrutinizer\Model\Pdepend;

/**
 * Class MetricsTest
 *
 * @author Pascal DENIS <pascal.denis@businessdecision.com>
 */
class MetricsTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var Metrics
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp()
    {
        $this->object = new Metrics();
    }

    /**
     * @cover Snide\Scrutinizer\Model\Pdepend\Metrics::getAbstractClassesCount
     * @cover Snide\Scrutinizer\Model\Pdepend\Metrics::setAbstractClassesCount
     */
    public function testAbstratClassesCount()
    {
        $this->assertNull($this->object->getAbstractClassesCount());
        $count = 12;
        $this->object->setAbstractClassesCount($count);
        $this->assertEquals($count, $this->object->getAbstractClassesCount());
    }

    /**
     * @cover Snide\Scrutinizer\Model\Pdepend\Metrics::getCallsCount
     * @cover Snide\Scrutinizer\Model\Pdepend\Metrics::setCallsCount
     */
    public function testCallsCount()
    {
        $this->assertNull($this->object->getCallsCount());
        $calls = 12;
        $this->object->setCallsCount($calls);
        $this->assertEquals($calls, $this->object->getCallsCount());
    }

    /**
     * @cover Snide\Scrutinizer\Model\Pdepend\Metrics::getClassesCount
     * @cover Snide\Scrutinizer\Model\Pdepend\Metrics::setClassesCount
     */
    public function testClassesCount()
    {
        $this->assertNull($this->object->getClassesCount());
        $count = 12;
        $this->object->setClassesCount($count);
        $this->assertEquals($count, $this->object->getClassesCount());
    }

    /**
     * @cover Snide\Scrutinizer\Model\Pdepend\Metrics::getCodeLinesCount
     * @cover Snide\Scrutinizer\Model\Pdepend\Metrics::setCodeLinesCount
     */
    public function testCodeLinesCount()
    {
        $this->assertNull($this->object->getCodeLinesCount());
        $count = 12;
        $this->object->setCodeLinesCount($count);
        $this->assertEquals($count, $this->object->getCodeLinesCount());
    }

    /**
     * @cover Snide\Scrutinizer\Model\Pdepend\Metrics::getCommentCodeLinesCount
     * @cover Snide\Scrutinizer\Model\Pdepend\Metrics::setCommentCodeLinesCount
     */
    public function testCommentCodeLinesCount()
    {
        $this->assertNull($this->object->getCommentCodeLinesCount());
        $count = 12;
        $this->object->setCommentCodeLinesCount($count);
        $this->assertEquals($count, $this->object->getCommentCodeLinesCount());
    }

    /**
     * @cover Snide\Scrutinizer\Model\Pdepend\Metrics::getConcreteClassesCount
     * @cover Snide\Scrutinizer\Model\Pdepend\Metrics::setConcreteClassesCount
     */
    public function testConcreteClassesCount()
    {
        $this->assertNull($this->object->getConcreteClassesCount());
        $count = 12;
        $this->object->setConcreteClassesCount($count);
        $this->assertEquals($count, $this->object->getConcreteClassesCount());
    }

    /**
     * @cover Snide\Scrutinizer\Model\Pdepend\Metrics::getCyclomaticCount
     * @cover Snide\Scrutinizer\Model\Pdepend\Metrics::setCyclomaticCount
     */
    public function testCyclomaticCount()
    {
        $this->assertNull($this->object->getCyclomaticCount());
        $count = 12;
        $this->object->setCyclomaticCount($count);
        $this->assertEquals($count, $this->object->getCyclomaticCount());
    }

    /**
     * @cover Snide\Scrutinizer\Model\Pdepend\Metrics::getDerivedClassesAvg
     * @cover Snide\Scrutinizer\Model\Pdepend\Metrics::setDerivedClassesAvg
     */
    public function testDerivedlassesAvg()
    {
        $this->assertNull($this->object->getDerivedClassesAvg());
        $avg = 12;
        $this->object->setDerivedClassesAvg($avg);
        $this->assertEquals($avg, $this->object->getDerivedClassesAvg());
    }

    /**
     * @cover Snide\Scrutinizer\Model\Pdepend\Metrics::getHierarchyHeightAvg
     * @cover Snide\Scrutinizer\Model\Pdepend\Metrics::setHierarchyHeightAvg
     */
    public function testHierarchyHeightAvg()
    {
        $this->assertNull($this->object->getHierarchyHeightAvg());
        $avg = 12;
        $this->object->setHierarchyHeightAvg($avg);
        $this->assertEquals($avg, $this->object->getHierarchyHeightAvg());
    }

    /**
     * @cover Snide\Scrutinizer\Model\Pdepend\Metrics::getExecutableCodeLinesCount
     * @cover Snide\Scrutinizer\Model\Pdepend\Metrics::setExecutableCodeLinesCount
     */
    public function testExecutableCodeLinesCount()
    {
        $this->assertNull($this->object->getExecutableCodeLinesCount());
        $count = 12;
        $this->object->setExecutableCodeLinesCount($count);
        $this->assertEquals($count, $this->object->getExecutableCodeLinesCount());
    }

    /**
     * @cover Snide\Scrutinizer\Model\Pdepend\Metrics::getExtendedCyclomaticCount
     * @cover Snide\Scrutinizer\Model\Pdepend\Metrics::setExtendedCyclomaticCount
     */
    public function testExtendedCyclomaticCount()
    {
        $this->assertNull($this->object->getExtendedCyclomaticCount());
        $count = 12;
        $this->object->setExtendedCyclomaticCount($count);
        $this->assertEquals($count, $this->object->getExtendedCyclomaticCount());
    }

    /**
     * @cover Snide\Scrutinizer\Model\Pdepend\Metrics::getFunctionsCount
     * @cover Snide\Scrutinizer\Model\Pdepend\Metrics::setFunctionsCount
     */
    public function testFunctionsCount()
    {
        $this->assertNull($this->object->getFunctionsCount());
        $count = 12;
        $this->object->setFunctionsCount($count);
        $this->assertEquals($count, $this->object->getFunctionsCount());
    }


    /**
     * @cover Snide\Scrutinizer\Model\Pdepend\Metrics::getInterfacesCount
     * @cover Snide\Scrutinizer\Model\Pdepend\Metrics::setInterfacesCount
     */
    public function testInterfacesCount()
    {
        $this->assertNull($this->object->getInterfacesCount());
        $count = 12;
        $this->object->setInterfacesCount($count);
        $this->assertEquals($count, $this->object->getInterfacesCount());
    }

    /**
     * @cover Snide\Scrutinizer\Model\Pdepend\Metrics::getLeafClassesCount
     * @cover Snide\Scrutinizer\Model\Pdepend\Metrics::setLeafClassesCount
     */
    public function testLeafClassesCount()
    {
        $this->assertNull($this->object->getLeafClassesCount());
        $count = 12;
        $this->object->setLeafClassesCount($count);
        $this->assertEquals($count, $this->object->getLeafClassesCount());
    }

    /**
     * @cover Snide\Scrutinizer\Model\Pdepend\Metrics::getLogicalCodeLinesCount
     * @cover Snide\Scrutinizer\Model\Pdepend\Metrics::setLogicalCodeLinesCount
     */
    public function testLogicalCodeLinesCount()
    {
        $this->assertNull($this->object->getLogicalCodeLinesCount());
        $count = 12;
        $this->object->setLogicalCodeLinesCount($count);
        $this->assertEquals($count, $this->object->getLogicalCodeLinesCount());
    }

    /**
     * @cover Snide\Scrutinizer\Model\Pdepend\Metrics::getMaxInheritanceDepth
     * @cover Snide\Scrutinizer\Model\Pdepend\Metrics::setMaxInheritanceDepth
     */
    public function testMaxInheritanceDepth()
    {
        $this->assertNull($this->object->getMaxInheritanceDepth());
        $depth = 2;
        $this->object->setMaxInheritanceDepth($depth);
        $this->assertEquals($depth, $this->object->getMaxInheritanceDepth());
    }

    /**
     * @cover Snide\Scrutinizer\Model\Pdepend\Metrics::getMethodsCount
     * @cover Snide\Scrutinizer\Model\Pdepend\Metrics::setMethodsCount
     */
    public function testMethodsCount()
    {
        $this->assertNull($this->object->getMethodsCount());
        $count = 12;
        $this->object->setMethodsCount($count);
        $this->assertEquals($count, $this->object->getMethodsCount());
    }

    /**
     * @cover Snide\Scrutinizer\Model\Pdepend\Metrics::getNonCommentCodeLinesCount
     * @cover Snide\Scrutinizer\Model\Pdepend\Metrics::setNonCommentCodeLinesCount
     */
    public function testNonCommentCodeLinesCount()
    {
        $this->assertNull($this->object->getNonCommentCodeLinesCount());
        $count = 12;
        $this->object->setNonCommentCodeLinesCount($count);
        $this->assertEquals($count, $this->object->getNonCommentCodeLinesCount());
    }

    /**
     * @cover Snide\Scrutinizer\Model\Pdepend\Metrics::getPackagesCount
     * @cover Snide\Scrutinizer\Model\Pdepend\Metrics::setPackagesCount
     */
    public function testPackagesCount()
    {
        $this->assertNull($this->object->getPackagesCount());
        $count = 12;
        $this->object->setPackagesCount($count);
        $this->assertEquals($count, $this->object->getPackagesCount());
    }

    /**
     * @cover Snide\Scrutinizer\Model\Pdepend\Metrics::getReferencedClassesCount
     * @cover Snide\Scrutinizer\Model\Pdepend\Metrics::setReferencedClassesCount
     */
    public function testReferencedClassesCount()
    {
        $this->assertNull($this->object->getReferencedClassesCount());
        $count = 12;
        $this->object->setReferencedClassesCount($count);
        $this->assertEquals($count, $this->object->getReferencedClassesCount());
    }
}