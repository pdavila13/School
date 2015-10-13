<?php

namespace Com\Iesebre\Dam2\paolodavila\Curriculum;

/**
 * Created by PhpStorm.
 * User: pdavila
 * Date: 5/10/15
 * Time: 19:58
 */

/**
 * Class StudyModule
 * @package Com\Iesebre\Dam2\paolodavila\Curriculum
 */
class StudyModule extends Study{

    /**
     * @var
     */
    public $studyModuleId;

    /**
     * @var
     */
    public $studyModuleShortName;

    /**
     * @var
     */
    public $studyModuleName;

    /**
     * @var
     */
    public $studyModuleDescription;

    /**
     * @var
     */
    public $studyModuleType;

    /**
     * @return mixed
     */
    public function getStudyModuleId(){
        return $this->studyModuleId;
    }

    /**
     * @param mixed $studyModuleId
     */
    public function setStudyModuleId($studyModuleId){
        $this->studyModuleId = $studyModuleId;
    }

    /**
     * @return mixed
     */
    public function getStudyModuleShortName(){
        return $this->studyModuleShortName;
    }

    /**
     * @param mixed $studyModuleShortName
     */
    public function setStudyModuleShortName($studyModuleShortName){
        $this->studyModuleShortName = $studyModuleShortName;
    }

    /**
     * @return mixed
     */
    public function getStudyModuleName(){
        return $this->studyModuleName;
    }

    /**
     * @param mixed $studyModuleName
     */
    public function setStudyModuleName($studyModuleName){
        $this->studyModuleName = $studyModuleName;
    }

    /**
     * @return mixed
     */
    public function getStudyModuleDescription(){
        return $this->studyModuleDescription;
    }

    /**
     * @param mixed $studyModuleDescription
     */
    public function setStudyModuleDescription($studyModuleDescription){
        $this->studyModuleDescription = $studyModuleDescription;
    }

    /**
     * @return mixed
     */
    public function getStudyModuleType(){
        return $this->studyModuleType;
    }

    /**
     * @param mixed $studyModuleType
     */
    public function setStudyModuleType($studyModuleType){
        $this->studyModuleType = $studyModuleType;
    }

}