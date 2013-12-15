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
    protected $operationsCount;
    /**
     * Very good operations count
     * 
     * @var int
     */
    protected $veryGoodOperationsCount;
    /**
     * Good operations count
     * 
     * @var int
     */
    protected $goodOperationsCount;
    /**
     * Satisfactory operations count
     * 
     * @var int
     */
    protected $satisfactoryOperationsCount;
    /**
     * Pass operations count
     * 
     * @var int
     */
    protected $passOperationsCount;
    /**
     * Critical operations count
     * 
     * @var int
     */
    protected $criticalOperationsCount;
    /**
     * Classes count
     * 
     * @var int
     */
    protected $classesCount;
    /**
     * Very good classes count
     *
     * @var int
     */
    protected $veryGoodClassesCount;
    /**
     * Good classes count
     *
     * @var int
     */
    protected $goodClassesCount;
    /**
     * Satisfactory classes count
     *
     * @var int
     */
    protected $satisfactoryClassesCount;
    /**
     * Pass classes count
     *
     * @var int
     */
    protected $passClassesCount;
    /**
     * Critical classes count
     *
     * @var int
     */
    protected $criticalClassesCount;
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
    protected $issuesCount;

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
        $this->operationsCount = $data['scrutinizer.nb_operations'];
        $this->veryGoodOperationsCount = $data['scrutinizer.nb_operations.very_good'];
        $this->goodOperationsCount = $data['scrutinizer.nb_operations.good'];
        $this->passOperationsCount = $data['scrutinizer.nb_operations.pass'];
        $this->satisfactoryOperationsCount = $data['scrutinizer.nb_operations.satisfactory'];
        $this->criticalOperationsCount = $data['scrutinizer.nb_operations.critical'];
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
        $this->criticalClassesCount = $data['scrutinizer.nb_classes.critical'];
        $this->passClassesCount = $data['scrutinizer.nb_classes.pass'];
        $this->satisfactoryClassesCount = $data['scrutinizer.nb_classes.satisfactory'];
        $this->goodClassesCount = $data['scrutinizer.nb_classes.good'];
        $this->classesCount = $data['scrutinizer.nb_classes'];
        $this->veryGoodClassesCount = $data['scrutinizer.nb_classes.very_good'];
        $this->quality = $data['scrutinizer.quality'];
        $this->issuesCount = $data['scrutinizer.nb_issues'];
    }

    /**
     * Getter issuesCount
     *
     * @return int
     */
    public function getIssuesCount()
    {
        return $this->issuesCount;
    }

    /**
     * Setter issuesCount
     *
     * @param $issuesCount
     */
    public function setIssuesCount($issuesCount)
    {
        $this->issuesCount = $issuesCount;
    }

    /**
     * Operations count
     *
     * @return int
     */
    public function getOperationsCount()
    {
        return $this->operationsCount;
    }

    /**
     * Getter very good operations count
     *
     * @return int
     */
    public function getVeryGoodOperationsCount()
    {
        return $this->veryGoodOperationsCount;
    }

    /**
     * Setter classesCount
     *
     * @param int $classesCount
     */
    public function setClassesCount($classesCount)
    {
        $this->classesCount = $classesCount;
    }

    /**
     * Getter classesCount
     *
     * @return int
     */
    public function getClassesCount()
    {
        return $this->classesCount;
    }

    /**
     * Setter criticalClassesCount
     *
     * @param int $criticalClassesCount
     */
    public function setCriticalClassesCount($criticalClassesCount)
    {
        $this->criticalClassesCount = $criticalClassesCount;
    }

    /**
     * Getter criticalClassesCount
     *
     * @return int
     */
    public function getCriticalClassesCount()
    {
        return $this->criticalClassesCount;
    }

    /**
     * Setter criticalOperationsCount
     *
     * @param int $criticalOperationsCount
     */
    public function setCriticalOperationsCount($criticalOperationsCount)
    {
        $this->criticalOperationsCount = $criticalOperationsCount;
    }

    /**
     * Getter criticalOperationsCount
     *
     * @return int
     */
    public function getCriticalOperationsCount()
    {
        return $this->criticalOperationsCount;
    }

    /**
     * Setter goodClassesCount
     *
     * @param int $goodClassesCount
     */
    public function setGoodClassesCount($goodClassesCount)
    {
        $this->goodClassesCount = $goodClassesCount;
    }

    /**
     * Getter goodClassesCount
     *
     * @return int
     */
    public function getGoodClassesCount()
    {
        return $this->goodClassesCount;
    }

    /**
     * Setter goodOperationsCount
     *
     * @param int $goodOperationsCount
     */
    public function setGoodOperationsCount($goodOperationsCount)
    {
        $this->goodOperationsCount = $goodOperationsCount;
    }

    /**
     * Getter goodOperationsCount
     *
     * @return int
     */
    public function getGoodOperationsCount()
    {
        return $this->goodOperationsCount;
    }

    /**
     * Setter passOperationsCount
     *
     * @param int $passClassesCount
     */
    public function setPassClassesCount($passClassesCount)
    {
        $this->passClassesCount = $passClassesCount;
    }

    /**
     * Getter passClassesCount
     *
     * @return int
     */
    public function getPassClassesCount()
    {
        return $this->passClassesCount;
    }

    /**
     * Setter passOperationsCount
     *
     * @param int $passOperationsCount
     */
    public function setPassOperationsCount($passOperationsCount)
    {
        $this->passOperationsCount = $passOperationsCount;
    }

    /**
     * Getter passOperationsCount
     *
     * @return int
     */
    public function getPassOperationsCount()
    {
        return $this->passOperationsCount;
    }

    /**
     * Setter satisfactoryClassesCount
     *
     * @param int $satisfactoryClassesCount
     */
    public function setSatisfactoryClassesCount($satisfactoryClassesCount)
    {
        $this->satisfactoryClassesCount = $satisfactoryClassesCount;
    }

    /**
     * Getter satisfactoryClassesCount
     *
     * @return int
     */
    public function getSatisfactoryClassesCount()
    {
        return $this->satisfactoryClassesCount;
    }

    /**
     * Setter satisfactoryOperationsCount
     *
     * @param int $satisfactoryOperationsCount
     */
    public function setSatisfactoryOperationsCount($satisfactoryOperationsCount)
    {
        $this->satisfactoryOperationsCount = $satisfactoryOperationsCount;
    }

    /**
     * Getter satisfactoryOperationsCount
     *
     * @return int
     */
    public function getSatisfactoryOperationsCount()
    {
        return $this->satisfactoryOperationsCount;
    }

    /**
     * Setter veryGoodClassesCount
     *
     * @param int $veryGoodClassesCount
     */
    public function setVeryGoodClassesCount($veryGoodClassesCount)
    {
        $this->veryGoodClassesCount = $veryGoodClassesCount;
    }

    /**
     * Getter veryGoodClassesCount
     *
     * @return int
     */
    public function getVeryGoodClassesCount()
    {
        return $this->veryGoodClassesCount;
    }

    /**
     * Setter veryGoodOperationsCount
     *
     * @param int $veryGoodOperationsCount
     */
    public function setVeryGoodOperationsCount($veryGoodOperationsCount)
    {
        $this->veryGoodOperationsCount = $veryGoodOperationsCount;
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
