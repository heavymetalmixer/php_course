<?php
    // Arithmetic operators
    $x = 10;
    $y = 2;
    $z = null;

    // $z = $x + $y;
    // $z = $x - $y;
    // $z = $x * $y;
    // $z = $x / $y;
    // $z = $x ** $y;
    $z = $x % $y;
    // echo $z;

    // Increment/decrement operators
    $counter = 0;
    $counter++;
    $counter--;
    $counter += 3;
    // echo $counter;

    // Operator precedence
    // ()
    // **
    // * / %
    // + -
    $total = 1 + 2 - 3 * 4 / 5 ** 6;
    echo $total;
?>
