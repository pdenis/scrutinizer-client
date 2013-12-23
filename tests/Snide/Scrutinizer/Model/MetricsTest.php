<?php

namespace Snide\Scrutinizer\Model;

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

    public function testOperationsFromArray()
    {

    }

    public function testClassesFromArray()
    {

    }

    /**
     * @cover Snide\Scrutinizer\Model\Pdepend\Metrics::getIssuesCount
     * @cover Snide\Scrutinizer\Model\Pdepend\Metrics::setIssuesCount
     */
    public function testIssuesCount()
    {
        $this->assertNull($this->object->getIssuesCount());
        $count = 12;
        $this->object->setIssuesCount($count);
        $this->assertEquals($count, $this->object->getIssuesCount());
    }

    /**
     * @cover Snide\Scrutinizer\Model\Pdepend\Metrics::getOperationsCount
     * @cover Snide\Scrutinizer\Model\Pdepend\Metrics::setOperationsCount
     */
    public function testOperationsCount()
    {
        $this->assertNull($this->object->getOperationsCount());
        $count = 12;
        $this->object->setOperationsCount($count);
        $this->assertEquals($count, $this->object->getOperationsCount());
    }

    /**
     * @cover Snide\Scrutinizer\Model\Pdepend\Metrics::getVeryGoodOperationsCount
     * @cover Snide\Scrutinizer\Model\Pdepend\Metrics::setVeryGoodOperationsCount
     */
    public function testVeryGoodOperationsCount()
    {
        $this->assertNull($this->object->getVeryGoodOperationsCount());
        $count = 12;
        $this->object->setVeryGoodOperationsCount($count);
        $this->assertEquals($count, $this->object->getVeryGoodOperationsCount());
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
     * @cover Snide\Scrutinizer\Model\Pdepend\Metrics::getCriticalClassesCount
     * @cover Snide\Scrutinizer\Model\Pdepend\Metrics::setCriticalClassesCount
     */
    public function testCriticalClassesCount()
    {
        $this->assertNull($this->object->getCriticalClassesCount());
        $count = 12;
        $this->object->setCriticalClassesCount($count);
        $this->assertEquals($count, $this->object->getCriticalClassesCount());
    }

    /**
     * @cover Snide\Scrutinizer\Model\Pdepend\Metrics::getCriticalOperationsCount
     * @cover Snide\Scrutinizer\Model\Pdepend\Metrics::setCriticalOperationsCount
     */
    public function testCriticalOperationsCount()
    {
        $this->assertNull($this->object->getCriticalOperationsCount());
        $count = 12;
        $this->object->setCriticalOperationsCount($count);
        $this->assertEquals($count, $this->object->getCriticalOperationsCount());
    }

    /**
     * @cover Snide\Scrutinizer\Model\Pdepend\Metrics::getGoodClassesCount
     * @cover Snide\Scrutinizer\Model\Pdepend\Metrics::setGoodClassesCount
     */
    public function testGoodClassesCount()
    {
        $this->assertNull($this->object->getGoodClassesCount());
        $count = 12;
        $this->object->setGoodClassesCount($count);
        $this->assertEquals($count, $this->object->getGoodClassesCount());
    }

    /**
     * @cover Snide\Scrutinizer\Model\Pdepend\Metrics::getGoodOperationsCount
     * @cover Snide\Scrutinizer\Model\Pdepend\Metrics::setGoodOperationsCount
     */
    public function testGoodOperationsCount()
    {
        $this->assertNull($this->object->getGoodOperationsCount());
        $count = 12;
        $this->object->setGoodOperationsCount($count);
        $this->assertEquals($count, $this->object->getGoodOperationsCount());
    }

    /**
     * @cover Snide\Scrutinizer\Model\Pdepend\Metrics::getPassClassesCount
     * @cover Snide\Scrutinizer\Model\Pdepend\Metrics::setPassClassesCount
     */
    public function testPassClassesCount()
    {
        $this->assertNull($this->object->getPassClassesCount());
        $count = 12;
        $this->object->setPassClassesCount($count);
        $this->assertEquals($count, $this->object->getPassClassesCount());
    }

    /**
     * @cover Snide\Scrutinizer\Model\Pdepend\Metrics::getPassOperationsCount
     * @cover Snide\Scrutinizer\Model\Pdepend\Metrics::setPassOperationsCount
     */
    public function testPassOperationsCount()
    {
        $this->assertNull($this->object->getPassOperationsCount());
        $count = 12;
        $this->object->setPassOperationsCount($count);
        $this->assertEquals($count, $this->object->getPassOperationsCount());
    }

    /**
     * @cover Snide\Scrutinizer\Model\Pdepend\Metrics::getSatisfactoryClassesCount
     * @cover Snide\Scrutinizer\Model\Pdepend\Metrics::setSatisfactoryClassesCount
     */
    public function testSatisfactoryClassesCount()
    {
        $this->assertNull($this->object->getSatisfactoryClassesCount());
        $count = 12;
        $this->object->setSatisfactoryClassesCount($count);
        $this->assertEquals($count, $this->object->getSatisfactoryClassesCount());
    }

    /**
     * @cover Snide\Scrutinizer\Model\Pdepend\Metrics::getSatisfactoryOperationsCount
     * @cover Snide\Scrutinizer\Model\Pdepend\Metrics::setSatisfactoryOperationsCount
     */
    public function testSatisfactoryOperationsCount()
    {
        $this->assertNull($this->object->getSatisfactoryOperationsCount());
        $count = 12;
        $this->object->setSatisfactoryOperationsCount($count);
        $this->assertEquals($count, $this->object->getSatisfactoryOperationsCount());
    }

    /**
     * @cover Snide\Scrutinizer\Model\Pdepend\Metrics::getVeryGoodClassesCount
     * @cover Snide\Scrutinizer\Model\Pdepend\Metrics::setVeryGoodClassesCount
     */
    public function testVeryGoodClassesCount()
    {
        $this->assertNull($this->object->getVeryGoodClassesCount());
        $count = 12;
        $this->object->setVeryGoodClassesCount($count);
        $this->assertEquals($count, $this->object->getVeryGoodClassesCount());
    }

    /**
     * @cover Snide\Scrutinizer\Model\Pdepend\Metrics::getQuality
     * @cover Snide\Scrutinizer\Model\Pdepend\Metrics::setQuality
     */
    public function testQuality()
    {
        $this->assertNull($this->object->getQuality());
        $quality = 9.7;
        $this->object->setQuality($quality);
        $this->assertEquals($quality, $this->object->getQuality());
    }

    /**
     * @cover Snide\Scrutinizer\Model\Pdepend\Metrics::getVeryGoodOperationsWeight
     * @cover Snide\Scrutinizer\Model\Pdepend\Metrics::setVeryGoodOperationsWeight
     */
    public function testVeryGoodOperationsWeight()
    {
        $this->assertNull($this->object->getVeryGoodOperationsWeight());
        $count = 12;
        $this->object->setVeryGoodOperationsWeight($count);
        $this->assertEquals($count, $this->object->getVeryGoodOperationsWeight());
    }

    /**
     * @cover Snide\Scrutinizer\Model\Pdepend\Metrics::getGoodOperationsWeight
     * @cover Snide\Scrutinizer\Model\Pdepend\Metrics::setGoodOperationsWeight
     */
    public function testGoodOperationsWeight()
    {
        $this->assertNull($this->object->getGoodOperationsWeight());
        $weight = 0.1;
        $this->object->setGoodOperationsWeight($weight);
        $this->assertEquals($weight, $this->object->getGoodOperationsWeight());
    }

    /**
     * @cover Snide\Scrutinizer\Model\Pdepend\Metrics::getSatisfactoryOperationsWeight
     * @cover Snide\Scrutinizer\Model\Pdepend\Metrics::setSatisfactoryOperationsWeight
     */
    public function testSatisfactoryOperationsWeight()
    {
        $this->assertNull($this->object->getSatisfactoryOperationsWeight());
        $weight = 1.2;
        $this->object->setSatisfactoryOperationsWeight($weight);
        $this->assertEquals($weight, $this->object->getSatisfactoryOperationsWeight());
    }

    /**
     * @cover Snide\Scrutinizer\Model\Pdepend\Metrics::getPassOperationsWeight
     * @cover Snide\Scrutinizer\Model\Pdepend\Metrics::setPassOperationsWeight
     */
    public function testPassOperationsWeight()
    {
        $this->assertNull($this->object->getPassOperationsWeight());
        $weight = 0.212;
        $this->object->setPassOperationsWeight($weight);
        $this->assertEquals($weight, $this->object->getPassOperationsWeight());
    }

    /**
     * @cover Snide\Scrutinizer\Model\Pdepend\Metrics::getCriticalOperationsWeight
     * @cover Snide\Scrutinizer\Model\Pdepend\Metrics::setCriticalOperationsWeight
     */
    public function testCriticalOperationsWeight()
    {
        $this->assertNull($this->object->getCriticalOperationsWeight());
        $weight = 0.7;
        $this->object->setCriticalOperationsWeight($weight);
        $this->assertEquals($weight, $this->object->getCriticalOperationsWeight());
    }
}