<?php
    #Write a PHP script to get an array containing all the entries of an array which have the keys that are present in another array.
    
    $arr = array('c1' => 'Red', 'c2' => 'Green', 'c3' => 'White', 'c4' => 'Black'); 
    $keys = array('c2', 'c4'); 
    $nwe_arr = [];
    foreach($keys as $val){
        $nwe_arr[$val] = $arr[$val];
    }

    print_r($nwe_arr);
?>