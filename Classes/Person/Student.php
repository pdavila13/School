<?php

namespace Com\Iesebre\Dam2\paolodavila\Person;

use Com\Iesebre\Dam2\paolodavila\Person\Person;

/**
 * Created by PhpStorm.
 * User: pdavila
 * Date: 5/10/15
 * Time: 17:50
 */

class Student extends Person{

    use Worker;

    /**
     * @var bool|null
     */
    public $dual = false;

    /**
     * @var
     */
    public $classroomGroup;

    /**
     * @param null $dual
     */
    function __construct($dual=null)
    {
        if($dual != null)
        $this->dual = $dual;
    }

    /**
     * @param
     */
    public function render(){

        $this->type = "alumne";
        parent::render();
    }

    /*
    public function render(){

        if($this->dual){
            echo "El estudiant té el nom" . $this->getGivenName() . "i té el següent salari: " . $this->salary;
        } else {
            echo "El estudiant té el nom" . $this->getGivenName() . "i no cobra un duro.";
        }
    }
    */
}