<?php

// WHILE radi s booleanom

$i = 0;
while ($i < 10) {
    echo $i, '<br />';
    $i++;
}

echo '<hr />';

$i = 0;
$j = 0;
while ($i < 10) {
    while ($j < 10) {
        if ($i === 0) {
            break 2;
        }
    }
}

$i = 0;
while ($i < 0) {
    // ne ulazi
}

// beskonačna WHILE petlja
while (true) {
    break;
}
