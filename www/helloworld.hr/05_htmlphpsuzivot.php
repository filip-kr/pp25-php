<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        p{
            color: <?php echo 'red'; //BP ?>  
        }
    </style>
</head>
<body <?php echo 'style="background-color: gray;"'; //BP ?>>
    <?php
    echo 'unutar body elementa'; //BP
    ?>
    <div>
        <p<?php echo '>';?>
            Tekst paragrafa
        <?php echo '</p>'; //Loše ?>
    </div>
</body>
</html>