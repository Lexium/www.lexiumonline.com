<?php
session_start();
if(isset($_GET['la']))
{
    $_SESSION['la'] = $_GET['la'];
    header('Location:'.$_SERVER['PHP_SELF']);
    exit();
}

$el_idioma = (isset($_SESSION['la']) ? $_SESSION['la'] : 'es');

switch($el_idioma){
     case "es":
        require('es.php');
    break;
    case "en":
        require('en.php');
    break;
    default:
        require('es.php');
    }
?>