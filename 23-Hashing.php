<?php
    // hashing = Transforming sensitive data (like passwords) into
    //           letters, numbers and/or symbols via a mathematical
    //           process (similar to encryption). It hides the original
    //           data from 3rd parties

    $password = "pizza123";

    // The second parameter is the hashing algorithm
    $hash = password_hash($password, PASSWORD_DEFAULT);

    if (password_verify("hamburger666", $hash)) {
        echo "You are logged in!<br>";
    }
    else {
        echo "Wrong password<br>";
    }
?>
