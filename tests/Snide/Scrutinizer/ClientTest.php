<?php

/*
 * This file is part of the Snide scrutinizer-client package.
 *
 * (c) Pascal DENIS <pascal.denis.75@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Snide\Scrutinizer;

use Buzz\Browser;

/**
 * Class ClientTest
 *
 * @author Pascal DENIS <pascal.denis@businessdecision.com>
 */
class ClientTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var Client
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp()
    {

    }

    /**
     * @covers Snide\Scrutinizer\Client::fetch
     */
    public function testFetch()
    {
        $this->object = new Client();

        try {
            $this->object->fetch('pdenis/monitoring', 'u');
            $this->fail('Undefined repo type');
        }catch(\UnexpectedValueException $e) {

        }
    }

    /**
     * @covers Snide\Scrutinizer\Client::__construct
     * @covers Snide\Scrutinizer\Client::setBrowser
     * @covers Snide\Scrutinizer\Client::getBrowser
     */
    public function testBrowser()
    {
        $this->object = new Client();
        $this->assertInstanceOf('Buzz\\Browser', $this->object->getBrowser());
        $browser = new Browser();
        $this->object = new Client($browser);
        $this->assertEquals($browser, $this->object->getBrowser());
    }
}