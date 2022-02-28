<?php

require_once __DIR__.'/classes/Sale.php';
require_once __DIR__.'/classes/Spettacoli.php';
require_once __DIR__.'/classes/Film.php';
require_once __DIR__.'/classes/Sale_immersive.php';

$sala = [
    new Sale("1", 120),
    new Sale("2", 120),
    new Sale("3", 100),
    new Sale_immersive("4", 80, ["vibrazioni", "fumo"])
];



$film = [
    new Film("Django Unchained", "Quentin Tarantino", "2h 45m", "Italiano", ["Jamie Foxx", "Leonardo DiCaprio", "Samuel L. Jackson"]),
    new Film("L'ora più buia", "Joe Wright", "2h 5m", "Originale", ["Gary Oldman", "Kristin Scott Thomas", "Ben Mendels"]),
    new Film("Star Wars: L'impero colpisce ancora", "Irvin Kershner", "2h 4m", "Italiano", ["Mark Hamill", "Harrison Ford", "Carrie Fisher"]),
    new Film("Star Wars: L'impero colpisce ancora", "Irvin Kershner", "2h 4m", "Italiano", ["Mark Hamill", "Harrison Ford", "Carrie Fisher"])
];


$spettacolo = [
    new Spettacoli("20:30", "2022-02-28"),
    new Spettacoli("21:00", "2022-02-28"),
    new Spettacoli("19:45", "2022-02-28"),
    new Spettacoli("19:45", "2022-02-28")
];

$prova = [
    $sala1 = [$sala[0], $spettacolo[0], $film[0]]
];

var_dump($prova);


