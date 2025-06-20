<?php
    include("database.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Document</title>
</head>
<body>
    <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <h2>Welcome to the Fakebook</h2>
        User name: <br>
        <input type="text" name="username"><br>
        Password: <br>
        <input type="password" name="password">
        <input type="submit" name="submit" value="Register">
    </form>
</body>
</html>

<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS);
        $password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_SPECIAL_CHARS);

        if(empty($username)) {
            echo "Please enter a user name<br>";
        }
        else if (empty($password)) {
            echo "Please enter a password<br>";
        }
        else {
            $hash = password_hash($password, PASSWORD_DEFAULT);
            $sql = "INSERT INTO users (user, password)
                    VALUES ('$username', '$hash')";

            try {
                mysqli_query($conn, $sql);
                echo "You are now registered<br>";
            }
            catch(mysqli_sql_exception) {
                echo "That user already exists in the database<br>";
            }
        }
    }

    mysqli_close($conn);
?>
