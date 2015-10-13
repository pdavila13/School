<?php

namespace Com\Iesebre\Dam2\paolodavila\Location;

/**
 * Created by PhpStorm.
 * User: pdavila
 * Date: 13/10/15
 * Time: 10:33
 */

/**
 * Class Location
 * @package Com\Iesebre\Dam2\paolodavila\Location
 */
class Location {

    /**
     * @var
     */
    public $locationId;

    /**
     * @var
     */
    public $locationName;

    /**
     * @var
     */
    public $locationShortName;

    /**
     * @var
     */
    public $locationDescription;



    /**
     * @return mixed
     */
    public function getLocationId()
    {
        return $this->locationId;
    }

    /**
     * @param mixed $locationId
     */
    public function setLocationId($locationId)
    {
        $this->locationId = $locationId;
    }

    /**
     * @return mixed
     */
    public function getLocationName()
    {
        return $this->locationName;
    }

    /**
     * @param mixed $locationName
     */
    public function setLocationName($locationName)
    {
        $this->locationName = $locationName;
    }

    /**
     * @return mixed
     */
    public function getLocationShortName()
    {
        return $this->locationShortName;
    }

    /**
     * @param mixed $locationShortName
     */
    public function setLocationShortName($locationShortName)
    {
        $this->locationShortName = $locationShortName;
    }

    /**
     * @return mixed
     */
    public function getLocationDescription()
    {
        return $this->locationDescription;
    }

    /**
     * @param mixed $locationDescription
     */
    public function setLocationDescription($locationDescription)
    {
        $this->locationDescription = $locationDescription;
    }

}