<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Rock Paper Scissors</h1>
    <hr>
    <?php
        // if (!isset($_GET["Player1"]) || !isset($GET["Player2"])) {
        //     header("Location: game.php");
        // }
        $player1 = $_GET["p1c"];
        $player2 = $_GET["p2c"];
        echo "<h1>Player one picked " . $player1 . ".</h1>";
        echo "<h1>Player one picked " . $player2 . ".</h1>";
    ?>
</body>
</html>