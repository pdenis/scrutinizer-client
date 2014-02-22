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
use Snide\Scrutinizer\Hydrator\SimpleHydrator;
use Snide\Scrutinizer\Model\Pdepend\Metrics as PdependMetrics;
use Snide\Scrutinizer\Model\Coverage\Metrics as CoverageMetrics;
use Snide\Scrutinizer\Model\Metrics;
use Snide\Scrutinizer\Model\Repository;

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
    protected $apiUrl = 'https://scrutinizer-ci.com/api/repositories';
    /**
     * Buzz browser client
     *
     * @var Browser
     */
    protected $browser;

    /**
     * Object Hydrator
     *
     * @var SimpleHydrator
     */
    protected $hydrator;
    /**
     * Constructor
     *
     * @param Browser $browser
     * @param Hydrator\SimpleHydrator $hydrator
     */
    public function __construct(Browser $browser = null, SimpleHydrator $hydrator = null)
    {
        if (null === $browser) {
            $browser = new Browser();
        }

        if(null === $hydrator) {
            $hydrator = new SimpleHydrator();
        }

        $this->setHydrator($hydrator);
        $this->setBrowser($browser);
    }

    /**
     * Fetch data from repository URL
     *
     * @param string $slug login/repository format
     * @param string $repoType ("g" or "b")
     * @return \Snide\Scrutinizer\Model\Repository
     * @throws \UnexpectedValueException
     */
    public function fetchRepository($slug, $repoType = 'g')
    {
        if (!in_array($repoType, array('g', 'b'))) {
            throw new \UnexpectedValueException(sprintf('Repository type %s is not valid', $repoType));
        }

        $response = $this->getResponse($slug, $repoType);

        if (!$response || isset($repositoryArray['error'])) {
            throw new \UnexpectedValueException(sprintf('Response is empty for url %s', $response));
        }

        return $this->createRepository($response);
    }

    /**
     * Getter browser
     *
     * @return Browser
     */
    public function getBrowser()
    {
        return $this->browser;
    }

    /**
     * Setter browser
     *
     * @param Browser $browser
     */
    public function setBrowser(Browser $browser)
    {
        $this->browser = $browser;
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
     * Hydrate Repository
     *
     * @param Repository $repository
     * @param array $data
     * @return mixed
     */
    protected function hydrate(Repository $repository, array $data = array())
    {
        $repository = $this->hydrator->hydrate($repository, $data, 'scrutinizer');
        $repository->setCoverageMetrics($this->hydrator->hydrate(new CoverageMetrics(), $data, 'php_code_coverage'));
        $repository->setPdependMetrics($this->hydrator->hydrate(new PdependMetrics(), $data, 'pdepend'));
        $repository->setMetrics($this->hydrator->hydrate(new Metrics(), $data, 'scrutinizer'));

        return $repository;
    }

    /**
     * Get json response
     *
     * @param $slug
     * @param string $repoType ("g"=gituhb, "b"=bitbucket)
     * @return mixed
     */
    protected function getResponse($slug, $repoType = 'g')
    {
        $repositoryUrl = sprintf('%s/%s/%s/metrics', $this->apiUrl, $repoType, $slug);
        return json_decode($this->browser->get($repositoryUrl)->getContent(), true);
    }

    /**
     * Create repoistory from response data
     *
     * @param array $response
     * @return Repository
     */
    protected function createRepository(array $response = array())
    {
        $repository = new Repository();
        $repository = $this->hydrate($repository, $response['values']);
        $repository->setBranch($response['branch']);

        return $repository;
    }
}
