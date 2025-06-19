<?php
    $username = "Bro Code";
    $phone = "123-456-789";

    // They convert all the characters to lower case or upper case.
    // These 2 are ASCII-only
    // $username = strtolower($username);
    // $username = strtoupper($username);

    // Meanwhile, these 2 allow you to use different encondings, like UTF-8
    // $username = mb_strtolower($username, "UTF-8");
    // $username = mb_strtolower($username, "UTF-8");

    // It removes whitespaces before and after other characters
    // $username = trim($username);

    // It adds the third parameter and the end of the string, as many times as
    // the second parameter says
    // $username = str_pad($username, 20, "0");

    // It replaces the character on the first parameter with the one on the
    // second parameter, from the variable in the third parameter
    // $phone = str_replace("-", "", $phone);

    // It returns a string with the same characters in the opposite order
    // $username = strrev($username);

    // It returns a string with the same characters in a RANDOM order
    // $username = str_shuffle($username);

    // Returns 0 if both strings are equal, 1 or -1 otherwise
    // $equals = strcmp($username, "BroCode");

    // Returns the amount of characters in a string
    // $count = strlen($username);

    // Returns the first position in the string where the character is
    // $count = strpos($username, " ");

    // It returns a string of a portion of the first parameter.
    // The second parameter tells where the first character to grab is,
    // the third parameter tells how many characters to grab, from the one in
    // parameter 2 to one less than the number
    // $first_name = substr($username, 0, 2); // from "Bro Code" it returns "Br"

    // It returns an array. The first parameter "separator" is where the string
    // should be split. This separator is not included in the array elements
    // $full_name = explode(" ", $username);

    // This one turns an array into a string
    // $full_name = implode($full_name);



    echo $full_name;
?>
