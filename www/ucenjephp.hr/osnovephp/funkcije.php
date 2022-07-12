<?php

// 1: ne prima parametre; ne vraća vrijednost

function ispisiSifru()
{
    $slova = [];
    for ($i = 65; $i <= 90; $i++) {
        $slova[] = chr($i);
    }

    $slova = array_merge($slova, ['Č', 'Ć', 'Dž', 'Đ', 'Š']);
    $slovo = $slova[rand(0, 29)];
    $broj = rand(0, 100);
    echo $slovo, $broj;
}

ispisiSifru();

echo '<hr />';

// 2: prima parametre; ne vraća vrijednost

$niz = [1, 2, 3, 4, 5];

function logiranjeDobro($sto)
{
    echo '<pre>';
    print_r($sto);
    echo '</pre>', '<hr />';
}

logiranjeDobro($niz);

function slucajniBroj($min = 1, $max = 10)
{
    echo rand($min, $max);
}

slucajniBroj(2, 9);
echo '<hr />';

// 3: ne prima parametre; vraća vrijednost

// function dovuciPodatkeGradova()
// {
//     return  json_decode(
//         file_get_contents(
//             'https://raw.githubusercontent.com/ndekic/popis_naselja_u_republici_hrvatskoj/master/json/popis_naselja_u_republici_hrvatskoj.json'
//         )
//     );
// }

// function grad()
// {
//     $gradovi = dovuciPodatkeGradova();
//     return $gradovi[rand(0, count($gradovi) - 1)]->mjesto;
// }

// echo grad(), '<hr />';


// 4: prima parametre; vraća vrijednost

// function gradovi($brojGradova)
// {
//     $gradovi=dovuciPodatkeGradova();
//     $vrati=[];
//     while($brojGradova>0){
//         $sb = rand(0,count($gradovi)-1);
//         $vrati[]=$gradovi[$sb]->mjesto;
//         array_slice($gradovi,$sb,1);
//         $brojGradova--;
//     }

//     return $vrati;
// }

// foreach(gradovi(2) as $grad){
//     echo $grad, '<br />';
// }

// Rekurzija

$suma = 0;
for ($i = 1; $i <= 100; $i++) {
    $suma += $i;
}
echo $suma, '<hr />';

function zbroj($broj)
{
    if ($broj === 1) {
        return 1;
    }

    return $broj + zbroj($broj - 1);
}

echo zbroj(100), '<hr />';

function suma($var, $suma = 0)
{
    if (gettype($var) === 'integer') {
        return $var;
    }
    $suma = 0;
    foreach ($var as $e) {
        $suma += suma($e, $suma);
    }
    return $suma;
}

$niz =
    [
        'x' => [
            'y' => 2
        ],
        'z' => 3,
        'k' => [
            'j' => [
                'l' => [
                    'sdsd' => 2,
                    'hh' => 3
                ]
            ]
        ]
    ];



echo suma($niz), '<hr />';
