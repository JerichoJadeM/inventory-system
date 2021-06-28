<?php
require_once "functions.php";

spl_autoload_register( function ($class){
    include $_SERVER['DOCUMENT_ROOT'] . '/inventory/classes/' . strtolower($class) . '.php';
})

?>