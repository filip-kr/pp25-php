<?php

$varijabla = 7;
echo $varijabla, ' = ', gettype($varijabla), '<hr />';

$varijabla = true;
echo $varijabla, ' = ', gettype($varijabla), '<hr />';

$varijabla = 3.14;
echo $varijabla, ' = ', gettype($varijabla), '<hr />';

$varijabla = 'Osijek';
echo $varijabla, ' = ', gettype($varijabla), '<hr />';

$varijabla = ['Filip', 'Tea'];
print_r($varijabla);
echo ' = ', gettype($varijabla), '<hr />';

$varijabla = new stdClass();
print_r($varijabla);
echo ' = ', gettype($varijabla), '<hr />';
