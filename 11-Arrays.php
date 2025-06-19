<?php
    $foods = array("apple", "orange", "banana", "coconut");

    // $foods[0] = "pineapple";

    // This adds one or more elements at the end of the array
    // array_push($foods, "pineapple", "kiwi");

    // This removes and returns the last element of the array
    // array_pop($foods);

    // This removes the first element of the array and shift
    // the other elements by -1 in their position. For eample:
    // Element 1 will now be Element 0, Element 2 will be now
    // Element 1, etc.
    // array_shift($foods);

    // This returns a NEW ARRAY with its elements being in reversed
    // order form the original array
    //$foods = array_reverse($foods);

    // This counts the amount of elements in the array and returns
    // a positive number
    // count($foods);

    // It works the same as foreach, more manual
    // for ($i = 0; $i < count($foods); $i++) {
    //     echo $foods[$i] . "<br>";
    // }

    foreach($foods as $food) {
        echo $food . "<br>";
    }
?>
