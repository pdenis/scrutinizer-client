<?php

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

    public function testFromArray()
    {

    }

    public function testGeneralFromArray()
    {

    }

    public function testCountFromArray()
    {

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
     * @cover Snide\Scrutinizer\Model\Pdepend\Metrics::getCalls
     * @cover Snide\Scrutinizer\Model\Pdepend\Metrics::setCalls
     */
    public function testCalls()
    {
        $this->assertNull($this->object->getCalls());
        $calls = 12;
        $this->object->setCalls($calls);
        $this->assertEquals($calls, $this->object->getCalls());
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
     * @cover Snide\Scrutinizer\Model\Pdepend\Metrics::getCodeLines
     * @cover Snide\Scrutinizer\Model\Pdepend\Metrics::setCodeLines
     */
    public function testCodeLines()
    {
        $this->assertNull($this->object->getCodeLines());
        $count = 12;
        $this->object->setCodeLines($count);
        $this->assertEquals($count, $this->object->getCodeLines());
    }

    /**
     * @cover Snide\Scrutinizer\Model\Pdepend\Metrics::getCommentCodeLines
     * @cover Snide\Scrutinizer\Model\Pdepend\Metrics::setCommentCodeLines
     */
    public function testCommentCodeLines()
    {
        $this->assertNull($this->object->getCommentCodeLines());
        $count = 12;
        $this->object->setCommentCodeLines($count);
        $this->assertEquals($count, $this->object->getCommentCodeLines());
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
     * @cover Snide\Scrutinizer\Model\Pdepend\Metrics::getExecutableCodeLines
     * @cover Snide\Scrutinizer\Model\Pdepend\Metrics::setExecutableCodeLines
     */
    public function testExecutableCodeLines()
    {
        $this->assertNull($this->object->getExecutableCodeLines());
        $count = 12;
        $this->object->setExecutableCodeLines($count);
        $this->assertEquals($count, $this->object->getExecutableCodeLines());
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
     * @cover Snide\Scrutinizer\Model\Pdepend\Metrics::getLogicalCodeLines
     * @cover Snide\Scrutinizer\Model\Pdepend\Metrics::setLogicalCodeLines
     */
    public function testLogicalCodeLines()
    {
        $this->assertNull($this->object->getLogicalCodeLines());
        $count = 12;
        $this->object->setLogicalCodeLines($count);
        $this->assertEquals($count, $this->object->getLogicalCodeLines());
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
     * @cover Snide\Scrutinizer\Model\Pdepend\Metrics::getNonCommentCodeLines
     * @cover Snide\Scrutinizer\Model\Pdepend\Metrics::setNonCommentCodeLines
     */
    public function testNonCommentCodeLines()
    {
        $this->assertNull($this->object->getNonCommentCodeLines());
        $count = 12;
        $this->object->setNonCommentCodeLines($count);
        $this->assertEquals($count, $this->object->getNonCommentCodeLines());
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