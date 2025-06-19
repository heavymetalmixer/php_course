<?php
    // $age = 0;

    // if ($age >= 100) {
    //     echo "You're too old to enter this site<br>";
    // }
    // else if ($age >= 18) {
    //     echo "You may enter this site<br>";
    // }
    // else if ($age <= 0) {
    //     echo "That wasn't a valid age<br>";
    // }
    // else {
    //     echo "You must be 18+ to enter<br>";
    // }

    // $adult = true;

    // if ($adult == true) {
    //     echo "You may enter this site<br>";
    // }
    // else {
    //     echo "You must be an adult to enter<br>";
    // }

    $hours = 40;
    $rate = 15;
    $weekly_pay = null;

    if ($hours <= 0) {
        $weekly_pay = 0;
    }
    else if ($hours <= 40) {
        $weekly_pay = $hours * $rate;
    }
    else {
        $weekly_pay = ($rate * 40) + (($hours - 40) * ($rate * 1.5));
    }

    echo "You made {$weekly_pay} dollars this week<br>";
?>
