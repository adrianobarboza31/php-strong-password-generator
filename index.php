<?php
$lunghezza=$_GET['numero'];
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
//   while((strlen($password))+1<=$lunghezza){
//     $indice=rand(0,strlen($numeri) -1);
//     if((strlen($password))+1<=$lunghezza){
//         $password .=$numeri[$indice];
//     }
//     $indice2=rand(0,strlen($lettere) -1);
//     if((strlen($password))+1<=$lunghezza){
//         $password .=$lettere[$indice2];
//     }
//     $indice3=rand(0,strlen($maiuscole) -1);
//     if((strlen($password))+1<=$lunghezza){
//         $password .=$maiuscole[$indice3];
//     }
//     $indice4=rand(0,strlen($simboli) -1);
//     if((strlen($password))+1<=$lunghezza){
//         $password .=$simboli[$indice4];
//     }
   
//   }

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
<!-- Descrizione
Dobbiamo creare una pagina che permetta ai nostri utenti di utilizzare il nostro generatore di password (abbastanza) sicure.
L’esercizio è suddiviso in varie milestone ed è molto importante svilupparle in modo ordinato.
Milestone 1
Creare un form che invii in GET la lunghezza della password. Una nostra funzione utilizzerà questo dato per generare una password casuale (composta da lettere, lettere maiuscole, numeri e simboli) da restituire all’utente.
Scriviamo tutto (logica e layout) in un unico file index.php
Milestone 2
Verificato il corretto funzionamento del nostro codice, spostiamo la logica in un file functions.php che includeremo poi nella pagina principale
Milestone 3
Invece di visualizzare la password nella index, effettuare un redirect ad una pagina dedicata che tramite $_SESSION recupererà la password da mostrare all’utente.
Milestone 4 (BONUS)
Gestire ulteriori parametri per la password: quali caratteri usare fra numeri, lettere e simboli. Possono essere scelti singolarmente (es. solo numeri) oppure possono essere combinati fra loro (es. numeri e simboli, oppure tutti e tre insieme).
Dare all’utente anche la possibilità di permettere o meno la ripetizione di caratteri uguali. -->
<form action="index.php" method="GET">
    <label for="">inserisci il numero di cartteri da generare</label>
    <input type="number" name="numero" id="numero">
    <button type="submit">invia</button>
    <button type="reset">reset</button>
</form>
<?php echo $password ?>
</body>
</html>