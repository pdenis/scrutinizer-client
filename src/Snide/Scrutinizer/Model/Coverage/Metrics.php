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
    protected $files;

    /**
     * @var int
     */
    protected $linesOfCode;

    /**
     * @var int
     */
    protected $nonCommentLinesOfCode;

    /**
     * @var int
     */
    protected $classes;

    /**
     * @var int
     */
    protected $methods;

    /**
     * @var int
     */
    protected $coveredMethods;

    /**
     * @var int
     */
    protected $conditionals;

    /**
     * @var int
     */
    protected $coveredConditionals;

    /**
     * @var int
     */
    protected $statements;

    /**
     * @var int
     */
    protected $coveredStatements;

    /**
     * @var int
     */
    protected $elements;

    /**
     * @var int
     */
    protected $coveredElements;

    /**
     * @param int $classes
     */
    public function setClasses($classes)
    {
        $this->classes = $classes;
    }

    /**
     * @return int
     */
    public function getClasses()
    {
        return $this->classes;
    }

    /**
     * @param int $conditionals
     */
    public function setConditionals($conditionals)
    {
        $this->conditionals = $conditionals;
    }

    /**
     * @return int
     */
    public function getConditionals()
    {
        return $this->conditionals;
    }

    /**
     * @param int $coveredConditionals
     */
    public function setCoveredConditionals($coveredConditionals)
    {
        $this->coveredConditionals = $coveredConditionals;
    }

    /**
     * @return int
     */
    public function getCoveredConditionals()
    {
        return $this->coveredConditionals;
    }

    /**
     * @param int $coveredElements
     */
    public function setCoveredElements($coveredElements)
    {
        $this->coveredElements = $coveredElements;
    }

    /**
     * @return int
     */
    public function getCoveredElements()
    {
        return $this->coveredElements;
    }

    /**
     * @param int $coveredMethods
     */
    public function setCoveredMethods($coveredMethods)
    {
        $this->coveredMethods = $coveredMethods;
    }

    /**
     * @return int
     */
    public function getCoveredMethods()
    {
        return $this->coveredMethods;
    }

    /**
     * @param int $coveredStatements
     */
    public function setCoveredStatements($coveredStatements)
    {
        $this->coveredStatements = $coveredStatements;
    }

    /**
     * @return int
     */
    public function getCoveredStatements()
    {
        return $this->coveredStatements;
    }

    /**
     * @param int $elements
     */
    public function setElements($elements)
    {
        $this->elements = $elements;
    }

    /**
     * @return int
     */
    public function getElements()
    {
        return $this->elements;
    }

    /**
     * @param int $files
     */
    public function setFiles($files)
    {
        $this->files = $files;
    }

    /**
     * @return int
     */
    public function getFiles()
    {
        return $this->files;
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
     * @param int $methods
     */
    public function setMethods($methods)
    {
        $this->methods = $methods;
    }

    /**
     * @return int
     */
    public function getMethods()
    {
        return $this->methods;
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
     * @param int $statements
     */
    public function setStatements($statements)
    {
        $this->statements = $statements;
    }

    /**
     * @return int
     */
    public function getStatements()
    {
        return $this->statements;
    }
}
