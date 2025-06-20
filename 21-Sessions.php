<?php
// session: Super global variable (SGB) used to store information on a user
//          to be across multiple pages. A user is assigned a session-id, for
//          example: login credentials

    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Document</title>
</head>
<body>
    This is the Log In Page<br>
    <a href="home.php">This goes to the Home Page</a>

    <form action="index.php" method="post">
        User name: <br>
        <input type="text" name="username"><br>
        Password: <br>
        <input type="password" name="password"><br>
        User name: <br>
        <input type="submit" name="login" value="Log in"><br>
    </form>
</body>
</html>

<?php
    // The string inside the square brackets is a key, and the value
    // assigned to the expression is the "value" for that key
    // $_SESSION["username"] = "BroCode";
    // $_SESSION["password"] = "pizza123";

    // echo $_SESSION["username"];
    // echo $_SESSION["password"];

    if (isset($_POST["login"])) {
        if (!empty($_POST["username"]) && !empty($_POST["password"])) {
            $_SESSION["username"] = $_POST["username"];
            $_SESSION["password"] = $_POST["password"];

            echo $_SESSION["username"] . "<br>";
            echo $_SESSION["password"] . "<br>";

            // It seens you to that file/page
            header("Location: home.php");
        }
        else {
            echo "Missing user and/or password<br>";
        }
    }
?>
