<?php 

 ini_set('display_errors','on');
 
    define('DS',DIRECTORY_SEPARATOR);
    define('ROOT',realpath(dirname(__FILE__)).DS);
    define('APP',ROOT.'app'.DS);
    define('APP_W',basename($_SERVER['SCRIPT_NAME']));
    echo DS.'</br>';
    echo ROOT.'</br>';
    echo APP.'</br>';
    echo APP_W.'</br>';
    echo $_SERVER['REQUEST_URI'];
    require 'sys/core.php';
    Core::init();