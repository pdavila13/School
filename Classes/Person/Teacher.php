<?php namespace Com\Iesebre\Dam2\paolodavila\Person;

/**
 * Created by PhpStorm.
 * User: pdavila
 * Date: 5/10/15
 * Time: 18:06
 */

class Teacher extends Person{

    use Worker;

    public $specialization;


    public function render(){

        $this->type = "professor";
        parent::render();
    }

}