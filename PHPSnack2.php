<!-- Passare come parametri GET name, mail ed age e verificare
(cercando i metodi che non conosciamo nella documentazione)
che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero.
Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” -->

<?php
// memorizzo in una variabile i valori di GET
    $name = $_GET["name"];
    $mail = $_GET["mail"];
    $age = $_GET["age"];
// con un if faccio un primo controllo verificando se l'utente ha inserito tutti i campi richiesti, se non lo ha fatto viene restituito un messaggio di errore:
    if(empty($name) || empty($mail) || empty($age)){
        $text = "Attenzione! Inserisci tutti i campi richiesti!";
    } else {
        // una volta che l'utente inserisce tutti i campi richiesti, controllo che siano corretti:
        $text = "verifica dati inseriti:";
        // controllo che il valore name sia più lungo di 3 caratteri, controllo che la mail inserita contenga la chiocciola e il punto e controllo che l'età inserita sia un valore numerico:
        if(strlen($name) > 3 && strpos($mail, "@") == true && strpos($mail, ".") && is_numeric($age) == true){
            // se tutte le condizioni precedenti sono soddisfatte:
            $text .= "Accesso riuscito!";
        } else {
            // altrimenti:
            $text .= "Accesso negato!";
        }
    }

    echo $text;

?>
