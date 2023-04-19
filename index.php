<?php

require_once 'autoload.php';

if(isset($_GET['contoller'])){
    $nombre_controlador = $_GET['contoller'].'Contoller';
}else{
    echo 'The page don\'t exist';
    exit;
}

if (class_exists($nombre_controlador)) {
    $controlador = new $nombre_controlador();

    if(isset($_GET['action']) && method_exists($controlador, $_GET['action'])){
        $action = $_GET['action'];
        $controlador->$action();
    }else{
        echo "The website don't exist";
    }
}else{
    echo "The website don't exist";
}