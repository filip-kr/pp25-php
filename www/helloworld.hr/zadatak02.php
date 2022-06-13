<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!-- Kreirati stranicu koja prima naziv elementa 
(parametar element)
(h1,h2, div, p, pre,..)
te s dobivenim elementom ispisuje primljeni tekst
(patametar tekst) -->

<?php echo '<',$_GET['element'],'>'; ?>
    <?=$_GET['tekst'] ?>
<?php echo '<',$_GET['element'],'>'; ?>

</body>
</html>