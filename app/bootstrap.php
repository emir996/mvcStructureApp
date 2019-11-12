<?php
//load config
require_once 'config/config.php';

//Autoloader libraries classes
spl_autoload_register(function($className){
    require_once 'libraries/'.$className.'.php';
});