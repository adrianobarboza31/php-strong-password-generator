<?php
 session_start();


 $lunghezza=($_GET['numero']);
 $numero=($_GET['numeri']);
 $lettera=($_GET['lettere']);
 $maiuscola=($_GET['maiuscole']);
 $simbolo=($_GET['simboli']);
 $_SESSION['lung'] = $lunghezza;
include __DIR__ .'/functions.php';
if(isset($_GET['numero']) && !empty($_GET['numero'])) {
    $password=randompassword(($_GET['numero']),($_GET['numeri']),($_GET['lettere']),($_GET['maiuscole']),($_GET['simboli']));
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
    <input type="radio" name="numeri" value=1> <label for="">numeri</label>
    <input type="radio" name="lettere"  value=2><label for="">lettere</label>
    <input type="radio" name="maiuscole"  value=3><label for="">maiuscole</label>
    <input type="radio" name="simboli"  value=4><label for="">simboli</label>
</form>
    <!-- -->
    <a href="session.php">clicca il link per vedere la password</a>
</body>
</html>