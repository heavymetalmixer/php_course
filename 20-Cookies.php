<?php
    // Cookies are stored as associative arrays. The first argument is the key, the
    // second one is the value, and the third one is an expiration time in seconds.
    // The fourth argument is where to save the cookie, a file path
    // One day has 86400 seconds
    // setcookie("fav_food", "pizza", time() + (86400 * 2), "/"); // This cookie lasts for 2 days
    setcookie("fav_drink", "coffee", time() + (86400 * 3), "/"); // This cookie lasts for 3 days
    setcookie("fav_dessert", "ice cream", time() + (86400 * 4), "/");

    // To delete a cookie set the third argument as time() - 0
    setcookie("fav_food", "pizza", time() - 0, "/"); // This cookie lasts for 2 days
    // setcookie("fav_drink", "coffee", time() - 0, "/"); // This cookie lasts for 3 days
    // setcookie("fav_dessert", "ice cream", time() - 0, "/");

    foreach ($_COOKIE as $key => $value) {
        echo "{$key} = {$value}<br>";
    }

    if (isset($_COOKIE["fav_food"])) {
        echo "BUY SOME {$_COOKIE["fav_food"]}<br>";
    }
    else {
        echo "I don't know your favorite food<br>";
    }
?>
