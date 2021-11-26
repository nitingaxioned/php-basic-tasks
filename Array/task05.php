<?php

    #Write a PHP function to change the following array's all values to upper or lower case.
    $Color = array('A' => 'Blue', 'B' => 'Green', 'C' => 'Red');

    function upper($given_arr){
        foreach ($given_arr as $key => $val) {
            $tmp_arr[$key] = strtoupper($val);
        }
        return $tmp_arr;
    }

    function lower($given_arr){
        foreach ($given_arr as $key => $val) {
            $tmp_arr[$key] = strtolower($val);
        }
        return $tmp_arr;
    }
    
    echo 'Given Array :-<br>';
    echo print_r($Color);
    echo '<br>';
    echo '<br>lower case Array :-<br>';
    echo print_r(lower($Color));
    echo '<br>';
    echo '<br>Upper case Array :-<br>';
    echo print_r(upper($Color));

?>