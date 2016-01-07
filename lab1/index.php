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
        $name = 'Jim';
        $what = 'geek';
        $level = 10;
        echo 'Hi, my name is '.$name,'. and I am a level '.$level.' '.$what;
        echo '<br>';
        
        if (isset($_GET['hours'])) {
            $hoursworked = $_GET['hours'];
        } else {
            $hoursworked = 10;
        }
        $rate = 12;
   
        
        if ($hoursworked > 40) {
            $total = $hoursworked * $rate * 1.5;
        } else {
            $total = $hoursworked * $rate;
        }
        echo ($total > 0) ? 'You owe me '.$total : "You're welcome";
        
        if (isset($GET_['board'])){
            $position = $_GET['board'];
            $squares = str_split($position);
            if (winner('x',$squares)) echo 'You Win!';
            else if (winner('o',$squares)) echo 'I Win!';
            else echo 'No Winner Yet';
        }
        
        
        ?>
    </body>
</html>

<script>
function winner ($token,$position) {
            $won = false;
            if (($position[0] == $token) &&
                    ($position[1] == $token) &&
                    ($position[2] == $token)) {
                $won = true;
                    } else if (($position[3] == $token) &&
                            ($position[4] == $token) &&
                            ($position[5] == $token)) {
                        
            }
            return $won;
        }
        </script>