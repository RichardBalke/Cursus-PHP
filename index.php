<?php
// $grade = "A";

// switch($grade){
//     case"A":
//         echo"You did great";
//         break;
//     case"B":
//         echo"You did good";
//         break;
//     case"C":
//         echo"You did okay";
//         break;
//     case"D":
//         echo"You did poorly";
//         break;
//     case"F":
//         echo"You failed";
//         break;
//     default:
//         echo"{$grade} is not valid";
// }


$date = date("l");
echo $date;


switch($date) {
    case "Monday":
        echo "I hate Mondays";
        break;
    case "Tuesday":
        echo "I hate Tuesday";
        break;
    case "Wednesday":
        echo "I hate Wednesdays";
        break;
    case "Thursday":
        echo "I hate Thursdays";
        break;
    case "Friday":
        echo "I LOVE Fridays";
        break;
        
}

?>