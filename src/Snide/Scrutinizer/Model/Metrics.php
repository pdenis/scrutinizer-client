<?php


namespace Snide\Scrutinizer\Model;


/**
 * Class $this
 *
 * @author Pascal DENIS <pascal.denis.75@gmail.com>
 */
/**
 * Class $this
 * @package Snide\Scrutinizer\Model
 */
/**
 * Class $this
 * @package Snide\Scrutinizer\Model
 */
class Metrics
{
    /**
     * Operations count
     * 
     * @var int
     */
    protected $nbOperations;
    /**
     * Very good operations count
     * 
     * @var int
     */
    protected $nbVeryGoodOperations;
    /**
     * Good operations count
     * 
     * @var int
     */
    protected $nbGoodOperations;
    /**
     * Satisfactory operations count
     * 
     * @var int
     */
    protected $nbSatisfactoryOperations;
    /**
     * Pass operations count
     * 
     * @var int
     */
    protected $nbPassOperations;
    /**
     * Critical operations count
     * 
     * @var int
     */
    protected $nbCriticalOperations;
    /**
     * Classes count
     * 
     * @var int
     */
    protected $nbClasses;
    /**
     * Very good classes count
     *
     * @var int
     */
    protected $nbVeryGoodClasses;
    /**
     * Good classes count
     *
     * @var int
     */
    protected $nbGoodClasses;
    /**
     * Satisfactory classes count
     *
     * @var int
     */
    protected $nbSatisfactoryClasses;
    /**
     * Pass classes count
     *
     * @var int
     */
    protected $nbPassClasses;
    /**
     * Critical classes count
     *
     * @var int
     */
    protected $nbCriticalClasses;
    /**
     * Quality rating
     *
     * @var float
     */
    protected $quality;
    /**
     * Very good operations weight
     *
     * @var float
     */
    protected $veryGoodOperationsWeight;
    /**
     * Good operations weight
     *
     * @var float
     */
    protected $goodOperationsWeight;
    /**
     * Satisfactory operations weight
     *
     * @var float
     */
    protected $satisfactoryOperationsWeight;
    /**
     * Pass operations weight
     *
     * @var float
     */
    protected $passOperationsWeight;
    /**
     * Critical operations weight
     *
     * @var float
     */
    protected $criticalOperationsWeight;
    /**
     * Issues count
     *
     * @var int
     */
    protected $nbIssues;

    /**
     * Inject data from array
     *
     * @param array $data
     */
    public function fromArray($data = array())
    {
        $this->operationsFromArray($data);
        $this->classesFromArray($data);
    }

    /**
     * Injection operations values from array
     *
     * @param array $data
     */
    protected function operationsFromArray($data = array())
    {
        $this->nbOperations = $data['scrutinizer.nb_operations'];
        $this->nbVeryGoodOperations = $data['scrutinizer.nb_operations.very_good'];
        $this->nbGoodOperations = $data['scrutinizer.nb_operations.good'];
        $this->nbPassOperations = $data['scrutinizer.nb_operations.pass'];
        $this->nbSatisfactoryOperations = $data['scrutinizer.nb_operations.satisfactory'];
        $this->nbCriticalOperations = $data['scrutinizer.nb_operations.critical'];
        $this->criticalOperationsWeight = $data['scrutinizer.operations_weight.critical'];
        $this->passOperationsWeight = $data['scrutinizer.operations_weight.pass'];
        $this->goodOperationsWeight = $data['scrutinizer.operations_weight.good'];
        $this->satisfactoryOperationsWeight = $data['scrutinizer.operations_weight.satisfactory'];
        $this->veryGoodOperationsWeight = $data['scrutinizer.operations_weight.very_good'];
    }

    /**
     * Inject classes values from array
     *
     * @param array $data
     */
    protected function classesFromArray($data = array())
    {
        $this->nbCriticalClasses = $data['scrutinizer.nb_classes.critical'];
        $this->nbPassClasses = $data['scrutinizer.nb_classes.pass'];
        $this->nbSatisfactoryClasses = $data['scrutinizer.nb_classes.satisfactory'];
        $this->nbGoodClasses = $data['scrutinizer.nb_classes.good'];
        $this->nbClasses = $data['scrutinizer.nb_classes'];
        $this->nbVeryGoodClasses = $data['scrutinizer.nb_classes.very_good'];
        $this->nbVeryGoodOperations = $data['scrutinizer.nb_operations.very_good'];
        $this->quality = $data['scrutinizer.quality'];
        $this->nbIssues = $data['scrutinizer.nb_issues'];
    }

    /**
     * Getter nbIssues
     *
     * @return int
     */
    public function getNbIssues()
    {
        return $this->nbIssues;
    }

    /**
     * Setter nbIssues
     *
     * @param $nbIssues
     */
    public function setNbIssues($nbIssues)
    {
        $this->nbIssues = $nbIssues;
    }

    /**
     * Operations count
     *
     * @return int
     */
    public function getNbOperations()
    {
        return $this->nbOperations;
    }

    /**
     * Getter very good operations count
     *
     * @return int
     */
    public function getNbVeryGoodOperations()
    {
        return $this->nbVeryGoodOperations;
    }

    /**
     * Getter good operations count
     *
     * @return int
     */
    public function getNbGoodOperations()
    {
        return $this->nbGoodOperations;
    }

    /**
     * Getter satisfactory operations count
     *
     * @return int
     */
    public function getNbSatisfactoryOperations()
    {
        return $this->nbSatisfactoryOperations;
    }

    /**
     * Getter pass operations count
     *
     * @return int
     */
    public function getNbPassOperations()
    {
        return $this->nbPassOperations;
    }

    /**
     * Getter critical operations count
     *
     * @return int
     */
    public function getNbCriticalOperations()
    {
        return $this->nbCriticalOperations;
    }

    /**
     * Getter classes operations count
     *
     * @return int
     */
    public function getNbClasses()
    {
        return $this->nbClasses;
    }

    /**
     * Getter very good classes count
     *
     * @return int
     */
    public function getNbVeryGoodClasses()
    {
        return $this->nbVeryGoodClasses;
    }

    /**
     * Getter good classes count
     *
     * @return int
     */
    public function getNbGoodClasses()
    {
        return $this->nbGoodClasses;
    }

    /**
     * Getter satisfactory classes count
     *
     * @return int
     */
    public function getNbSatisfactoryClasses()
    {
        return $this->nbSatisfactoryClasses;
    }

    /**
     * Getter pass classes count
     *
     * @return int
     */
    public function getNbPassClasses()
    {
        return $this->nbPassClasses;
    }

    /**
     * Getter critical classes count
     *
     * @return int
     */
    public function getNbCriticalClasses()
    {
        return $this->nbCriticalClasses;
    }

    /**
     * Getter quality rating
     *
     * @return float
     */
    public function getQuality()
    {
        return $this->quality;
    }

    /**
     * Getter very good operations weight
     *
     * @return float
     */
    public function getVeryGoodOperationsWeight()
    {
        return $this->veryGoodOperationsWeight;
    }

    /**
     * Getter good operations weight
     *
     * @return float
     */
    public function getGoodOperationsWeight()
    {
        return $this->goodOperationsWeight;
    }

    /**
     * Getter satisfactory operations weight
     *
     * @return float
     */
    public function getSatisfactoryOperationsWeight()
    {
        return $this->satisfactoryOperationsWeight;
    }

    /**
     * Getter pass operations weight
     *
     * @return float
     */
    public function getPassOperationsWeight()
    {
        return $this->passOperationsWeight;
    }

    /**
     * Getter critical operations weight
     *
     * @return float
     */
    public function getCriticalOperationsWeight()
    {
        return $this->criticalOperationsWeight;
    }

    /**
     * Setter critical operations weight
     *
     * @param float $criticalOperationsWeight
     * @return $this
     */
    public function setCriticalOperationsWeight($criticalOperationsWeight)
    {
        $this->criticalOperationsWeight = $criticalOperationsWeight;

        return $this;
    }

    /**
     * Setter good operations weight
     *
     * @param float $goodOperationsWeight
     * @return $this
     */
    public function setGoodOperationsWeight($goodOperationsWeight)
    {
        $this->goodOperationsWeight = $goodOperationsWeight;

        return $this;
    }

    /**
     * Setter classes count
     *
     * @param int $nbClasses
     * @return $this
     */
    public function setNbClasses($nbClasses)
    {
        $this->nbClasses = $nbClasses;

        return $this;
    }

    /**
     * Setter critical classes count
     *
     * @param int $nbCriticalClasses
     * @return $this
     */
    public function setNbCriticalClasses($nbCriticalClasses)
    {
        $this->nbCriticalClasses = $nbCriticalClasses;

        return $this;
    }

    /**
     * Setter critical operations count
     *
     * @param int $nbCriticalOperations
     * @return $this
     */
    public function setNbCriticalOperations($nbCriticalOperations)
    {
        $this->nbCriticalOperations = $nbCriticalOperations;

        return $this;
    }

    /**
     * Setter good classes count
     *
     * @param int $nbGoodClasses
     * @return $this
     */
    public function setNbGoodClasses($nbGoodClasses)
    {
        $this->nbGoodClasses = $nbGoodClasses;

        return $this;
    }

    /**
     * Setter good operations count
     *
     * @param int $nbGoodOperations
     * @return $this
     */
    public function setNbGoodOperations($nbGoodOperations)
    {
        $this->nbGoodOperations = $nbGoodOperations;

        return $this;
    }

    /**
     * Setter operations count
     *
     * @param int $nbOperations
     * @return $this
     */
    public function setNbOperations($nbOperations)
    {
        $this->nbOperations = $nbOperations;

        return $this;
    }

    /**
     * Setter pass classes count
     *
     * @param int $nbPassClasses
     * @return $this
     */
    public function setNbPassClasses($nbPassClasses)
    {
        $this->nbPassClasses = $nbPassClasses;

        return $this;
    }

    /**
     * Setter pass operations count
     *
     * @param int $nbPassOperations
     * @return $this
     */
    public function setNbPassOperations($nbPassOperations)
    {
        $this->nbPassOperations = $nbPassOperations;

        return $this;
    }

    /**
     * Setter satisfactory classes count
     *
     * @param int $nbSatisfactoryClasses
     * @return $this
     */
    public function setNbSatisfactoryClasses($nbSatisfactoryClasses)
    {
        $this->nbSatisfactoryClasses = $nbSatisfactoryClasses;

        return $this;
    }

    /**
     * Setter satisfactory operations count
     *
     * @param int $nbSatisfactoryOperations
     * @return $this
     */
    public function setNbSatisfactoryOperations($nbSatisfactoryOperations)
    {
        $this->nbSatisfactoryOperations = $nbSatisfactoryOperations;

        return $this;
    }

    /**
     * Setter very good classes count
     *
     * @param int $nbVeryGoodClasses
     * @return $this
     */
    public function setNbVeryGoodClasses($nbVeryGoodClasses)
    {
        $this->nbVeryGoodClasses = $nbVeryGoodClasses;

        return $this;
    }

    /**
     * Setter very good operations count
     *
     * @param int $nbVeryGoodOperations
     * @return $this
     */
    public function setNbVeryGoodOperations($nbVeryGoodOperations)
    {
        $this->nbVeryGoodOperations = $nbVeryGoodOperations;

        return $this;
    }

    /**
     * Setter pass operations weight
     *
     * @param float $passOperationsWeight
     * @return $this
     */
    public function setPassOperationsWeight($passOperationsWeight)
    {
        $this->passOperationsWeight = $passOperationsWeight;

        return $this;
    }

    /**
     * Setter satisfactory operations weight
     *
     * @param float $satisfactoryOperationsWeight
     * @return $this
     */
    public function setSatisfactoryOperationsWeight($satisfactoryOperationsWeight)
    {
        $this->satisfactoryOperationsWeight = $satisfactoryOperationsWeight;

        return $this;
    }

    /**
     * Setter very good operations weight
     * 
     * @param float $veryGoodOperationsWeight
     * @return $this
     */
    public function setVeryGoodOperationsWeight($veryGoodOperationsWeight)
    {
        $this->veryGoodOperationsWeight = $veryGoodOperationsWeight;
        
        return $this;
    }
}
