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


/**
 * Class $this
 *
 * @author Pascal DENIS <pascal.denis.75@gmail.com>
 */
class Metrics
{
    /**
     * test coverage indicator
     *
     * @var float
     */
    protected $testCoverage;

    /**
     * Quality indicator
     *
     * @var float
     */
    protected $quality;

    /**
     * @var int
     */
    protected $nbElements;

    /**
     * @var int
     */
    protected $nbClasses;

    /**
     * @var int
     */
    protected $nbClassesVeryGood;

    /**
     * @var int
     */
    protected $nbClassesGood;

    /**
     * @var int
     */
    protected $nbClassesSatisfactory;

    /**
     * @var int
     */
    protected $nbClassesPass;

    /**
     * @var int
     */
    protected $nbClassesCritical;

    /**
     * @var int
     */
    protected $nbOperations;

    /**
     * @var int
     */
    protected $nbOperationsVeryGood;

    /**
     * @var int
     */
    protected $nbOperationsGood;

    /**
     * @var int
     */
    protected $nbOperationsSatisfactory;

    /**
     * @var int
     */
    protected $nbOperationsPass;

    /**
     * @var int
     */
    protected $nbOperationsCritical;

    /**
     * @var float
     */
    protected $weightVeryGood;

    /**
     * @var float
     */
    protected $weightGood;

    /**
     * @var float
     */
    protected $weightSatisfactory;

    /**
     * @var float
     */
    protected $weightPass;

    /**
     * @var float
     */
    protected $weightCritical;

    /**
     * @var int
     */
    protected $nbIssues;

    /**
     * @var int
     */
    protected $nbIgnoredIssues;

    /**
     * @var float
     */
    protected $operationsWeightVeryGood;

    /**
     * @var float
     */
    protected $operationsWeightGood;

    /**
     * @var float
     */
    protected $operationsWeightSatisfactory;

    /**
     * @var float
     */
    protected $operationsWeightPass;

    /**
     * @var float
     */
    protected $operationsWeightCritical;

    /**
     * @param float $operationsWeightCritical
     */
    public function setOperationsWeightCritical($operationsWeightCritical)
    {
        $this->operationsWeightCritical = $operationsWeightCritical;
    }

    /**
     * @return float
     */
    public function getOperationsWeightCritical()
    {
        return $this->operationsWeightCritical;
    }

    /**
     * @param float $operationsWeightGood
     */
    public function setOperationsWeightGood($operationsWeightGood)
    {
        $this->operationsWeightGood = $operationsWeightGood;
    }

    /**
     * @return float
     */
    public function getOperationsWeightGood()
    {
        return $this->operationsWeightGood;
    }

    /**
     * @param float $operationsWeightPass
     */
    public function setOperationsWeightPass($operationsWeightPass)
    {
        $this->operationsWeightPass = $operationsWeightPass;
    }

    /**
     * @return float
     */
    public function getOperationsWeightPass()
    {
        return $this->operationsWeightPass;
    }

    /**
     * @param float $operationsWeightSatisfactory
     */
    public function setOperationsWeightSatisfactory($operationsWeightSatisfactory)
    {
        $this->operationsWeightSatisfactory = $operationsWeightSatisfactory;
    }

    /**
     * @return float
     */
    public function getOperationsWeightSatisfactory()
    {
        return $this->operationsWeightSatisfactory;
    }

    /**
     * @param float $operationsWeightVeryGood
     */
    public function setOperationsWeightVeryGood($operationsWeightVeryGood)
    {
        $this->operationsWeightVeryGood = $operationsWeightVeryGood;
    }

    /**
     * @return float
     */
    public function getOperationsWeightVeryGood()
    {
        return $this->operationsWeightVeryGood;
    }

    /**
     * @param int $nbClasses
     */
    public function setNbClasses($nbClasses)
    {
        $this->nbClasses = $nbClasses;
    }

    /**
     * @return int
     */
    public function getNbClasses()
    {
        return $this->nbClasses;
    }

    /**
     * @param int $nbClassesCritical
     */
    public function setNbClassesCritical($nbClassesCritical)
    {
        $this->nbClassesCritical = $nbClassesCritical;
    }

    /**
     * @return int
     */
    public function getNbClassesCritical()
    {
        return $this->nbClassesCritical;
    }

    /**
     * @param int $nbClassesGood
     */
    public function setNbClassesGood($nbClassesGood)
    {
        $this->nbClassesGood = $nbClassesGood;
    }

    /**
     * @return int
     */
    public function getNbClassesGood()
    {
        return $this->nbClassesGood;
    }

    /**
     * @param int $nbClassesPass
     */
    public function setNbClassesPass($nbClassesPass)
    {
        $this->nbClassesPass = $nbClassesPass;
    }

    /**
     * @return int
     */
    public function getNbClassesPass()
    {
        return $this->nbClassesPass;
    }

    /**
     * @param int $nbClassesSatisfactory
     */
    public function setNbClassesSatisfactory($nbClassesSatisfactory)
    {
        $this->nbClassesSatisfactory = $nbClassesSatisfactory;
    }

    /**
     * @return int
     */
    public function getNbClassesSatisfactory()
    {
        return $this->nbClassesSatisfactory;
    }

    /**
     * @param int $nbClassesVeryGood
     */
    public function setNbClassesVeryGood($nbClassesVeryGood)
    {
        $this->nbClassesVeryGood = $nbClassesVeryGood;
    }

    /**
     * @return int
     */
    public function getNbClassesVeryGood()
    {
        return $this->nbClassesVeryGood;
    }

    /**
     * @param int $nbElements
     */
    public function setNbElements($nbElements)
    {
        $this->nbElements = $nbElements;
    }

    /**
     * @return int
     */
    public function getNbElements()
    {
        return $this->nbElements;
    }

    /**
     * @param int $nbIgnoredIssues
     */
    public function setNbIgnoredIssues($nbIgnoredIssues)
    {
        $this->nbIgnoredIssues = $nbIgnoredIssues;
    }

    /**
     * @return int
     */
    public function getNbIgnoredIssues()
    {
        return $this->nbIgnoredIssues;
    }

    /**
     * @param int $nbIssues
     */
    public function setNbIssues($nbIssues)
    {
        $this->nbIssues = $nbIssues;
    }

    /**
     * @return int
     */
    public function getNbIssues()
    {
        return $this->nbIssues;
    }

    /**
     * @param int $nbOperations
     */
    public function setNbOperations($nbOperations)
    {
        $this->nbOperations = $nbOperations;
    }

    /**
     * @return int
     */
    public function getNbOperations()
    {
        return $this->nbOperations;
    }

    /**
     * @param int $nbOperationsCritical
     */
    public function setNbOperationsCritical($nbOperationsCritical)
    {
        $this->nbOperationsCritical = $nbOperationsCritical;
    }

    /**
     * @return int
     */
    public function getNbOperationsCritical()
    {
        return $this->nbOperationsCritical;
    }

    /**
     * @param int $nbOperationsGood
     */
    public function setNbOperationsGood($nbOperationsGood)
    {
        $this->nbOperationsGood = $nbOperationsGood;
    }

    /**
     * @return int
     */
    public function getNbOperationsGood()
    {
        return $this->nbOperationsGood;
    }

    /**
     * @param int $nbOperationsPass
     */
    public function setNbOperationsPass($nbOperationsPass)
    {
        $this->nbOperationsPass = $nbOperationsPass;
    }

    /**
     * @return int
     */
    public function getNbOperationsPass()
    {
        return $this->nbOperationsPass;
    }

    /**
     * @param int $nbOperationsSatisfactory
     */
    public function setNbOperationsSatisfactory($nbOperationsSatisfactory)
    {
        $this->nbOperationsSatisfactory = $nbOperationsSatisfactory;
    }

    /**
     * @return int
     */
    public function getNbOperationsSatisfactory()
    {
        return $this->nbOperationsSatisfactory;
    }

    /**
     * @param int $nbOperationsVeryGood
     */
    public function setNbOperationsVeryGood($nbOperationsVeryGood)
    {
        $this->nbOperationsVeryGood = $nbOperationsVeryGood;
    }

    /**
     * @return int
     */
    public function getNbOperationsVeryGood()
    {
        return $this->nbOperationsVeryGood;
    }

    /**
     * @param float $quality
     */
    public function setQuality($quality)
    {
        $this->quality = $quality;
    }

    /**
     * @return float
     */
    public function getQuality()
    {
        return $this->quality;
    }

    /**
     * @param float $testCoverage
     */
    public function setTestCoverage($testCoverage)
    {
        $this->testCoverage = $testCoverage;
    }

    /**
     * @return float
     */
    public function getTestCoverage()
    {
        return $this->testCoverage;
    }

    /**
     * @param float $weightCritical
     */
    public function setWeightCritical($weightCritical)
    {
        $this->weightCritical = $weightCritical;
    }

    /**
     * @return float
     */
    public function getWeightCritical()
    {
        return $this->weightCritical;
    }

    /**
     * @param float $weightGood
     */
    public function setWeightGood($weightGood)
    {
        $this->weightGood = $weightGood;
    }

    /**
     * @return float
     */
    public function getWeightGood()
    {
        return $this->weightGood;
    }

    /**
     * @param float $weightPass
     */
    public function setWeightPass($weightPass)
    {
        $this->weightPass = $weightPass;
    }

    /**
     * @return float
     */
    public function getWeightPass()
    {
        return $this->weightPass;
    }

    /**
     * @param float $weightSatisfactory
     */
    public function setWeightSatisfactory($weightSatisfactory)
    {
        $this->weightSatisfactory = $weightSatisfactory;
    }

    /**
     * @return float
     */
    public function getWeightSatisfactory()
    {
        return $this->weightSatisfactory;
    }

    /**
     * @param float $weightVeryGood
     */
    public function setWeightVeryGood($weightVeryGood)
    {
        $this->weightVeryGood = $weightVeryGood;
    }

    /**
     * @return float
     */
    public function getWeightVeryGood()
    {
        return $this->weightVeryGood;
    }

}
