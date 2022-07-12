<?php

// indeksni niz
$niz = [2, 2, 2, 3, 4, 77];

foreach ($niz as $e) {
    echo $e . '<br />';
}

echo '<hr />';

// asocijativni niz
$niz = [
    'sifra' => 1,
    'naziv' => 'PHP'
];

foreach ($niz as $key => $value) {
    echo $key, ': ', $value, '<br />';
}

echo '<hr />';
