<?php
    function happy_birthday($first_name, $age) {
        echo "Happy birthday to {$first_name}!<br>";
        echo "You are now {$age} years old<br>";
    }

    function is_even($number) {
        if (($number % 2) == 0) {
            echo "The number {$number} is even!<br>";
        }
        else {
            echo "The number {$number} is odd!<br>";
        }
    }

    function hypotenuse($a, $b) {
        $h = sqrt(($a ** 2) + ($b ** 2));
        return $h;
    }

    $hy = hypotenuse(3, 4);
    echo $hy;
?>
