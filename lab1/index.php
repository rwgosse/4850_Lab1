<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<html>
    <head>
        <meta charset="UTF-8">
        <title>Tic-Tac-Toe</title>
    </head>
    <body>
        <?php
        include 'game.php';
        
//        $name = 'Richard';
//        $what = 'geek';
//        $level = 10;
//        echo 'Hi, my name is ' . $name,
//        '. and I am a level ' . $level . ' ' . $what;
//        echo '<br>';
//
//        if (isset($_GET['hours'])) {
//            $hoursworked = $_GET['hours'];
//        } else {
//            echo 'You did not specify # of hours, assuming 10';
//            echo '<br>';
//            $hoursworked = 10;
//        }
//        $rate = 12;
//
//
//        if ($hoursworked > 40) {
//            $total = $hoursworked * $rate * 1.5;
//        } else {
//            $total = $hoursworked * $rate;
//        }
//        echo ($total > 0) ? 'You owe me $ ' . $total : "You're welcome";


        $game_on = true;
        if ($game_on) {
            echo '<br>';
            if (isset($_GET['board'])) {
                $squares = $_GET['board'];
            } else {
                $squares = '---------';
            }
            $game = new game($squares);
            $gameon = $game->play();
        } 
        echo '<h3><a href="index.php">Restart</a></h3>';
        ?>
    </body>

</html>


