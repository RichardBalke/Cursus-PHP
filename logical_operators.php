<?php
$temperature = 15;
$cloudy = false;


if ($temperature < 0 || $temperature > 30) {
    echo "The weather is bad<br>";
} else {
    echo "The weather is good<br>";
}

if (!$cloudy) {
    echo "It's sunny<br>";
} else {
    echo "It's cloudy<br>";
}


$age = 31;
$citizen = true;

if ($age >= 18 && $citizen) {
    echo "You can vote<br>";
} else {
    echo "You cannot vote<br>";
}


$child = false;
$senior = true;
$ticket_price = null;


if($child || $senior) {
    $ticket_price = 10;
} else {
    $ticket_price = 15;
}

echo "The ticket price is \${$ticket_price}";