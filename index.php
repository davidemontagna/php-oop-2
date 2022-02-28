<?php

require_once __DIR__.'/classes/Sale.php';
require_once __DIR__.'/classes/Sale_immersive.php';
require_once __DIR__.'/classes/Spettacoli.php';
require_once __DIR__.'/classes/Film.php';

$sala = [
    new Sale(1, 120),
    new Sale(2, 120),
    new Sale(3, 100),
    new Sale_immersive(4, 80, ["vibrazioni", "fumo"])
];



$film = [
    new Film("Django Unchained", "Quentin Tarantino", "2h 45m", "Italiano", "Jamie Foxx"),
    new Film("L'ora più buia", "Joe Wright", "2h 5m", "Originale", "Gary Oldman"),
    new Film("Star Wars: L'impero colpisce ancora", "Irvin Kershner", "2h 4m", "Italiano", "Mark Hamill"),
    new Film("Star Wars: L'impero colpisce ancora", "Irvin Kershner", "2h 4m", "Italiano", "Mark Hamill")
];


$spettacolo = [
    new Spettacoli($sala[0], $film[0], "20:30", "2022-02-28"),
    new Spettacoli($sala[1], $film[1], "21:00", "2022-02-28"),
    new Spettacoli($sala[2], $film[2], "19:45", "2022-02-28"),
    new Spettacoli($sala[3], $film[3], "19:45", "2022-02-28")
];



var_dump($spettacolo);
