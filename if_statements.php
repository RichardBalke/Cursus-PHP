<?php
// $age = 81;

// if ($age >= 81){
//     echo"You're too old";
// }
// elseif ($age >= 18){
//     echo "You may enter this site";
// }
// elseif ($age <= 0){
//     echo"That is not a valid age";
// }
// else {
//     echo "You must be 18+ to enter this site";
// }

// $adult = true;

// if($adult == true){
//     echo "You may enter this site";
// }
// else{
//     echo "You must be an adult to enter";
// }

$hours = 41;
$rate = 15;
$weekly_pay = null;


if($hours <= 0){
    $weekly_pay = 0;
}
elseif($hours <= 40){
    $weekly_pay = $hours * $rate;
}
else{
    $weekly_pay = ($rate * 40) + (($hours - 40) * ($rate * 1.5));
}


echo "You made \${$weekly_pay} this week";

?>