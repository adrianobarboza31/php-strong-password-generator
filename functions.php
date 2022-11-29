<?php

function randompassword($lunghezza){
    $numeri='12345678';
    $lettere='abcdefg';
    $maiuscole='ABCDEFG';
    $simboli='?.:!+-=';
    $password='';
    $pass_noflitru=$numeri.$lettere.$maiuscole.$simboli ;
    while(strlen($password)+1<=$lunghezza){
                $indice=rand(0,strlen($pass_noflitru) -1);
                $password .=$pass_noflitru[$indice];
    }
    
    return   $password;
    }
?>