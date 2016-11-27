<?php

class Tracking
{
    const SEPARATOR = '__sdsdvsvs__';
    const SUCCESS = '0';
    const FAILURE = '2';

    private $latitude;
    private $longitude;


    public function setByPOST()
    {
        $this->latitude = $_POST['latitude'];
        $this->longitude = $_POST['longitude'];
    }

    public function getLatitude()
    {
        return $this->latitude;
    }

    public function getLongitude()
    {
        return $this->longitude;
    }
}