<?php
// Kreiranje započinje pritiskom na gumb 'Generiraj'
if (isset($_GET['generiraj'])) {

    // Otvaranje HTML tablice
    echo '<table class="tablica">';

    // Postavljanje broja redaka i stupaca prema unešenim podacima
    $brojRed = $_GET['brojRedaka'];
    $brojStup = $_GET['brojStupaca'];

    // Brojači za retke i stupce u HTML tablici
    $brojacRed = $brojRed;
    $brojacStup = $brojStup;

    // Kreiranje prazne matrice; početni koordinati; vrijednost prve ćelije
    $matrica = [[]];
    $x = $brojRed - 1;
    $y = $brojStup - 1;
    $vrijednost = 1;

    // Punjenje matrice
    // if zaustavlja punjenje ako više nema slobodnih ćelija
    while ($brojRed > 0 && $brojStup > 0) {

        // S desna na lijevo
        for ($i = 0; $i < $brojStup; $i++) {
            if ($brojRed == 0 || $brojStup == 0) {
                break;
            }

            $matrica[$x][$y--] = $vrijednost++;
        }

        // Pomjeranje na prvu slobodnu ćeliju; skraćivanje tablice za ispunjeni redak/stupac
        $x--;
        $y++;
        $brojRed--;

        // Od dolje prema gore
        for ($i = 0; $i < $brojRed; $i++) {
            if ($brojRed == 0 || $brojStup == 0) {
                break;
            }

            $matrica[$x--][$y] = $vrijednost++;
        }

        $x++;
        $y++;
        $brojStup--;

        // S lijeva na desno
        for ($i = 0; $i < $brojStup; $i++) {
            if ($brojRed == 0 || $brojStup == 0) {
                break;
            }

            $matrica[$x][$y++] = $vrijednost++;
        }

        $x++;
        $y--;
        $brojRed--;

        // Od gore prema dolje
        for ($i = 0; $i < $brojRed; $i++) {
            if ($brojRed == 0 || $brojStup == 0) {
                break;
            }

            $matrica[$x++][$y] = $vrijednost++;
        }

        $x--;
        $y--;
        $brojStup--;
    }

    // Kreiranje HTML tablice s vrijednostima matrice
    for ($i = 0; $i < $brojacRed; $i++) {
        echo '<tr>';
        for ($j = 0; $j < $brojacStup; $j++) {
            echo '<td>';
            echo $matrica[$i][$j];
            echo '</td>';
        }
        echo '</tr>';
    }

    // Zatvaranje HTML tablice
    echo '</table>';
}
