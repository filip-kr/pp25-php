<?php

$ime1 = 'Filip';
$ime1Duzina = strlen($ime1);
$ime2 = 'Tea';
$ime2Duzina = strlen($ime2);

$imena = $ime1 . $ime2;
$imena = strtolower($imena);
$imena = str_replace(' ', '', $imena);
$imena = str_split($imena);
$imena2 = array_count_values($imena);

$ponovljenaSlova = [];

for ($i = 0; $i < count($imena); $i++) {
    if (array_key_exists($imena[$i], $imena2)) {
        $ponovljenaSlova[] = $imena2[$imena[$i]];
    }
}

// echo '<pre />';
// print_r($ponovljenaSlova);

// for ($i = 0; $i <= count($ponovljenaSlova) / 2 - 1; $i++) {
//     if ($i == $ime1Duzina || $i == $ime2Duzina) {
//         break;
//     }

//     $ponovljenaSlova[$i] = $ponovljenaSlova[$i] + $ponovljenaSlova[count($ponovljenaSlova) - 1];
//     array_pop($ponovljenaSlova);

// }

// for ($i = 0; $i <= count($ponovljenaSlova) / 2 - 1; $i++) {
//     if ($i == $ime1Duzina || $i == $ime2Duzina) {
//         break;
//     }

//     $ponovljenaSlova[$i] = $ponovljenaSlova[$i] + $ponovljenaSlova[count($ponovljenaSlova) - 1];
//     array_pop($ponovljenaSlova);

// }

// for ($i = 0; $i <= count($ponovljenaSlova) / 2 - 1; $i++) {
//     if ($i == $ime1Duzina || $i == $ime2Duzina) {
//         break;
//     }

//     $ponovljenaSlova[$i] = $ponovljenaSlova[$i] + $ponovljenaSlova[count($ponovljenaSlova) - 1]; // S ovime dobivam četvrti krug - 55
//     array_pop($ponovljenaSlova);

// }

function ljubavniKalkulator($niz)
{
    if (count($niz) < 3 && array_sum($niz) <= 100) {
        foreach ($niz as $vrijednost) {
            echo $vrijednost;
        }
        return;
    }

    for ($i = 0; $i <= count($niz) / 2 - 1; $i++) {
        $niz[$i] = $niz[$i] + $niz[count($niz) - 1];
        array_pop($niz);
    }

    ljubavniKalkulator($niz);
}

ljubavniKalkulator($ponovljenaSlova);

// echo '<pre />';
// print_r($ponovljenaSlova);