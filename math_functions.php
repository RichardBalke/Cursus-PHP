<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=\], initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!-- 
    <form action="index.php" method="post">
        <label for="">X</label>
        <input type="text" name="X"><br>
        <label for="">Y</label>
        <input type="text" name="Y"><br>
        <label for="">Z</label>
        <input type="text" name="Z"><br>
        <input type="submit" value="total">
    </form> -->

    <form action="index.php" method="post">
        <label for="">Radius</label>
        <input type="text" name="radius">
        <input type="submit" value="calculate">
    </form><br>
    
</body>
</html>
<?php
// $X = $_POST["X"];
// $Y = $_POST["Y"];
// $Z = $_POST["Z"];
// $total = null;

// $total = abs($X);
// $total = round($X);
// $total = floor($X);
// $total = ceil($X);
// $total = pow($X, $Y);
// $total = sqrt($X);
// $total = max($X, $Y, $Z);
// $total = min($X, $Y, $Z);
// $total = pi();
// $total = rand(1, 6);


$radius = $_POST["radius"];
$circumference = null;
$area = null;
$volume = null;


$circumference = 2 * pi() * $radius;
$circumference = round($circumference, 2);

$area = pi() * pow($radius, 2);
$area = round($area, 2);

$volume = 4/3 * pi() * pow($radius, 3);
$volume = round($volume, 2);


echo"circumference = {$circumference}cm <br>";
echo"Area = {$area}cm^2<br>";
echo"Volmue = {$volume}cm^3";



?>