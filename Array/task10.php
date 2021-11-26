<?php
    # Write a PHP program to create a range like the following array.
    
    $keys = range(20, 25);
    $vals = range(2,7);

    for($i=0; $i < count($keys); $i++) {
        $temp[$keys[$i]] = $vals[$i] ;
    }

    echo print_r($temp);

?>