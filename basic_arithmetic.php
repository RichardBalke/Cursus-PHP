<?php
    $name = "Richard";
    $food = "noodles";
    $email = "@gmail.com";

    $age = 31;
    $users = 2;
    $quantity = 4;

    $gpa = 2.5;
    $price = 3.99;
    $tax_rate = 5.1;

    $employed = true;
    $online = false;
    $for_sale = true;

    $total=null;

    echo"You have ordered {$quantity} x {$food}<br>";
    $total = $quantity * $price;
    echo "Your total is: \${$total}<br><br>";



    $x = 10;
    $y = 4;
    $z = null;

    $z = $x % $y;
    
    echo "$z <br><br>";


    $counter = 0;

    $counter -=3;
    echo "$counter<br><br>";

    $total = 1 + 2 - 3 * 4 / 5 ** 6;
    echo "$total";


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


</body>
</html>