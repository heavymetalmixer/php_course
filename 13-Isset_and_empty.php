<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <label>Username: </label>
        <input type="text" name="username"><br>
        <label>Password: </label>
        <input type="text" name="password"><br>
        <input type="submit" name="login" value="Log in"><br>
    </form>
</body>
</html>

<?php
    // isset() = It returns true if a variable is declared and not null
    // empty() = It returns true if a variable  is not declared, false, null or ""

    // For some reason the buffer for requests isn't automatically flushed, so
    // any last values it got, even from a different file, stays there
    // so we've gotta enter the "page" again with clic on the URL bar and pressing Enter
    // instead of pressing F5 or Refresh Page on the web browser

    $username = null;

    // if (isset($username)) {
    //     echo "This variable is set";
    // }
    // else {
    //     echo "This variable is NOT set";
    // }

    // if (empty($username)) {
    //     echo "This variable is empty";
    // }
    // else {
    //     echo "This variable is NOT empty";
    // }

    foreach ($_POST as $key => $value) {
        echo "{$key} = {$value}<br>";
    }

    if (isset($_POST["login"])) {
        $username = $_POST["username"];
        $password = $_POST["password"];

        if (empty($username)) {
            echo "The Username is missing<br>";
        }
        else if (empty($password)) {
            echo "The password is missing<br>";
        }
        else if (empty($username) && empty($password)) {
            echo "The Username and Password are missing<br>";
        }
        else {
            echo "Hello {$username}<br>";
        }
    }
?>
