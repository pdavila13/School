<?php

namespace Com\Iesebre\Dam2\paolodavila\Person;

/**
 * Created by PhpStorm.
 * User: pdavila
 * Date: 5/10/15
 * Time: 18:06
 */

/**
 * Class Teacher
 * @package Com\Iesebre\Dam2\paolodavila\Person
 */
class Teacher extends Person{

    use Worker;

    /**
     * @var
     */
    public $specialization;


    /**
     * Function render
     */
    public function render(){

        $this->type = "professor";
        parent::render();
    }


    /**
     * @return mixed
     */
    public function getSpecialization() {
        return $this->specialization;
    }

    /**
     * @param mixed $specialization
     */
    public function setSpecialization($specialization) {
        $this->specialization = $specialization;
    }

}