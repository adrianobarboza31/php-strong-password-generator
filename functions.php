<?php

function randompassword($lunghezza,$numero,$lettera,$maiuscola,$simbolo){
  
    $numeri='12345678';
    $lettere='abcdefg';
    $maiuscole='ABCDEFG';
    $simboli='?.:!+-=';
    if($numero==1){
        $numero=$numeri;
     }
     if($lettera==2){
        $lettera=$lettere;
     }
     if($maiuscola==3){
        $maiuscola=$maiuscole;
     }
     if($simbolo==4){
        $simbolo=$simboli;
     }
    $password='';
    $pass_noflitru=$numero.$lettera.$maiuscola.$simbolo ;
    if($pass_noflitru==''){
        $pass_noflitru=$numeri.$lettere.$maiuscole.$simboli ;
    }
    while(strlen($password)+1<=$lunghezza){
                $indice=rand(0,strlen($pass_noflitru) -1);
                $password .=$pass_noflitru[$indice];
    }
    
    return   $password;
    }
?>