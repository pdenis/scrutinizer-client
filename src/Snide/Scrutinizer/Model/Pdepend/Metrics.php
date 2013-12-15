<?php

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
    protected $nonCommentCodeLines;
    /**
     * @var int
     */
    protected $maxInheritanceDepth;
    /**
     * @var int
     */
    protected $codeLines;
    /**
     * @var int
     */
    protected $logicalCodeLines;
    /**
     * @var int
     */
    protected $leadClassesCount;
    /**
     * @var int
     */
    protected $referencedClassesCount;
    /**
     * @var int
     */
    protected $executableCodeLines;
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
    protected $commentCodeLines;
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
    protected $calls;
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
        $this->calls = $data['pdepend.calls'];
        $this->codeLines = $data['pdepend.lines_of_code'];
        $this->commentCodeLines = $data['pdepend.comment_lines_of_code'];
        $this->derivedClassesAvg = $data['pdepend.average_number_of_derived_classes'];
        $this->executableCodeLines = $data['pdepend.executable_lines_of_code'];
        $this->logicalCodeLines = $data['pdepend.logical_lines_of_code'];
        $this->maxInheritanceDepth = $data['pdepend.maximum_depth_of_inheritance_tree'];
        $this->nonCommentCodeLines = $data['pdepend.non_comment_lines_of_code'];
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
        $this->leadClassesCount = $data['pdepend.number_of_leaf_classes'];
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
     * @param mixed $calls
     * @return int
     */
    public function setCalls($calls)
    {
        $this->calls = $calls;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getCalls()
    {
        return $this->calls;
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
     * @param mixed $codeLines
     * @return int
     */
    public function setCodeLines($codeLines)
    {
        $this->codeLines = $codeLines;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getCodeLines()
    {
        return $this->codeLines;
    }

    /**
     * @param mixed $commentCodeLines
     * @return int
     */
    public function setCommentCodeLines($commentCodeLines)
    {
        $this->commentCodeLines = $commentCodeLines;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getCommentCodeLines()
    {
        return $this->commentCodeLines;
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
     * @param mixed $executableCodeLines
     * @return int
     */
    public function setExecutableCodeLines($executableCodeLines)
    {
        $this->executableCodeLines = $executableCodeLines;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getExecutableCodeLines()
    {
        return $this->executableCodeLines;
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
     * @param mixed $leadClassesCount
     * @return int
     */
    public function setLeadClassesCount($leadClassesCount)
    {
        $this->leadClassesCount = $leadClassesCount;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getLeadClassesCount()
    {
        return $this->leadClassesCount;
    }

    /**
     * @param mixed $logicalCodeLines
     * @return int
     */
    public function setLogicalCodeLines($logicalCodeLines)
    {
        $this->logicalCodeLines = $logicalCodeLines;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getLogicalCodeLines()
    {
        return $this->logicalCodeLines;
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
     * @param mixed $nonCommentCodeLines
     * @return int
     */
    public function setNonCommentCodeLines($nonCommentCodeLines)
    {
        $this->nonCommentCodeLines = $nonCommentCodeLines;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getNonCommentCodeLines()
    {
        return $this->nonCommentCodeLines;
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
