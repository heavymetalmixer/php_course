<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <input type="checkbox" name="foods[]"
        value="Pizza">Pizza<br>
        <input type="checkbox" name="foods[]"
        value="Hamburger">Hamburger<br>
        <input type="checkbox" name="foods[]"
        value="Hot dog">Hot dog<br>
        <input type="checkbox" name="foods[]"
        value="Taco">Taco<br>
        <input type="submit" name="submit">
    </form>
</body>
</html>

<?php
    // if(isset($_POST["submit"])) {
    //     if(isset($_POST["pizza"])) {
    //         echo "You like pizzas<br>";
    //     }

    //     if(isset($_POST["hamburger"])) {
    //         echo "You like hamburgers<br>";
    //     }

    //     if(isset($_POST["hot_dog"])) {
    //         echo "You like hot dogs<br>";
    //     }

    //     if(isset($_POST["taco"])) {
    //         echo "You like tacos<br>";
    //     }

    //     if(empty($_POST["pizza"])) {
    //         echo "You DON'T like pizzas<br>";
    //     }

    //     if(empty($_POST["hamburger"])) {
    //         echo "You DON'T like hamburgers<br>";
    //     }

    //     if(empty($_POST["hot_dog"])) {
    //         echo "You DON'T like hot dogs<br>";
    //     }

    //     if(empty($_POST["taco"])) {
    //         echo "You DON'T like tacos<br>";
    //     }
    // }

    if (isset($_POST["submit"])) {
        $foods = $_POST["foods"];

        foreach ($foods as $food) {
            echo $food . "<br>";
        }
    }
?>
