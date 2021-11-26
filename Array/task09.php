<?php
    # Write a PHP script to combine (using one array for keys and another for its values) the following two arrays.

    $keys = array("key1", "key2", "key3");
    $vals = array("val1", "val2", "val3");

    for($i=0; $i < count($keys); $i++) {
        $temp[$keys[$i]] = $vals[$i] ;
    }

    echo print_r($temp);
    
?>