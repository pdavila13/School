<?php

namespace Com\Iesebre\Dam2\paolodavila\Curriculum;

/**
 * Created by PhpStorm.
 * User: pdavila
 * Date: 5/10/15
 * Time: 19:57
 */

/**
 * Class Course
 * @package Com\Iesebre\Dam2\paolodavila\Curriculum
 */
class Course {

    /**
     * @var
     */
    public $courseId;

    /**
     * @var
     */
    public $courseShortName;

    /**
     * @var
     */
    public $courseName;

    /**
     * @var
     */
    public $courseStudyId;



    /**
     * @return mixed
     */
    public function getCourseId(){
        return $this->courseId;
    }

    /**
     * @param mixed $courseId
     */
    public function setCourseId($courseId){
        $this->courseId = $courseId;
    }

    /**
     * @return mixed
     */
    public function getCourseShortName(){
        return $this->courseShortName;
    }

    /**
     * @param mixed $courseShortName
     */
    public function setCourseShortName($courseShortName){
        $this->courseShortName = $courseShortName;
    }

    /**
     * @return mixed
     */
    public function getCourseName(){
        return $this->courseName;
    }

    /**
     * @param mixed $courseName
     */
    public function setCourseName($courseName){
        $this->courseName = $courseName;
    }

    /**
     * @return mixed
     */
    public function getCourseStudyId(){
        return $this->courseStudyId;
    }

    /**
     * @param mixed $courseStudyId
     */
    public function setCourseStudyId($courseStudyId){
        $this->courseStudyId = $courseStudyId;
    }

}