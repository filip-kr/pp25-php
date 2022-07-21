<?php

$ime1 = 'Marija';
$ime2 = 'Ivan';

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


for ($i = 0; $i < count($ponovljenaSlova) - 1; $i++) {
    if (count($ponovljenaSlova) == 2) {
        break;
    }

    $ponovljenaSlova[$i] = $ponovljenaSlova[$i] + $ponovljenaSlova[count($ponovljenaSlova) - 1];

    array_pop($ponovljenaSlova);
}

for ($i = 0; $i < count($ponovljenaSlova) - 1; $i++) {
    if (count($ponovljenaSlova) == 2) {
        break;
    }

    $ponovljenaSlova[$i] = $ponovljenaSlova[$i] + $ponovljenaSlova[count($ponovljenaSlova) - 1];

    array_pop($ponovljenaSlova);
}

$pSlovaString = implode($ponovljenaSlova);
$pSlovaString = str_split($pSlovaString);

echo '<pre />';
print_r($ponovljenaSlova);
print_r(($pSlovaString));