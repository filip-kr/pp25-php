<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    echo 'Prvi red';
    echo PHP_EOL;
    echo 'Drugi red';
    echo '<br />';
    echo 'Treći red';
    echo '<hr />';
    echo 'Prvi' . PHP_EOL . 'red<br />';
    echo 'Prvi<br />drugi red' . '<hr />';
    ?>
    <?='Filip<br />Krnjaković</br />Moja adresa'; ?>
    <hr />
    <?='Filip' . '<br />' . 'Krnjaković' . '<br />' . 'Moja adresa';?>
</body>
</html>