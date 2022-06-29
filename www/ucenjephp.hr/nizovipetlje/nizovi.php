<?php

// Indeksirani niz

$temp = [];
$temp[0] = -2;
$temp[] = 2; // Vrijednost ide na kraj indeksiranog niza
$temp[11] = 1;

echo '<pre>';
print_r($temp);
echo '</pre>';

echo '<pre>';
var_dump($temp);
echo '</pre>';

echo $temp[0], '<hr />';

$temp = [5, 1, 7, 4, 8, 9, 3, 0, 2];
echo count($temp), '<hr />';

// Asocijativni niz

$niz = [];
$niz['sifra'] = 1;
$niz['naziv'] = 'PHP programiranje';
$niz['cijena'] = 5999.99;
$niz['verificiran'] = false;

echo '<pre>';
print_r($niz);
echo '</pre>';

echo $niz['naziv'], '<hr />';

$niz = [
    'sifra' => 2,
    'naziv' => 'PHP programiranje',
    'cijena' => 5999.99,
    'verificiran' => false
];

echo '<pre>';
print_r($niz);
echo '</pre>';

echo $niz['cijena'], '<hr />';

$grupe = [
    [
        'sifra' => 1,
        'naziv' => 'PHP programiranje',
        'cijena' => 5999.99,
        'verificiran' => false
    ],
    [
        'sifra' => 2,
        'naziv' => 'JAVA programiranje',
        'cijena' => 6999.99,
        'verificiran' => true
    ]
];

echo '<pre>';
print_r($grupe);
echo '</pre>';

echo $grupe[1]['naziv'], '<br />';

// Funkcije

$niz = [1, 6, 8, 5, 9, 4, 6, 2, 9];

echo '<pre>';
print_r($niz);
echo '</pre>';

$niz[4] = 90;

echo '<pre>';
print_r($niz);
echo '</pre>';

array_splice($niz, 4, 1);

echo '<pre>';
print_r($niz);
echo '</pre>';

sort($niz);

echo '<pre>';
print_r($niz);
echo '</pre>';

$niz = [
    'sifra'=>2,
    'naziv'=>'PHP programiranje',
    'cijena'=>5999.99,
    'verificiran'=>false
];

// Objekt

$o = (object) $niz;

echo '<pre>';
print_r($o);
echo '</pre>';

echo $o->naziv, '<hr />';

// Ugrađeni nizovi

echo '<pre>';
print_r($_GET);
echo '</pre>';

echo '<pre>';
print_r($_POST);
echo '</pre>';

echo '<pre>';
print_r($_REQUEST);
echo '</pre>';

echo '<pre>';
print_r($_FILES);
echo '</pre>';

echo '<pre>';
print_r($_SERVER);
echo '</pre>';

echo $_SERVER['HTTP_HOST'],'<hr />';

session_start();
$_SESSION['skola']='Edunova';
echo '<pre>';
print_r($_SESSION);
echo '</pre>';

echo '<pre>';
print_r($_COOKIE);
echo '</pre>';