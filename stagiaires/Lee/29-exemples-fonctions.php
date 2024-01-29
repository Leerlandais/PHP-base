<?php

function lanceDe(int $faces){
    echo "Here's your possible rolls - ";
    $array = array();
    for ($i=1; $i<=$faces; $i++){
      $array[$i] = $i;
    }
    
    $roll = mt_rand(1, $faces);
    echo "<br>";
    echo "and here's what you rolled";
    return $roll;
}

echo lanceDe(6);