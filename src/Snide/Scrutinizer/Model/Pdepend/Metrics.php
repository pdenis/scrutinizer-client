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
/**
 * Class Metrics
 * @package Snide\Scrutinizer\Model\Pdepend
 */
class Metrics
{
    /**
     * @var int
     */
    protected $packagesCount;
    /**
     * @var int
     */
    protected $methodsCount;
    /**
     * @var int
     */
    protected $interfacesCount;
    /**
     * @var int
     */
    protected $functionsCount;
    /**
     * @var int
     */
    protected $classesCount;
    /**
     * @var int
     */
    protected $nonCommentCodeLinesCount;
    /**
     * @var int
     */
    protected $maxInheritanceDepth;
    /**
     * @var int
     */
    protected $codeLinesCount;
    /**
     * @var int
     */
    protected $logicalCodeLinesCount;
    /**
     * @var int
     */
    protected $leafClassesCount;
    /**
     * @var int
     */
    protected $referencedClassesCount;
    /**
     * @var int
     */
    protected $executableCodeLinesCount;
    /**
     * @var int
     */
    protected $concreteClassesCount;
    /**
     * @var int
     */
    protected $abstractClassesCount;
    /**
     * @var int
     */
    protected $commentCodeLinesCount;
    /**
     * @var int
     */
    protected $extendedCyclomaticCount;
    /**
     * @var int
     */
    protected $cyclomaticCount;
    /**
     * @var int
     */
    protected $callsCount;
    /**
     * @var float
     */
    protected $derivedClassesAvg;
    /**
     * @var float
     */
    protected $hierarchyHeightAvg;

    /**
     * Load metrics from array
     *
     * @param array $data
     */
    public function fromArray($data = array())
    {
        if(isset($data['pdepend.average_hierarchy_height'])) {
            $this->loadGeneralFromArray($data);
            $this->loadCountFromArray($data);
        }
    }

    /**
     * Load general infos from array
     *
     * @param array $data
     */
    public function loadGeneralFromArray($data = array())
    {
        $this->callsCount = $data['pdepend.calls'];
        $this->codeLinesCount = $data['pdepend.lines_of_code'];
        $this->commentCodeLinesCount = $data['pdepend.comment_lines_of_code'];
        $this->derivedClassesAvg = $data['pdepend.average_number_of_derived_classes'];
        $this->executableCodeLinesCount = $data['pdepend.executable_lines_of_code'];
        $this->logicalCodeLinesCount = $data['pdepend.logical_lines_of_code'];
        $this->maxInheritanceDepth = $data['pdepend.maximum_depth_of_inheritance_tree'];
        $this->nonCommentCodeLinesCount = $data['pdepend.non_comment_lines_of_code'];
        $this->hierarchyHeightAvg = $data['pdepend.average_hierarchy_height'];
    }

    /**
     * Load countable infos from array
     *
     * @param array $data
     */
    public function loadCountFromArray($data = array())
    {

        $this->abstractClassesCount = $data['pdepend.number_of_abstract_classes'];
        $this->classesCount = $data['pdepend.number_of_classes'];
        $this->concreteClassesCount = $data['pdepend.number_of_concrete_classes'];
        $this->cyclomaticCount = $data['pdepend.extended_cyclomatic_complexity_number'];;
        $this->extendedCyclomaticCount = $data['pdepend.extended_cyclomatic_complexity_number'];
        $this->cyclomaticCount = $data['pdepend.cyclomatic_complexity_number'];
        $this->methodsCount = $data['pdepend.number_of_methods'];
        $this->interfacesCount = $data['pdepend.number_of_interfaces'];
        $this->functionsCount = $data['pdepend.number_of_functions'];
        $this->packagesCount = $data['pdepend.number_of_packages'];
        $this->leafClassesCount = $data['pdepend.number_of_leaf_classes'];
        $this->referencedClassesCount = $data['pdepend.number_of_referenced_classes'];
    }

    /**
     * @param mixed $abstractClassesCount
     * @return int
     */
    public function setAbstractClassesCount($abstractClassesCount)
    {
        $this->abstractClassesCount = $abstractClassesCount;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getAbstractClassesCount()
    {
        return $this->abstractClassesCount;
    }

    /**
     * @param mixed $callsCount
     * @return int
     */
    public function setCallsCount($callsCount)
    {
        $this->callsCount = $callsCount;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getCallsCount()
    {
        return $this->callsCount;
    }

    /**
     * @param mixed $classesCount
     * @return int
     */
    public function setClassesCount($classesCount)
    {
        $this->classesCount = $classesCount;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getClassesCount()
    {
        return $this->classesCount;
    }

    /**
     * @param mixed $codeLinesCount
     * @return int
     */
    public function setCodeLinesCount($codeLinesCount)
    {
        $this->codeLinesCount = $codeLinesCount;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getCodeLinesCount()
    {
        return $this->codeLinesCount;
    }

    /**
     * @param mixed $commentCodeLinesCount
     * @return int
     */
    public function setCommentCodeLinesCount($commentCodeLinesCount)
    {
        $this->commentCodeLinesCount = $commentCodeLinesCount;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getCommentCodeLinesCount()
    {
        return $this->commentCodeLinesCount;
    }

    /**
     * @param mixed $concreteClassesCount
     * @return int
     */
    public function setConcreteClassesCount($concreteClassesCount)
    {
        $this->concreteClassesCount = $concreteClassesCount;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getConcreteClassesCount()
    {
        return $this->concreteClassesCount;
    }

    /**
     * @param mixed $cyclomaticCount
     * @return int
     */
    public function setCyclomaticCount($cyclomaticCount)
    {
        $this->cyclomaticCount = $cyclomaticCount;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getCyclomaticCount()
    {
        return $this->cyclomaticCount;
    }

    /**
     * @param mixed $derivedClassesAvg
     * @return int
     */
    public function setDerivedClassesAvg($derivedClassesAvg)
    {
        $this->derivedClassesAvg = $derivedClassesAvg;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getDerivedClassesAvg()
    {
        return $this->derivedClassesAvg;
    }

    /**
     * @param mixed $executableCodeLinesCount
     * @return int
     */
    public function setExecutableCodeLinesCount($executableCodeLinesCount)
    {
        $this->executableCodeLinesCount = $executableCodeLinesCount;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getExecutableCodeLinesCount()
    {
        return $this->executableCodeLinesCount;
    }

    /**
     * @param mixed $extendedCyclomaticCount
     * @return int
     */
    public function setExtendedCyclomaticCount($extendedCyclomaticCount)
    {
        $this->extendedCyclomaticCount = $extendedCyclomaticCount;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getExtendedCyclomaticCount()
    {
        return $this->extendedCyclomaticCount;
    }

    /**
     * @param mixed $functionsCount
     * @return int
     */
    public function setFunctionsCount($functionsCount)
    {
        $this->functionsCount = $functionsCount;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getFunctionsCount()
    {
        return $this->functionsCount;
    }

    /**
     * @param mixed $hierarchyHeightAvg
     * @return int
     */
    public function setHierarchyHeightAvg($hierarchyHeightAvg)
    {
        $this->hierarchyHeightAvg = $hierarchyHeightAvg;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getHierarchyHeightAvg()
    {
        return $this->hierarchyHeightAvg;
    }

    /**
     * @param mixed $interfacesCount
     * @return int
     */
    public function setInterfacesCount($interfacesCount)
    {
        $this->interfacesCount = $interfacesCount;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getInterfacesCount()
    {
        return $this->interfacesCount;
    }

    /**
     * @param mixed $leafClassesCount
     * @return int
     */
    public function setLeafClassesCount($leafClassesCount)
    {
        $this->leafClassesCount = $leafClassesCount;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getLeafClassesCount()
    {
        return $this->leafClassesCount;
    }

    /**
     * @param mixed $logicalCodeLinesCount
     * @return int
     */
    public function setLogicalCodeLinesCount($logicalCodeLinesCount)
    {
        $this->logicalCodeLinesCount = $logicalCodeLinesCount;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getLogicalCodeLinesCount()
    {
        return $this->logicalCodeLinesCount;
    }

    /**
     * @param mixed $maxInheritanceDepth
     * @return int
     */
    public function setMaxInheritanceDepth($maxInheritanceDepth)
    {
        $this->maxInheritanceDepth = $maxInheritanceDepth;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getMaxInheritanceDepth()
    {
        return $this->maxInheritanceDepth;
    }

    /**
     * @param mixed $methodsCount
     * @return int
     */
    public function setMethodsCount($methodsCount)
    {
        $this->methodsCount = $methodsCount;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getMethodsCount()
    {
        return $this->methodsCount;
    }

    /**
     * @param mixed $nonCommentCodeLinesCount
     * @return int
     */
    public function setNonCommentCodeLinesCount($nonCommentCodeLinesCount)
    {
        $this->nonCommentCodeLinesCount = $nonCommentCodeLinesCount;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getNonCommentCodeLinesCount()
    {
        return $this->nonCommentCodeLinesCount;
    }

    /**
     * @param mixed $packagesCount
     * @return int
     */
    public function setPackagesCount($packagesCount)
    {
        $this->packagesCount = $packagesCount;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getPackagesCount()
    {
        return $this->packagesCount;
    }

    /**
     * @param mixed $referencedClassesCount
     * @return int
     */
    public function setReferencedClassesCount($referencedClassesCount)
    {
        $this->referencedClassesCount = $referencedClassesCount;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getReferencedClassesCount()
    {
        return $this->referencedClassesCount;
    }
}
