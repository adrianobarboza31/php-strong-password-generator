<?php
session_start();
include __DIR__ .'/functions.php';
echo "<h1>la password è:{$_SESSION['pass']} </h1>";

?> 