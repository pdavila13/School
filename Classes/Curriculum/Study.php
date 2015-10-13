<?php

namespace Com\Iesebre\Dam2\paolodavila\Curriculum;

/**
 * Created by PhpStorm.
 * User: pdavila
 * Date: 13/10/15
 * Time: 10:30
 */

/**
 * Class Study
 * @package Com\Iesebre\Dam2\paolodavila\Curriculum
 */
class Study {

    /**
     * @var
     */
    public $studyId;

    /**
     * @var
     */
    public $studyShortName;

    /**
     * @var
     */
    public $studyName;

    /**
     * @var
     */
    public $studyDescription;

    /**
     * @return mixed
     */
    public function getStudyId(){
        return $this->studyId;
    }

    /**
     * @param mixed $studyId
     */
    public function setStudyId($studyId){
        $this->studyId = $studyId;
    }

    /**
     * @return mixed
     */
    public function getStudyShortName(){
        return $this->studyShortName;
    }

    /**
     * @param mixed $studyShortName
     */
    public function setStudyShortName($studyShortName){
        $this->studyShortName = $studyShortName;
    }

    /**
     * @return mixed
     */
    public function getStudyName(){
        return $this->studyName;
    }

    /**
     * @param mixed $studyName
     */
    public function setStudyName($studyName){
        $this->studyName = $studyName;
    }

    /**
     * @return mixed
     */
    public function getStudyDescription(){
        return $this->studyDescription;
    }

    /**
     * @param mixed $studyDescription
     */
    public function setStudyDescription($studyDescription){
        $this->studyDescription = $studyDescription;
    }

}