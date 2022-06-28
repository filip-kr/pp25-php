<?php

$grad = 'Osijek';

switch ($grad) {
    case 'Varaždin':
    case 'Zagreb':
    case 'Pula':
    case 'Zadar':
        echo 'Nije Osijek';
        break;
    case 'Osijek':
        echo 'Viva Osijek!';
        break;
}
