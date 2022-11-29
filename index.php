<?php
 session_start();
include __DIR__ .'/functions.php';
if(isset($_GET['numero']) && !empty($_GET['numero'])) {
    $password=randompassword($_GET['numero']);
    $_SESSION['pass'] = $password;
};

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="index.php" method="GET">
    <label for="">inserisci il numero di cartteri da generare</label>
    <input type="number" name="numero" id="numero">
    <button type="submit">invia</button>
    <button type="reset">reset</button>
</form>
    <!-- -->
    <a href="session.php">clicca il link per vedere la password</a>
</body>
</html>