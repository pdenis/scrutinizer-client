<?php

/*
 * This file is part of the Snide scrutinizer-client package.
 *
 * (c) Pascal DENIS <pascal.denis.75@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Snide\Scrutinizer\Model\Coverage;

/**
 * Class Metrics
 *
 * @author Pascal DENIS <pascal.denis.75@bgmail.com>
 */
class Metrics
{
    /**
     * @var int
     */
    protected $filesCount;
    /**
     * @var int
     */
    protected $codeLinesCount;
    /**
     * @var int
     */
    protected $nonCommentCodeLinesCount;
    /**
     * @var int
     */
    protected $classesCount;
    /**
     * @var int
     */
    protected $methodsCount;
    /**
     * @var int
     */
    protected $coveredMethodsCount;
    /**
     * @var int
     */
    protected $conditionnalsCount;
    /**
     * @var int
     */
    protected $coveredConditionnalsCount;
    /**
     * @var int
     */
    protected $statementsCount;
    /**
     * @var int
     */
    protected $coveredStatementsCount;
    /**
     * @var int
     */
    protected $elementsCount;
    /**
     * @var int
     */
    protected $coveredElementsCount;

    /**
     * @param int $classesCount
     */
    public function setClassesCount($classesCount)
    {
        $this->classesCount = $classesCount;
    }

    /**
     * @return int
     */
    public function getClassesCount()
    {
        return $this->classesCount;
    }

    /**
     * @param int $codeLinesCount
     */
    public function setCodeLinesCount($codeLinesCount)
    {
        $this->codeLinesCount = $codeLinesCount;
    }

    /**
     * @return int
     */
    public function getCodeLinesCount()
    {
        return $this->codeLinesCount;
    }

    /**
     * @param int $conditionnalsCount
     */
    public function setConditionnalsCount($conditionnalsCount)
    {
        $this->conditionnalsCount = $conditionnalsCount;
    }

    /**
     * @return int
     */
    public function getConditionnalsCount()
    {
        return $this->conditionnalsCount;
    }

    /**
     * @param int $coveredConditionnalsCount
     */
    public function setCoveredConditionnalsCount($coveredConditionnalsCount)
    {
        $this->coveredConditionnalsCount = $coveredConditionnalsCount;
    }

    /**
     * @return int
     */
    public function getCoveredConditionnalsCount()
    {
        return $this->coveredConditionnalsCount;
    }

    /**
     * @param int $coveredElementsCount
     */
    public function setCoveredElementsCount($coveredElementsCount)
    {
        $this->coveredElementsCount = $coveredElementsCount;
    }

    /**
     * @return int
     */
    public function getCoveredElementsCount()
    {
        return $this->coveredElementsCount;
    }

    /**
     * @param int $coveredMethodsCount
     */
    public function setCoveredMethodsCount($coveredMethodsCount)
    {
        $this->coveredMethodsCount = $coveredMethodsCount;
    }

    /**
     * @return int
     */
    public function getCoveredMethodsCount()
    {
        return $this->coveredMethodsCount;
    }

    /**
     * @param int $coveredStatementsCount
     */
    public function setCoveredStatementsCount($coveredStatementsCount)
    {
        $this->coveredStatementsCount = $coveredStatementsCount;
    }

    /**
     * @return int
     */
    public function getCoveredStatementsCount()
    {
        return $this->coveredStatementsCount;
    }

    /**
     * @param int $elementsCount
     */
    public function setElementsCount($elementsCount)
    {
        $this->elementsCount = $elementsCount;
    }

    /**
     * @return int
     */
    public function getElementsCount()
    {
        return $this->elementsCount;
    }

    /**
     * @param int $filesCount
     */
    public function setFilesCount($filesCount)
    {
        $this->filesCount = $filesCount;
    }

    /**
     * @return int
     */
    public function getFilesCount()
    {
        return $this->filesCount;
    }

    /**
     * @param int $methodsCount
     */
    public function setMethodsCount($methodsCount)
    {
        $this->methodsCount = $methodsCount;
    }

    /**
     * @return int
     */
    public function getMethodsCount()
    {
        return $this->methodsCount;
    }

    /**
     * @param int $nonCommentCodeLines
     */
    public function setNonCommentCodeLinesCount($nonCommentCodeLinesCount)
    {
        $this->nonCommentCodeLinesCount = $nonCommentCodeLinesCount;
    }

    /**
     * @return int
     */
    public function getNonCommentCodeLinesCount()
    {
        return $this->nonCommentCodeLinesCount;
    }

    /**
     * @param int $statementsCount
     */
    public function setStatementsCount($statementsCount)
    {
        $this->statementsCount = $statementsCount;
    }

    /**
     * @return int
     */
    public function getStatementsCount()
    {
        return $this->statementsCount;
    }

    /**
     * Load coverage metrics from array
     *
     * @param array $data
     */
    public function fromArray(array $data)
    {
        if(isset($data['php_code_coverage.files'])) {
            $this->filesCount = $data['php_code_coverage.files'];
            $this->codeLinesCount = $data['php_code_coverage.lines_of_code'];
            $this->nonCommentCodeLinesCount = $data['php_code_coverage.non_comment_lines_of_code'];
            $this->classesCount = $data['php_code_coverage.classes'];
            $this->methodsCount = $data['php_code_coverage.methods'];
            $this->coveredMethodsCount = $data['php_code_coverage.covered_methods'];
            $this->conditionnalsCount = $data['php_code_coverage.conditionals'];
            $this->coveredConditionnalsCount = $data['php_code_coverage.covered_conditionals'];
            $this->statementsCount = $data['php_code_coverage.statements'];
            $this->coveredStatementsCount = $data['php_code_coverage.covered_statements'];
            $this->elementsCount = $data['php_code_coverage.elements'];
            $this->coveredElementsCount = $data['php_code_coverage.covered_elements'];
        }
    }
}