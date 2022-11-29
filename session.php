<?php
session_start();
include __DIR__ .'/functions.php';
if(($_SESSION['lung'])>0){
    echo "<h1>la password è:{$_SESSION['pass']} </h1>";
}else{
    echo "<h1>non hai inserito la quantità di numeri </h1>";
}


?> 