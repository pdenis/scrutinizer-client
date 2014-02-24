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
 * Class Repository
 *
 * @author Pascal DENIS <pascal.denis.75@gmail.com>
 */
class Repository
{
    /**
     * Slug (user/name)
     *
     * @var string
     */
    protected $slug;
    /**
     * Branch
     *
     * @var string
     */
    protected $branch;
    /**
     * Metrics
     *
     * @var Metrics
     */
    protected $metrics;
    /**
     * Pdepend metrics
     *
     * @var PdependMetrics
     */
    protected $pdependMetrics;
    /**
     * Code coverage metrics
     *
     * @var CoverageMetrics
     */
    protected $coverageMetrics;

    /**
     * Repository type (g=github, b=bitbucket)
     *
     *@var string
     */
    protected $type;



    /**
     * Constructor
     *
     * @param string $slug
     * @param string $type (g=github, b=bitbucket)
     */
    public function __construct($slug = null, $type = 'g')
    {
        $this->slug = $slug;
        $this->setType($type);
    }

    /**
     * @param mixed $type
     * @throws \Exception
     */
    public function setType($type)
    {
        if(!in_array($type, array('b', 'g'))) {
            throw new \UnexpectedValueException(sprintf('Repository type %s is not valid', $type));
        }
        $this->type = $type;
    }

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Setter coerageMetrics
     *
     * @param \Snide\Scrutinizer\Model\Coverage\Metrics $coverageMetrics
     */
    public function setCoverageMetrics($coverageMetrics)
    {
        $this->coverageMetrics = $coverageMetrics;
    }

    /**
     * Getter coverageMetrics
     *
     * @return \Snide\Scrutinizer\Model\Coverage\Metrics
     */
    public function getCoverageMetrics()
    {
        return $this->coverageMetrics;
    }

    /**
     * Getter slug
     *
     * @return string
     */
    public function getSlug()
    {
        return $this->slug;
    }

    /**
     * Setter slug
     *
     * @param $slug
     * @return $this
     */
    public function setSlug($slug)
    {
        $this->slug = $slug;

        return $this;
    }

    /**
     * Getter branch
     *
     * @return string
     */
    public function getBranch()
    {
        return $this->branch;
    }

    /**
     * Setter branch
     *
     * @param $branch
     * @return $this
     */
    public function setBranch($branch)
    {
        $this->branch = $branch;

        return $this;
    }

    /**
     * Getter metrics
     *
     * @return Metrics
     */
    public function getMetrics()
    {
        return $this->metrics;
    }

    /**
     * Setter metrics
     *
     * @param Metrics $metrics
     * @return $this
     */
    public function setMetrics(Metrics $metrics)
    {
        $this->metrics = $metrics;

        return $this;
    }

    /**
     * Getter pdependMetrics
     *
     * @return PdependMetrics
     */
    public function getPdependMetrics()
    {
        return $this->pdependMetrics;
    }

    /**
     * Setter pdependMetrics
     *
     * @param PdependMetrics $pdependMetrics
     * @return $this
     */
    public function setPdependMetrics(PdependMetrics $pdependMetrics)
    {
        $this->pdependMetrics = $pdependMetrics;

        return $this;
    }
}
