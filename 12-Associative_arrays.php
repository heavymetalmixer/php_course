<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <label>Enter a country</label>
        <input type="text" name="country">
        <input type="submit">
    </form>
</body>
</html>

<?php
    $capitals = array(
        "USA" => "Washington D.C.",
        "Japan" => "Tokyo",
        "South Korea" => "Seoul",
        "India" => "New Delhi"
    );

    $capital = $capitals[$_POST["country"]];

    echo $capital;

    //echo $capitals["USA"];
    // $capitals["USA"] = "Las Vegas";

    // Now to add a new element at the end just assign a new key and value
    // $capitals["China"] = "Beijing";

    // This assigns the keys of an associative array to a new array
    // $keys = array_keys($capitals);

    // This assigns the values of an associative array to a new array
    // $values = array_values($capitals);

    // This returns a new associative array with the keys now as values,
    // and the values now as keys
    // $capitals = array_flip($capitals);

    // foreach ($capitals as $key => $value) {
    //     echo "{$key}: {$value}<br>";
    // }
?>
