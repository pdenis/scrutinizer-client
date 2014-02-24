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
use Snide\Scrutinizer\Model\Pdepend\Metrics as PdependMetrics;
use Snide\Scrutinizer\Model\Coverage\Metrics as CoverageMetrics;
use Snide\Scrutinizer\Model\Metrics;
use Snide\Scrutinizer\Model\Repository;
use Guzzle\Http\Client as GuzzleClient;

/**
 * Class Client
 *
 * @author Pascal DENIS <pascal.denis.75@gmail.com>
 */
class Client
{
    /**
     * API URL
     *
     * @var string
     */
    protected $endpoint = 'https://scrutinizer-ci.com/api/repositories';

    /**
     * Object Hydrator
     *
     * @var SimpleHydrator
     */
    protected $hydrator;

    /**
     * Guzzle client
     *
     * @var \Guzzle\Http\Client
     */
    protected $client;

    /**
     * Constructor
     *
     * @param Hydrator\SimpleHydrator $hydrator
     */
    public function __construct(SimpleHydrator $hydrator = null)
    {
        if(null === $hydrator) {
            $hydrator = new SimpleHydrator();
        }

        $this->setHydrator($hydrator);

        $this->client = new GuzzleClient($this->endpoint, array());
    }

    /**
     * Fetch data from repository URL
     *
     * @param Model\Repository $repository
     * @throws \UnexpectedValueException
     * @return \Snide\Scrutinizer\Model\Repository
     */
    public function fetchRepository(Repository $repository)
    {
        $response = $this->getResponse(
            sprintf('%s/%s/metrics',
                $repository->getType(),
                $repository->getSlug()
            )
        );

        if (!$response || isset($repositoryArray['error'])) {
            throw new \UnexpectedValueException(sprintf('Response is empty for url %s', $response));
        }

        $repository = $this->hydrate($repository, $response['values']);
        $repository->setBranch($response['branch']);


        return $repository;
    }

    /**
     * Getter hydrator
     *
     * @return SimpleHydrator
     */
    public function getHydrator()
    {
        return $this->hydrator;
    }

    /**
     * Setter hydrator
     *
     * @param SimpleHydrator $hydrator
     */
    public function setHydrator(SimpleHydrator $hydrator)
    {
        $this->hydrator = $hydrator;
    }

    /**
     * @param \Snide\Travis\Client $client
     */
    public function setClient($client)
    {
        $this->client = $client;
    }

    /**
     * @return \Snide\Travis\Client
     */
    public function getClient()
    {
        return $this->client;
    }

    /**
     * Hydrate Repository
     *
     * @param Repository $repository
     * @param array $data
     * @return mixed
     */
    protected function hydrate(Repository $repository, array $data = array())
    {
        $repository->setCoverageMetrics($this->hydrator->hydrate(new CoverageMetrics(), $data, 'php_code_coverage'));
        $repository->setPdependMetrics($this->hydrator->hydrate(new PdependMetrics(), $data, 'pdepend'));
        $repository->setMetrics($this->hydrator->hydrate(new Metrics(), $data, 'scrutinizer'));

        return $repository;
    }

    /**
     * Get Response from API
     * Response is an array (Result of json_decode)
     *
     * @param string $uri API URI
     * @param array $queryParams Query params
     * @return mixed
     */
    protected function getResponse($uri, array $queryParams = array())
    {
        $request = $this->client->get($uri, array(), array('query' => $queryParams));

        return $request->send()->json();
    }
}
