<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel="stylesheet">
    <title>sm4</title>
</head>
<body>
    <div class="container">
    <?php
    require_once 'car.php';
    require_once 'library/car.php';?>
    <div class="car">
        <?$el1 = new car\car(); 
        echo "<br> <br>";
        $el2 = new car2\car();?>
    </div>
    </div>
</body>
</html>

