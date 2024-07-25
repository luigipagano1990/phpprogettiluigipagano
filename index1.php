<?php

// Array di numeri a scelta
$numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

// Inizializzazione delle variabili per la somma e il conteggio dei numeri pari
$somma = 0;
$media= 0;

// Iterazione sull'array con foreach
foreach ($numbers as $number) {
    if ($number % 2 === 0) { // Verifica se il numero è pari
        $somma += $number; // Aggiungi il numero pari alla somma
        $media++; // Incrementa il contatore dei numeri pari
    }
}

// Calcola la media dei numeri pari
if ($media > 0) {
    $totale = $somma / $media;
} else {
    $totale= 0; // Nel caso non ci siano numeri pari
}

// Stampa la media dei numeri pari
echo "La media dei numeri pari è: " . $totale;
