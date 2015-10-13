<?php

require_once __DIR__ . '/vendor/autoload.php';

use Com\Iesebre\Dam2\paolodavila\Persons\Person;


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