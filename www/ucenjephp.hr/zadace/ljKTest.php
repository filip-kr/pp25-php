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


// function ljubavniKalkulator ($niz)
// {
//     GLOBAL $ime1Duzina;
//     GLOBAL $ime2Duzina;

   

    
// }


echo '<pre />';
print_r($ponovljenaSlova);



for($i = 0; $i = $ime1Duzina || $i = $ime2Duzina; $i++) {
    $ponovljenaSlova[$i] = $ponovljenaSlova[$i] + $ponovljenaSlova[count($ponovljenaSlova)]; // Greška
    array_pop($ponovljenaSlova);
}

print_r($ponovljenaSlova);