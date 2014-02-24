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

use Snide\Scrutinizer\Hydrator\SimpleHydrator;

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
     * @covers Snide\Scrutinizer\Client::fetchRepository
     */
    public function testFetchRepository()
    {
        $this->object = new Client();

        try {
            $this->object->fetchRepository('pdenis/monitoring', 'u');
            $this->fail('Undefined repo type');
        }catch(\Exception $e) {
            $this->assertInstanceOf('\UnexpectedValueException', $e);
        }

        $repo = $this->object->fetchRepository('pdenis/monitoring');
        $this->assertInstanceOf('Snide\\Scrutinizer\\Model\\Repository', $repo);

        try {
            $repo = $this->object->fetchRepository('unknown/repo');
            $this->fail('Undefined repo');
        }catch(\Exception $e) {

        }
    }

    public function testClient()
    {
        $this->object = new Client();
        $this->assertInstanceOf('Guzzle\Http\Client', $this->object->getClient());
    }

    public function testHydrator()
    {
        $this->object = new Client();
        $this->assertInstanceOf('Snide\Scrutinizer\Hydrator\SimpleHydrator', $this->object->getHydrator());
        $hydrator = new SimpleHydrator();
        $this->object = new Client(null, $hydrator);
        $this->assertEquals($hydrator, $this->object->getHydrator());
    }
}