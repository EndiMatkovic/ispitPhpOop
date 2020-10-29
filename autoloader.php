<?php

spl_autoload_register('mojAutoLoader');


function mojAutoLoader ($class) {
    $path = "/backend/ispitphpoop/classes/";
    $extension = ".php";
    $fullPath = $path . $class . $extension;


    if (!file_exists($fullPath)){
        return false;
    }

    
    include_once $fullPath;
}


?>