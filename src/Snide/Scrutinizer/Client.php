<?php

namespace Snide\Scrutinizer;

use Buzz\Browser;
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
     * Constructor
     *
     * @param Browser $browser
     */
    public function __construct(Browser $browser)
    {
        if (null === $browser) {
            $browser = new Browser();
        }
        $this->setBrowser($browser);
    }

    /**
     * Fetch data from repository URL
     *
     * @param string $slug login/repository format
     * @param string $repoType ("g" or "b")
     * @throws \UnexpectedValueException
     */
    public function fetch($slug, $repoType = 'g')
    {
        if (!in_array($repoType, array('g', 'b'))) {
            throw new \UnexpectedValueException(sprintf('Repository type %s is not valid', $repoType));
        }
        $repositoryUrl = sprintf('%s/%s/%s/metrics', $this->apiUrl, $repoType, $slug);
        $repository = new Repository();
        $repositoryArray = json_decode($this->browser->get($repositoryUrl)->getContent(), true);
        if (!$repositoryArray) {
            throw new \UnexpectedValueException(sprintf('Response is empty for url %s', $repositoryUrl));
        }

        $repository->fromArray($repositoryArray);

        return $repository;
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
}
