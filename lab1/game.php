<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * A simple PHP tic-tac-toe game, taking game positions as parameters
 * Additional parameters checks are needed, and changes should be made so it 
 * really stops after someone wins.
 *
 * @author Richard Gosse A00246425
 */
class game {

    var $position;

    function __construct($squares) {
        $this->position = str_split($squares);
    }

    function play() {
        $check = true;
        // in future, incorporate & refactor some additional checks such as verifying parameter values (x,o,-)
        $numSquares = count($this->position);
        if ($numSquares != 9) {
            $check = false;
        }

        if ($check) { //does the parameter pass a quick size check?
            $this->pick_move(); // computer moves first as X
            $this->display(); // human then moves as o, and grid is displayed
            if ($this->winner('o')) {
                echo '<h2>O Wins! Good for you!</h2>';
                return false;
            } else if ($this->winner('x')) {
                echo '<h2>X Wins! Too bad!</h2>';
                return false;
            } else {
                echo '<h2>No Winner Yet</h2>';
            }
        } else {
            echo '<br> Board is not set correctly, ' . $numSquares . ' squares are defined. You require 9.';
        }
    }

    function display() {
        echo '<table cols=”3” style="font-size:300%; text-align:center;">';
        echo '<tr><th>TIC-</th><th>TAC-</th><th>TOE</th></tr><tr>'; // build header & open the first row
        for ($pos = 0; $pos < 9; $pos++) {
            echo $this->show_cell($pos);
            if ($pos % 3 == 2) {
                echo '</tr><tr>'; // start a new row for the next square
            }
        }
        echo '</tr>'; // close the last row
        echo '</table>';
    }

    function show_cell($which) {
        $token = $this->position[$which];
        if ($token <> '-') {
            return '<td style="border: 1px solid black">' . $token . '</td>';
        }
        $this->newPosition = $this->position;
        $this->newPosition[$which] = 'o';
        $move = implode($this->newPosition);
        $link = '?board=' . $move;
        return '<td style="border: 1px solid black"><a href="' . $link . '">-</a></td>';
    }

    function pick_move() { // pretty basic, computer picks a random on-occupied square, doesn't try hard to win.
        $move = rand(0, 8);
        $token = $this->position[$move];
        if ($token == '-') {
            $this->position[$move] = 'x';
        } else { // is square chosen already taken?
            $this->pick_move(); //not a great idea (browser memory??) fix when i'm thinking better
        }
    }

    function winner($token) { //eeww!, else if, else if, etc... fix if time
        $won = false;
        if (($this->position[0] == $token) &&
                ($this->position[1] == $token) &&
                ($this->position[2] == $token)) {
            $won = true;
        } else if (($this->position[3] == $token) &&
                ($this->position[4] == $token) &&
                ($this->position[5] == $token)) {
            $won = true;
        } else if (($this->position[6] == $token) &&
                ($this->position[7] == $token) &&
                ($this->position[8] == $token)) {
            $won = true;
        } else if (($this->position[0] == $token) &&
                ($this->position[3] == $token) &&
                ($this->position[6] == $token)) {
            $won = true;
        } else if (($this->position[1] == $token) &&
                ($this->position[4] == $token) &&
                ($this->position[7] == $token)) {
            $won = true;
        } else if (($this->position[2] == $token) &&
                ($this->position[5] == $token) &&
                ($this->position[8] == $token)) {
            $won = true;
        } else if (($this->position[0] == $token) &&
                ($this->position[4] == $token) &&
                ($this->position[8] == $token)) {
            $won = true;
        } else if (($this->position[2] == $token) &&
                ($this->position[4] == $token) &&
                ($this->position[6] == $token)) {
            $won = true;
        }
        return $won;
    }

}
