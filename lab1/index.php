<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php

        

        $name = 'Richard';
        $what = 'geek';
        $level = 10;
        echo 'Hi, my name is ' . $name, '. and I am a level ' . $level . ' ' . $what;
        echo '<br>';

        if (isset($_GET['hours'])) {
            $hoursworked = $_GET['hours'];
        } else {
            echo 'You did not specify # of hours, assuming 10';
            echo '<br>';
            $hoursworked = 10;
        }
        $rate = 12;


        if ($hoursworked > 40) {
            $total = $hoursworked * $rate * 1.5;
        } else {
            $total = $hoursworked * $rate;
        }
        echo ($total > 0) ? 'You owe me $ ' . $total : "You're welcome";

        if (isset($_GET['board'])) {
            echo '<br>board set';
            echo '<br>';
            $position = $_GET['board'];
            $squares = str_split($position);
            if (winner('x', $squares)) {
                echo 'You Win!';
            } else if (winner('o', $squares)) {
                echo 'I Win!';
            } else {
                echo 'No Winner Yet';
            }
        } else {
            echo '<br> Board is not set';
        }
        
        function winner($token, $position) {
            $won = false;
            if (($position[0] == $token) &&
                    ($position[1] == $token) &&
                    ($position[2] == $token)) {
                $won = true;
            } else if (($position[3] == $token) &&
                    ($position[4] == $token) &&
                    ($position[5] == $token)) {
                $won = true;
            } else if (($position[6] == $token) &&
                    ($position[7] == $token) &&
                    ($position[8] == $token)) {
                $won = true;
            } else if (($position[0] == $token) &&
                    ($position[3] == $token) &&
                    ($position[6] == $token)) {
                $won = true;
            } else if (($position[1] == $token) &&
                    ($position[4] == $token) &&
                    ($position[7] == $token)) {
                $won = true;
            } else if (($position[2] == $token) &&
                    ($position[5] == $token) &&
                    ($position[8] == $token)) {
                $won = true;
            } else if (($position[0] == $token) &&
                    ($position[4] == $token) &&
                    ($position[8] == $token)) {
                $won = true;
            } else if (($position[2] == $token) &&
                    ($position[4] == $token) &&
                    ($position[6] == $token)) {
                $won = true;
            }
            return $won;
        }
        
        ?>
    </body>

</html>


