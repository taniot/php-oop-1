<?php
require_once __DIR__ . '/db.php';
require_once __DIR__ . '/Models/Movie.php';
require_once __DIR__ . '/Models/Genre.php';

// $supermario = new Movie('Supermario', array(new Genre('cartoon'), new Genre('fantasy')), 120, 'tante persone');
// $johnwick = new Movie('John Wick', array(new Genre('action'), new Genre('fantasy')), 89, 'tante persone');

$result = [];

foreach ($movies as $movie) {
    array_push(
        $result,
        new Movie($movie['name'], [new Genre('Action')], $movie['duration'], 'prova')
    );
}
