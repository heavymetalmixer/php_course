<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <input type="submit" name="stop" value="stop">
    </form>
</body>
</html>

<?php
    // $counter = 1;

    // while ($counter <= 10) {
    //     echo $counter . "<br>";
    //     $counter++;
    // }

    $seconds = 0;
    $running = true;

    // while($running) {
        // if (isset($_POST["stop"])) {
        //     $running = false;
        //     break;
        // }
    //     if ($seconds == 2000) {
    //         $running = false;
    //         break;
    //     }

    //     $seconds++;
    //     echo $seconds . "<br>";
    // }

    // This for loop with only the repetition condition defined works the same as a while loop
    // Notice the ; before and after the repetition condition, those are always needed
    for (;$running;) {
        if ($seconds == 3000) {
            $running = false;
            break;
        }

        $seconds++;
        echo $seconds . "<br>";
    }
?>
