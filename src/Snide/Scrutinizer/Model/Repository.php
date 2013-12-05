<?php


namespace Snide\Scrutinizer\Model;


/**
 * Class Repository
 *
 * @author Pascal DENIS <pascal.denis.75@gmail.com>
 */
class Repository
{
    /**
     * Name
     *
     * @var string
     */
    protected $name;
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
     * Inject data from array
     *
     * @param array $data
     */
    public function fromArray($data = array())
    {
        if (isset($data['branch'])) {
            $this->branch = $data['branch'];
        }

        if (isset($data['values'])) {
            $this->metrics = new Metrics($data['values']);
        }
    }

    /**
     * Getter name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Setter name
     *
     * @param $name
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;

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
}
