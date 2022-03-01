<?php

require_once __DIR__.'/classes/Sale.php';
require_once __DIR__.'/classes/Sale_immersive.php';
require_once __DIR__.'/classes/Spettacoli.php';
require_once __DIR__.'/classes/Film.php';

$sale = [
    new Sale(1, 120),
    new Sale(2, 120),
    new Sale(3, 100),
    new Sale_immersive(4, 80, ["vibrazioni", "fumo"])
];

$sale[3] -> set4D(true);

$film = [
    new Film("Django Unchained", "Quentin Tarantino", "2:45", "Italiano", ["Jamie Foxx", "Leonardo DiCaprio" ]),
    new Film("L'ora più buia", "Joe Wright", "2:05", "Originale", "Gary Oldman"),
    new Film("Star Wars: L'impero colpisce ancora", "Irvin Kershner", "2:04", "Italiano", "Mark Hamill"),
    new Film("Star Wars: L'impero colpisce ancora", "Irvin Kershner", "2:04", "Italiano", "Mark Hamill")
];


$spettacolo = [
    new Spettacoli($sala[0], $film[0], "13:30", "2022-02-24"),
    new Spettacoli($sala[1], $film[0], "19:00", "2022-02-24"),
    new Spettacoli($sala[2], $film[2], "19:45", "2022-02-26"),
    new Spettacoli($sala[1], $film[2], "21:45", "2022-02-25"),
    new Spettacoli($sala[2], $film[2], "22:45", "2022-03-01"),
    new Spettacoli($sala[0], $film[3], "19:45", "2022-02-28"),
    new Spettacoli($sala[3], $film[3], "19:45", "2022-02-28")
];


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cinema</title>
</head>
<body>
    <div>
        <h2>1. Recupera l’elenco delle sale con relative informazioni, facendo particolare attenzione alle informazioni aggiuntive per le sale immersive.</h2>
        <ul>
            <?php
                foreach($sale as $sala){
                    echo "<li>Sala: {$sala->getId()} </li>";
                    if($sala->get4D()){
                        echo "<li>Effetti speciali: {$sala->getEffetti_speciali()} </li>";
                    }
                    echo "<li>Posti: {$sala->getPosti()} </li><br>";                    
                }
            ?>
        </ul>
    </div>

    <div>
        <h2>2. Recuperare la capienza totale del cinema considerando tutte le sale a disposizione.</h2>
        
            <?php
                $somma = 0;
                foreach($sale as $sala){
                    $somma += $sala->getPosti();
                }
                echo "<span>Capienza totale del cinema: $somma posti</span>";
            ?>
        
    </div>

    <div>
        <h2>3. Stabilito un giorno e un film, recuperare quante proiezioni totali di quel film ci saranno.</h2>
        
            <?php
                $giorno = "2022-02-24";
                $filmOggi = $film[0];
                $proiezioni = 0;
               
                foreach($spettacolo as $elemento){
                    if(($giorno == $elemento->getData()) && ($filmOggi == $elemento->getFilm())){
                        $proiezioni++;
                        
                    }
                    
                }
                echo "<span>Il giorno $giorno ci saranno $proiezioni proiezioni</span>";
            ?>
        
    </div>
      

    <div>
        <h2>4. Stabilito un giorno, recupera l’orario di fine dell’ultimo spettacolo.</h2>
        
            <?php
                $giorno = "2022-02-24";              
                
                foreach($spettacolo as $elemento){
                    if($giorno == $elemento->getData()){
                        if($elemento->getOrario() > $oraUltimoSpett){
                            $oraUltimoSpett = $elemento->getOrario();
                        }                        
                    }                    
                }

                $orarioFinale = explode(":", $oraUltimoSpett);
                //var_dump($orarioFinale);

                foreach($spettacolo as $elemento){
                    if($oraUltimoSpett == $elemento->getOrario()){
                        $durata = $elemento->getFilm()->getDurata();
                    }
                }
                
                $lunghezzaFilm = explode(":", $durata);
                //var_dump($lunghezzaFilm);

                $orarioFinale[0] = $orarioFinale[0] + $lunghezzaFilm[0];
                $orarioFinale[1] = $orarioFinale[1] + $lunghezzaFilm[1];
                
                if($orarioFinale[1] == 60){
                    $orarioFinale[0]++;
                    $orarioFinale[1] = 00;
                }

                if($orarioFinale[0] == 24){
                    $orarioFinale[0] = 00;
                }

                echo "<span>L'ultimo spettacolo del $giorno inizierà alle $oraUltimoSpett finirà alle $orarioFinale[0]:$orarioFinale[1]</span>";
            ?>
        
    </div>


</body>
</html>