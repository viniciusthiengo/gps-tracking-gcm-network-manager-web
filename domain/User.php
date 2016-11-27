<?php

class User
{
    private $id;
    private $tracking;


    public function setByPOST()
    {
        $this->id = $_POST['user_id'];

        $this->tracking = new Tracking();
        $this->tracking->setByPOST();
    }

    public function save()
    {
        $file = fopen('../../data/tracking-'.$this->id.'.txt', 'a');
        fwrite($file, $this->tracking->getLatitude());
        fwrite($file, Tracking::SEPARATOR);
        fwrite($file, $this->tracking->getLongitude()."\n");
        fclose($file);
    }
}