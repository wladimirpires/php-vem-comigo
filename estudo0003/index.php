<?php

require_once __DIR__.'/Core/Core.php';
require_once __DIR__.'/Router/routes.php';

spl_autoload_register(function($file) {

    if (file_exists (__DIR__."/Utils/$file.php")){
        require_once __DIR__."/Utils/$file.php";
    } else if(file_exists (__DIR__."/Model/$file.php")){
        require_once __DIR__."/Model/$file.php";
    }

});

$core = new Core();
$core->run($routes);



?>