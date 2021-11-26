<?php

    #Write a PHP script that inserts a new item in an array in any position.
    $num = [1,2,3,4,5];
    echo "Base Array: ";
    foreach ($num as $val) {
        echo "$val ";
    }

    echo "<br><br>";

    array_splice($num, 2, 0, '$');

    echo "New Array: ";
    foreach ($num as $val) {
        echo "$val ";
    }
    
?>