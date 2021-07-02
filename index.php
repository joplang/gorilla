<?php 

require 'functions.php';


$names = [
    'Joop',
    'Jaap',
    'Jeroen',
    'Jochem'
];

$animals = [
    'Hert',
    'Aap',
    'Muis',
    'Uil',
    'papagaaiduiker',
];

$persoon = [
    'naam' => 'Joppe',
    'leeftijd' => 27,
    'baard' => true,
];

$task = [
    'title' => 'huiswerk',
    'date' => 'vandaag',
    'name' => 'Joppe',
    'done' => true,
];


require 'index.view.php';