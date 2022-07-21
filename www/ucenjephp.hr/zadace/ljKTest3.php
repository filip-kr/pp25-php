<?php

$ime1 = 'Igor';
$ime2 = 'Katarina';

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

function ljubavniKalkulator($niz)
{
    if (count($niz) == 2 && array_sum($niz) < 20 || array_sum($niz) == 1) {
        $nizString = implode($niz);
        echo $nizString;
        return;
    }

    $nizString = implode($niz);
    $niz = str_split($nizString);

    for ($i = 0; $i < count($niz) - 1; $i++) {

        $niz[$i] = $niz[$i] + $niz[count($niz) - 1];

        array_pop($niz);
    }

    ljubavniKalkulator($niz, $i);
}



ljubavniKalkulator($ponovljenaSlova);






// if (strlen($ime1) > strlen($ime2)) {
//     $imeDuzina = strlen($ime1);
// } else {
//     $imeDuzina = strlen($ime2);
// }



// if ($kraceIme > 0) {
//     for ($i = 0; $i <= $kraceIme; $i++) {
//         $niz[$i] = $niz[$i] + $niz[count($niz) - 1];

        // if ($niz[$i] >= 10) {
        //     $niz[$i] = $niz[$i] - 10;
        //     array_unshift($niz, 1);
        // }


//         array_pop($niz);
//         $kraceIme = 0;
//     }
// }
