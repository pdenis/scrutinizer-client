<?php

/*
 * This file is part of the Snide scrutinizer-client package.
 *
 * (c) Pascal DENIS <pascal.denis.75@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Snide\Scrutinizer\Model\Pdepend;

/**
 * Class Metrics
 *
 * @author Pascal DENIS <pascal.denis@businessdecision.com>
 */
class Metrics
{
    /**
     * @var float
     */
    protected $averageHierarchyHeight;

    /**
     * @var float
     */
    protected $averageNumberOfDerivedClasses;

    /**
     * @var int
     */
    protected $calls;

    /**
     * @var int
     */
    protected $cyclomaticComplexityNumber;

    /**
     * @var int
     */
    protected $extendedCyclomaticComplexityNumber;

    /**
     * @var int
     */
    protected $commentLinesOfCode;

    /**
     * @var int
     */
    protected $numberOfAbstractClasses;

    /**
     * @var int
     */
    protected $numberOfConcreteClasses;

    /**
     * @var int
     */
    protected $executableLinesOfCode;

    /**
     * @var int
     */
    protected $numberOfReferencedClasses;

    /**
     * @var int
     */
    protected $numberOfLeafClasses;

    /**
     * @var int
     */
    protected $logicalLinesOfCode;

    /**
     * @var int
     */
    protected $linesOfCode;

    /**
     * @varint
     */
    protected $maximumDepthOfInheritanceTree;

    /**
     * @var int
     */
    protected $nonCommentLinesOfCode;

    /**
     * @var int
     */
    protected $numberOfClasses;

    /**
     * @var int
     */
    protected $numberOfFunctions;

    /**
     * @var int
     */
    protected $numberOfInterfaces;

    /**
     * @var int
     */
    protected $numberOfMethods;

    /**
     * @var int
     */
    protected $numberOfPackages;

    /**
     * @var int
     */
    protected $roots;

    /**
     * @param float $averageHierarchyHeight
     */
    public function setAverageHierarchyHeight($averageHierarchyHeight)
    {
        $this->averageHierarchyHeight = $averageHierarchyHeight;
    }

    /**
     * @return float
     */
    public function getAverageHierarchyHeight()
    {
        return $this->averageHierarchyHeight;
    }

    /**
     * @param float $averageNumberOfDerivedClasses
     */
    public function setAverageNumberOfDerivedClasses($averageNumberOfDerivedClasses)
    {
        $this->averageNumberOfDerivedClasses = $averageNumberOfDerivedClasses;
    }

    /**
     * @return float
     */
    public function getAverageNumberOfDerivedClasses()
    {
        return $this->averageNumberOfDerivedClasses;
    }

    /**
     * @param int $calls
     */
    public function setCalls($calls)
    {
        $this->calls = $calls;
    }

    /**
     * @return int
     */
    public function getCalls()
    {
        return $this->calls;
    }

    /**
     * @param int $commentLinesOfCode
     */
    public function setCommentLinesOfCode($commentLinesOfCode)
    {
        $this->commentLinesOfCode = $commentLinesOfCode;
    }

    /**
     * @return int
     */
    public function getCommentLinesOfCode()
    {
        return $this->commentLinesOfCode;
    }

    /**
     * @param int $cyclomaticComplexityNumber
     */
    public function setCyclomaticComplexityNumber($cyclomaticComplexityNumber)
    {
        $this->cyclomaticComplexityNumber = $cyclomaticComplexityNumber;
    }

    /**
     * @return int
     */
    public function getCyclomaticComplexityNumber()
    {
        return $this->cyclomaticComplexityNumber;
    }

    /**
     * @param int $executableLinesOfCode
     */
    public function setExecutableLinesOfCode($executableLinesOfCode)
    {
        $this->executableLinesOfCode = $executableLinesOfCode;
    }

    /**
     * @return int
     */
    public function getExecutableLinesOfCode()
    {
        return $this->executableLinesOfCode;
    }

    /**
     * @param int $extendedCyclomaticComplexityNumber
     */
    public function setExtendedCyclomaticComplexityNumber($extendedCyclomaticComplexityNumber)
    {
        $this->extendedCyclomaticComplexityNumber = $extendedCyclomaticComplexityNumber;
    }

    /**
     * @return int
     */
    public function getExtendedCyclomaticComplexityNumber()
    {
        return $this->extendedCyclomaticComplexityNumber;
    }

    /**
     * @param int $linesOfCode
     */
    public function setLinesOfCode($linesOfCode)
    {
        $this->linesOfCode = $linesOfCode;
    }

    /**
     * @return int
     */
    public function getLinesOfCode()
    {
        return $this->linesOfCode;
    }

    /**
     * @param int $logicalLinesOfCode
     */
    public function setLogicalLinesOfCode($logicalLinesOfCode)
    {
        $this->logicalLinesOfCode = $logicalLinesOfCode;
    }

    /**
     * @return int
     */
    public function getLogicalLinesOfCode()
    {
        return $this->logicalLinesOfCode;
    }

    /**
     * @param mixed $maximumDepthOfInheritanceTree
     */
    public function setMaximumDepthOfInheritanceTree($maximumDepthOfInheritanceTree)
    {
        $this->maximumDepthOfInheritanceTree = $maximumDepthOfInheritanceTree;
    }

    /**
     * @return mixed
     */
    public function getMaximumDepthOfInheritanceTree()
    {
        return $this->maximumDepthOfInheritanceTree;
    }

    /**
     * @param int $nonCommentLinesOfCode
     */
    public function setNonCommentLinesOfCode($nonCommentLinesOfCode)
    {
        $this->nonCommentLinesOfCode = $nonCommentLinesOfCode;
    }

    /**
     * @return int
     */
    public function getNonCommentLinesOfCode()
    {
        return $this->nonCommentLinesOfCode;
    }

    /**
     * @param int $numberOfAbstractClasses
     */
    public function setNumberOfAbstractClasses($numberOfAbstractClasses)
    {
        $this->numberOfAbstractClasses = $numberOfAbstractClasses;
    }

    /**
     * @return int
     */
    public function getNumberOfAbstractClasses()
    {
        return $this->numberOfAbstractClasses;
    }

    /**
     * @param int $numberOfClasses
     */
    public function setNumberOfClasses($numberOfClasses)
    {
        $this->numberOfClasses = $numberOfClasses;
    }

    /**
     * @return int
     */
    public function getNumberOfClasses()
    {
        return $this->numberOfClasses;
    }

    /**
     * @param int $numberOfConcreteClasses
     */
    public function setNumberOfConcreteClasses($numberOfConcreteClasses)
    {
        $this->numberOfConcreteClasses = $numberOfConcreteClasses;
    }

    /**
     * @return int
     */
    public function getNumberOfConcreteClasses()
    {
        return $this->numberOfConcreteClasses;
    }

    /**
     * @param int $numberOfFunctions
     */
    public function setNumberOfFunctions($numberOfFunctions)
    {
        $this->numberOfFunctions = $numberOfFunctions;
    }

    /**
     * @return int
     */
    public function getNumberOfFunctions()
    {
        return $this->numberOfFunctions;
    }

    /**
     * @param int $numberOfInterfaces
     */
    public function setNumberOfInterfaces($numberOfInterfaces)
    {
        $this->numberOfInterfaces = $numberOfInterfaces;
    }

    /**
     * @return int
     */
    public function getNumberOfInterfaces()
    {
        return $this->numberOfInterfaces;
    }

    /**
     * @param int $numberOfLeafClasses
     */
    public function setNumberOfLeafClasses($numberOfLeafClasses)
    {
        $this->numberOfLeafClasses = $numberOfLeafClasses;
    }

    /**
     * @return int
     */
    public function getNumberOfLeafClasses()
    {
        return $this->numberOfLeafClasses;
    }

    /**
     * @param int $numberOfMethods
     */
    public function setNumberOfMethods($numberOfMethods)
    {
        $this->numberOfMethods = $numberOfMethods;
    }

    /**
     * @return int
     */
    public function getNumberOfMethods()
    {
        return $this->numberOfMethods;
    }

    /**
     * @param int $numberOfPackages
     */
    public function setNumberOfPackages($numberOfPackages)
    {
        $this->numberOfPackages = $numberOfPackages;
    }

    /**
     * @return int
     */
    public function getNumberOfPackages()
    {
        return $this->numberOfPackages;
    }

    /**
     * @param int $numberOfReferencedClasses
     */
    public function setNumberOfReferencedClasses($numberOfReferencedClasses)
    {
        $this->numberOfReferencedClasses = $numberOfReferencedClasses;
    }

    /**
     * @return int
     */
    public function getNumberOfReferencedClasses()
    {
        return $this->numberOfReferencedClasses;
    }

    /**
     * @param int $roots
     */
    public function setRoots($roots)
    {
        $this->roots = $roots;
    }

    /**
     * @return int
     */
    public function getRoots()
    {
        return $this->roots;
    }

}
