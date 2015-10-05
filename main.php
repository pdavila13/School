<?php

use Com\Iesebre\Dam2\paolodavila\Person\Person;

require "/home/pdavila/Code/School/Classes/Person/Person.php";

/**
 * Created by PhpStorm.
 * User: pdavila
 * Date: 5/10/15
 * Time: 18:14
 */



$person = new Person();

$person->type = "PEPITA";
$person->setGivenName("Pepita Palotes");

$person->render();