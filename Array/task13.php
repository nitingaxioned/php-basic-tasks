<?php
    #Write a PHP script to get the first element of the above array.

    $color = array(4 => 'white', 6 => 'green', 11=> 'red');

    foreach( array_slice($color, 0, 1) as $val ) {
        echo $val;
    }

?>