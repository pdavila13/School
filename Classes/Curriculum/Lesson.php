<?php
/**
 * Created by PhpStorm.
 * User: pdavila
 * Date: 13/10/15
 * Time: 10:30
 */

namespace Com\Iesebre\Dam2\paolodavila\Curriculum;


/**
 * Class Lesson
 * @package Com\Iesebre\Dam2\paolodavila\Curriculum
 */
class Lesson {

    /**
     * @var
     */
    public $lessonId;

    /**
     * @var
     */
    public $lessonDay;

    /**
     * @var
     */
    public $lessonTimeSlotId;



    /**
     * @return mixed
     */
    public function getLessonId(){
        return $this->lessonId;
    }

    /**
     * @param mixed $lessonId
     */
    public function setLessonId($lessonId){
        $this->lessonId = $lessonId;
    }

    /**
     * @return mixed
     */
    public function getLessonDay(){
        return $this->lessonDay;
    }

    /**
     * @param mixed $lessonDay
     */
    public function setLessonDay($lessonDay){
        $this->lessonDay = $lessonDay;
    }

    /**
     * @return mixed
     */
    public function getLessonTimeSlotId(){
        return $this->lessonTimeSlotId;
    }

    /**
     * @param mixed $lessonTimeSlotId
     */
    public function setLessonTimeSlotId($lessonTimeSlotId){
        $this->lessonTimeSlotId = $lessonTimeSlotId;
    }

}