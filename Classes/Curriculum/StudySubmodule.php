<?php

namespace Com\Iesebre\Dam2\paolodavila\Curriculum;

/**
 * Created by PhpStorm.
 * User: pdavila
 * Date: 5/10/15
 * Time: 19:58
 */

/**
 * Class StudySubmodule
 * @package Com\Iesebre\Dam2\paolodavila\Curriculum
 */
class StudySubmodule extends StudyModule{

    /**
     * @var
     */
    public $studySubmoduleId;

    /**
     * @var
     */
    public $studySubmoduleShortName;

    /**
     * @var
     */
    public $studySubmoduleName;

    /**
     * @var
     */
    public $studySubmoduleDescription;



    /**
     * @return mixed
     */
    public function getStudySubmoduleId(){
        return $this->studySubmoduleId;
    }

    /**
     * @param mixed $studySubmoduleId
     */
    public function setStudySubmoduleId($studySubmoduleId){
        $this->studySubmoduleId = $studySubmoduleId;
    }

    /**
     * @return mixed
     */
    public function getStudySubmoduleShortName(){
        return $this->studySubmoduleShortName;
    }

    /**
     * @param mixed $studySubmoduleShortName
     */
    public function setStudySubmoduleShortName($studySubmoduleShortName){
        $this->studySubmoduleShortName = $studySubmoduleShortName;
    }

    /**
     * @return mixed
     */
    public function getStudySubmoduleName(){
        return $this->studySubmoduleName;
    }

    /**
     * @param mixed $studySubmoduleName
     */
    public function setStudySubmoduleName($studySubmoduleName){
        $this->studySubmoduleName = $studySubmoduleName;
    }

    /**
     * @return mixed
     */
    public function getStudySubmoduleDescription(){
        return $this->studySubmoduleDescription;
    }

    /**
     * @param mixed $studySubmoduleDescription
     */
    public function setStudySubmoduleDescription($studySubmoduleDescription){
        $this->studySubmoduleDescription = $studySubmoduleDescription;
    }

}