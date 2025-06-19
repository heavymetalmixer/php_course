<?php
    // $grade = "b";

    // switch (mb_strtoupper($grade, "UTF-8")) {
    //     case "A":
    //         echo "You did great!<br>";
    //         break;

    //     case "B":
    //         echo "You did good<br>";
    //         break;

    //     case "C":
    //         echo "You did okay<br>";
    //         break;

    //     case "D":
    //         echo "You did poorly<br>";
    //         break;

    //     case "F":
    //         echo "You failed!<br>";
    //         break;

    //     default:
    //         echo "{$grade} is not a valid grade<br>";
    //         break;
    // }

    $date = date("1");

    switch($date) {
        case "Monday":
            echo "I hate Mondays<br>";
            break;

        case "Tuesday":
            echo "It is Taco Tuesday!<br>";
            break;

        case "Wednesday":
            echo "The work week is half over<br>";
            break;

        case "Thursday":
            echo "It's almost weekend<br>";
            break;

        case "Friday":
            echo "The weekend is here!<br>";
            break;

        case "Saturday":
            echo "Time to party!<br>";
            break;

        case "Sunday":
            echo "Time to relax<br>";
            break;

        default:
            echo "{$date} isn't a valid day of the week<br>";
            break;
    }
?>
