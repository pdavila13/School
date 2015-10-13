<?php

namespace Com\Iesebre\Dam2\paolodavila\Managment;

use Com\Iesebre\Dam2\paolodavila\Person\Person;

/**
 * Created by PhpStorm.
 * User: pdavila
 * Date: 13/10/15
 * Time: 10:32
 */

/**
 * Class User
 * @package Com\Iesebre\Dam2\paolodavila\Managment
 */
class User {

    /**
     * @var
     */
    public $UserId;

    /**
     * @var
     */
    public $userName;

    /**
     * @var
     */
    public $password;



    /**
     * @return mixed
     */
    public function getUserName()
    {
        return $this->userName;
    }

    /**
     * @param mixed $userName
     */
    public function setUserName($userName)
    {
        $this->userName = $userName;
    }

    /**
     * @return mixed
     */
    public function getUserId()
    {
        return $this->UserId;
    }

    /**
     * @param mixed $UserId
     */
    public function setUserId($UserId)
    {
        $this->UserId = $UserId;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param mixed $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }

}