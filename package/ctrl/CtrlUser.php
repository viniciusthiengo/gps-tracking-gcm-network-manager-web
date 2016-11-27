<?php
    include_once '../../domain/User.php';
    include_once '../../domain/Tracking.php';


    if( strcasecmp($_POST['method'], 'user-tracking') == 0 ){

        $user = new User();
        $user->setByPOST();
        $user->save();

        echo Tracking::SUCCESS;
        exit;
    }

    echo Tracking::FAILURE;
