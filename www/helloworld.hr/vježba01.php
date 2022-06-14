<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="background-color: <?= $_GET['color'];?>">
    <div>
        <p>
        <h3>Choose background color:</h3>
        <ul>
            <li><a href="?color=red">Red</a></li>
            <li><a href="?color=blue">Blue</a></li>
            <li><a href="?color=green">Green</a></li>
        </ul>
        </p>
        The background color is now <?=$_GET['color']; ?>.
    </div>
</body>

</html>