<?php
    $name = "Bro Code";
    $food = "pizza";
    $email = "fake@gmail.com";

    $age = 21;
    $users = 2;
    $quantiy = 3;

    $gpa = 2.5;
    $price = 4.99;
    $tax_rate = 5.1;

    $employed = true;
    $online = true;
    $for_sale = true;

    echo "Hello {$name}<br>";
    echo "you like {$food}<br>";
    echo "Your email is {$email}<br>";

    echo "You're {$age} years old<br>";
    echo "There are {$users} users online<br>";
    echo "You would like to buy {$quantiy} items<br>";

    echo "Your gpa is {$gpa}<br>";
    echo "Your pizza is \${$price}<br>";
    echo "The sales tax rate is {$tax_rate}%<br>";

    echo "Online status {$online}<br>";

    echo "You have ordered {$quantiy} {$food}s<br>";
    $total = null;
    $total = $quantiy * $price;
    echo "Your total is: \${$total}<br>";
?>
