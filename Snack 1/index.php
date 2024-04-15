<?php

/* Snack 1
Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario.
 Ogni array avrà una squadra di casa e una squadra ospite,
  punti fatti dalla squadra di casa e punti fatti dalla squadra ospite.
   Stampiamo a schermo tutte le partite con questo schema:
Olimpia Milano - Cantù | 55-60 */

$partite = [
    [
        'casa' => 'Olimpia Milano',
        'ospite' => 'Cantù',
        'punteggio casa' => '55',
        'punteggio ospite' => '60',
    ],
    [
        'casa' => 'qualcuno',
        'ospite' => 'bho',
        'punteggio casa' => '55',
        'punteggio ospite' => '60',
    ],    [
        'casa' => 'non seguo il basket',
        'ospite' => 'dammi qualche altra squadra',
        'punteggio casa' => '55',
        'punteggio ospite' => '60',
    ],
];

//var_dump($partite);

foreach ($partite as $partita) {
    echo $partita['casa'] . ' - ' . $partita['ospite'] . ' | ' . $partita['punteggio casa'] . '-' . $partita['punteggio ospite'] . '<br>';
};
