<!-- Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario.
Ogni array avrà una squadra di casa e una squadra ospite,
punti fatti dalla squadra di casa e punti fatti dalla squadra ospite.
Stampiamo a schermo tutte le partite con questo schema. -->

<?php

// creo un array multidimensionale contenente altri array che hanno come elementi: la squadra che gioca in casa, la squadra ospite e i relativi punteggi
    $partite = [
        [
            "squadraCasa" => "Cagliari",
            "squadraOspite" => "Napoli",
            "punteggioCasa" => "55",
            "punteggioOspite" => "30"
        ],
        [
            "squadraCasa" => "Atalanta",
            "squadraOspite" => "Milano",
            "punteggioCasa" => "60",
            "punteggioOspite" => "55"
        ],
        [
            "squadraCasa" => "Torino",
            "squadraOspite" => "Campobasso",
            "punteggioCasa" => "25",
            "punteggioOspite" => "50"
        ]
    ];
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Partite</title>
    </head>
    <body>
        <div>
            <h1>TABELLONE PARTITE DI BASKET</h1>
            <div>
                <ul>
                    <!-- ciclo for per ciclare nel mio array indicando con echo $partite[$i] quale elemento stampare -->
                    <?php for ($i = 0; $i < count($partite); $i++){ ?>
                    <li><?php echo $partite[$i]["squadraCasa"];
                    ?> -
                    <?php echo $partite[$i]["squadraOspite"];
                    ?>
                    <?php echo $partite[$i]["punteggioCasa"];
                    ?> |
                    <?php echo $partite[$i]["punteggioOspite"];
                    }?></li>
                </ul>
            </div>

        </div>
    </body>
</html>
