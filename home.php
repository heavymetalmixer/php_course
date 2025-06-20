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
    This is the Home Page<br>
    <a href="index.php">This goes to the Log In Page</a>

    <form action="home.php" method="post">
        <input type="submit" name="logout" value="Log out">
    </form>
</body>
</html>

<?php
    // echo $_SESSION["username"];
    // echo $_SESSION["password"];

    if(isset($_POST["logout"])) {
        session_destroy();
        header("Location: index.php");
    }
?>
