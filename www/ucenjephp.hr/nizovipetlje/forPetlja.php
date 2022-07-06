<?php

for ($i = 0; $i < 5; $i++) {
    echo 'Hello';
}

echo '<hr />';

// mora sadržavati varijablu koja mijenja vrijednost
for ($i = 0; $i < 25; $i++) {
    echo $i + 1, '<br />';
}

echo '<hr />';

for ($i = 100; $i > 0; $i -= 7) {
    echo $i, '<br />';
}

echo '<hr />';

$sum = 0;
for ($i = 1; $i <= 100; $i++) {
    $sum += $i;
}

echo $sum, '<br />';

echo '<hr />';


// nastavljanje nakom uvjeta
for ($i = 0; $i < 10; $i++) {
    if ($i === 2) {
        continue;
    }
    echo $i, '<br />';
}

// prekidanje prije uvjeta
for ($i = 0; $i < 10; $i++) {
    if ($i === 5) {
        break;
    }
    echo $i, '<br />';
}

echo '<hr />';

// for radi s indeksnim nizovima
$niz = [2, 3, 4, 'Osijek', true, 2.99];

for ($i = 0; $i < count($niz); $i++) {
    echo $niz[$i], '<br />';
}

echo '<hr />';

// beskonačna FOR petlja
for (;;) {
    echo 2;
    break;
}

// u FOR petlju se ne mora ući

$i = 10;
for ($t = $i; $t < 5; $t++) {
    echo $t;
}
