<?php namespace Com\Iesebre\Dam2\paolodavila\Person;

/**
 * Created by PhpStorm.
 * User: pdavila
 * Date: 5/10/15
 * Time: 18:26
 */

// Tothom qui sigui tipus Worker tindrá un salari
/**
 * Class Worker
 * @package Com\Iesebre\Dam2\paolodavila\Person
 */
trait Worker {

    /**
     * @var
     */
    public $salary;


    /**
     * @return mixed
     */
    public function getSalary()
    {
        return $this->salary;
    }

    /**
     * @param mixed $salary
     */
    public function setSalary($salary)
    {
        $this->salary = $salary;
    }

}