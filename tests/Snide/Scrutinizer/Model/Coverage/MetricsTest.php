<?php

/*
 * This file is part of the Snide scrutinizer-client package.
 *
 * (c) Pascal DENIS <pascal.denis.75@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Snide\Scrutinizer\Model\Coverage;

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
     * @cover Snide\Scrutinizer\Model\Coverage\Metrics::getElementsCount
     * @cover Snide\Scrutinizer\Model\Coverage\Metrics::setElementsCount
     */
    public function testElementsCount()
    {
        $this->assertNull($this->object->getElementsCount());
        $count = 12;
        $this->object->setElementsCount($count);
        $this->assertEquals($count, $this->object->getElementsCount());
    }

    /**
     * @cover Snide\Scrutinizer\Model\Coverage\Metrics::getCoveredElementsCount
     * @cover Snide\Scrutinizer\Model\Coverage\Metrics::setCoveredElementsCount
     */
    public function testCoveredElementsCount()
    {
        $this->assertNull($this->object->getCoveredElementsCount());
        $count = 12;
        $this->object->setCoveredElementsCount($count);
        $this->assertEquals($count, $this->object->getCoveredElementsCount());
    }

    /**
     * @cover Snide\Scrutinizer\Model\Coverage\Metrics::getFilesCount
     * @cover Snide\Scrutinizer\Model\Coverage\Metrics::setFilesCount
     */
    public function testFilesCount()
    {
        $this->assertNull($this->object->getFilesCount());
        $count = 12;
        $this->object->setFilesCount($count);
        $this->assertEquals($count, $this->object->getFilesCount());
    }

    /**
     * @cover Snide\Scrutinizer\Model\Coverage\Metrics::getStatementsCount
     * @cover Snide\Scrutinizer\Model\Coverage\Metrics::setStatementsCount
     */
    public function testStatementsCount()
    {
        $this->assertNull($this->object->getStatementsCount());
        $count = 12;
        $this->object->setStatementsCount($count);
        $this->assertEquals($count, $this->object->getStatementsCount());
    }

    /**
     * @cover Snide\Scrutinizer\Model\Coverage\Metrics::getCoveredStatementsCount
     * @cover Snide\Scrutinizer\Model\Coverage\Metrics::setCoveredStatementsCount
     */
    public function testCoveredStatementsCount()
    {
        $this->assertNull($this->object->getCoveredStatementsCount());
        $count = 12;
        $this->object->setCoveredStatementsCount($count);
        $this->assertEquals($count, $this->object->getCoveredStatementsCount());
    }
    /**
     * @cover Snide\Scrutinizer\Model\Coverage\Metrics::getCodeLinesCount
     * @cover Snide\Scrutinizer\Model\Coverage\Metrics::setCodeLinesCount
     */
    public function testCodeLinesCount()
    {
        $this->assertNull($this->object->getCodeLinesCount());
        $count = 12;
        $this->object->setCodeLinesCount($count);
        $this->assertEquals($count, $this->object->getCodeLinesCount());
    }

    /**
     * @cover Snide\Scrutinizer\Model\Coverage\Metrics::getClassesCount
     * @cover Snide\Scrutinizer\Model\Coverage\Metrics::setClassesCount
     */
    public function testClassesCount()
    {
        $this->assertNull($this->object->getClassesCount());
        $count = 12;
        $this->object->setClassesCount($count);
        $this->assertEquals($count, $this->object->getClassesCount());
    }

    /**
     * @cover Snide\Scrutinizer\Model\Coverage\Metrics::getConditionnalsCount
     * @cover Snide\Scrutinizer\Model\Coverage\Metrics::setConditionnalsCount
     */
    public function testConditionnalsCount()
    {
        $this->assertNull($this->object->getConditionnalsCount());
        $count = 12;
        $this->object->setConditionnalsCount($count);
        $this->assertEquals($count, $this->object->getConditionnalsCount());
    }

    /**
     * @cover Snide\Scrutinizer\Model\Coverage\Metrics::getCoveredConditionnalsCount
     * @cover Snide\Scrutinizer\Model\Coverage\Metrics::setCoveredConditionnalsCount
     */
    public function testCoveredConditionnalsCount()
    {
        $this->assertNull($this->object->getCoveredConditionnalsCount());
        $count = 12;
        $this->object->setCoveredConditionnalsCount($count);
        $this->assertEquals($count, $this->object->getCoveredConditionnalsCount());
    }


    /**
     * @cover Snide\Scrutinizer\Model\Coverage\Metrics::getCoveredMethodsCount
     * @cover Snide\Scrutinizer\Model\Coverage\Metrics::setCoveredMethodsCount
     */
    public function testCoveredMethodsCount()
    {
        $this->assertNull($this->object->getCoveredMethodsCount());
        $count = 12;
        $this->object->setCoveredMethodsCount($count);
        $this->assertEquals($count, $this->object->getCoveredMethodsCount());
    }

    /**
     * @cover Snide\Scrutinizer\Model\Coverage\Metrics::getMethodsCount
     * @cover Snide\Scrutinizer\Model\Coverage\Metrics::setMethodsCount
     */
    public function testMethodsCount()
    {
        $this->assertNull($this->object->getMethodsCount());
        $count = 12;
        $this->object->setMethodsCount($count);
        $this->assertEquals($count, $this->object->getMethodsCount());
    }


    /**
     * @cover Snide\Scrutinizer\Model\Coverage\Metrics::getNonCommentCodeLinesCount
     * @cover Snide\Scrutinizer\Model\Coverage\Metrics::setNonCommentCodeLinesCount
     */
    public function testNonCommentCodeLinesCount()
    {
        $this->assertNull($this->object->getNonCommentCodeLinesCount());
        $count = 12;
        $this->object->setNonCommentCodeLinesCount($count);
        $this->assertEquals($count, $this->object->getNonCommentCodeLinesCount());
    }
}