<?php

$ime1 = 'Filip';
$ime1Duzina = strlen($ime1);
$ime1 = strtolower($ime1);
$ime1 = str_replace(' ', '', $ime1);
$ime1 = str_split($ime1);

$ime2 = 'Tea';
$ime2Duzina = strlen($ime2);
$ime2 = strtolower($ime2);
$ime2 = str_replace(' ', '', $ime2);
$ime2 = str_split($ime2);

$ime1CountValues = array_count_values($ime1);
$ime2CountValues = array_count_values($ime2);

$ime1Niz = [];
$ime2Niz = [];

for ($i = 0; $i < count($ime1); $i++) {
    if (array_key_exists($ime1[$i], $ime1CountValues)) {
        $ime1Niz[] = $ime1CountValues[$ime1[$i]];
    }
}

for ($i = 0; $i < count($ime2); $i++) {
    if (array_key_exists($ime2[$i], $ime2CountValues)) {
        $ime2Niz[] = $ime2CountValues[$ime2[$i]];
    }
}

// $ponovljenaSlova = array_merge($ime1Niz, $ime2Niz);


$ponovljenaSlova = [];



for($i = 0; $i = $ime1Duzina || $i = $ime2Duzina; $i++) {
    $ponovljenaSlova[0] = $ponovljenaSlova[$i] + $ponovljenaSlova[count($ponovljenaSlova)];
    array_pop($ponovljenaSlova);
}

echo '<pre />';
print_r($ime1);
print_r($ime2);
print_r(($ime1Niz));
print_r(($ime2Niz));
// print_r(($ponovljenaSlova));


// // //

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


// // //

// function ljubavniKalkulator($niz, $i)
// {
//     if (count($niz) >= 2) {
//         foreach ($niz as $vrijednost) {
//             echo $vrijednost, ',';
//         }
//         return;
//     }

//     $niz[$i] = $niz[$i] + $niz[count($niz) - 1];

//     if ($niz[$i] >= 10) {
//         $niz[$i] = $niz[$i] - 10;
//         array_unshift($niz, 1);
//     }

//     array_pop($niz);

//     $i++;

//     ljubavniKalkulator($niz, $i);
// }