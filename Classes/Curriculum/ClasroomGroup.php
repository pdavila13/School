<?php
/**
 * Created by PhpStorm.
 * User: pdavila
 * Date: 5/10/15
 * Time: 20:09
 */

namespace Com\Iesebre\Dam2\paolodavila\Curriculum;

use Com\Iesebre\Dam2\paolodavila\Person\Student;

/**
 * Class ClasroomGroup
 * @package Com\Iesebre\Dam2\paolodavila\Curriculum
 */
class ClasroomGroup extends Course{

    Use Lesson;

    /**
     * @var array
     */
    public $students = array();

    /**
     * @var array
     */
    public $courses = array();


    /**
     * @param array $students
     */
    function __construct(array $students) {
        $this->students = $students;
    }

    /**
     * @param Student $student
     */
    public function addStudent(Student $student){
        array_push($this->students,$student);
    }

    /**
     * @param Course $student
     */
    public function addCourse(Course $student){
        array_push($this->courses,$student);
    }


    /**
     * @return array
     */
    public function getStudents()
    {
        return $this->students;
    }

    /**
     * @param array $students
     */
    public function setStudents($students)
    {
        $this->students = $students;
    }

    /**
     * @return array
     */
    public function getCourses()
    {
        return $this->courses;
    }

    /**
     * @param array $courses
     */
    public function setCourses($courses)
    {
        $this->courses = $courses;
    }


}