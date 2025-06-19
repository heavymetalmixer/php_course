<?php
    // $temp = 50;
    // $cloudy = true;

    // if($temp >= 0 && $temp <= 30) {
    //     echo "The weather is good<br>";
    // }
    // else {
    //     echo "The weather is bad<br>";
    // // }

    // if($temp < 0 || $temp > 30) {
    //     echo "The weather is bad<br>";
    // }
    // else {
    //     echo "The weather is good<br>";
    // }

    // if (!$cloudy) {
    //     echo "It's sunny<br>";
    // }
    // else {
    //     echo "It's cloudy<br>";
    // }

    // $age = 25;
    // $citizen = true;

    // if (!($age >= 18) || !$citizen) {
    //     echo "You cannot vote<br>";
    // }
    // else {
    //     echo "You can vote<br>";
    // }

    $child = false;
    $senior = true;
    $ticket = null;

    if ($child || $senior) {
        $ticket = 10;
    }
    else {
        $ticket = 15;
    }

    echo "The ticket price is \${$ticket}<br>";
?>
