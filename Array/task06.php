<?php
    #Write a PHP script to get the shortest/longest string length from an array.

    $arr = array("abcd","abc","de","hjjj","g","wer");

    $max = 0;
    $min = 0;

    foreach ($arr as $val) {
        if(strlen($val)>$max)
        {
            $max = strlen($val);
        }
    }

    $min = $max;

    foreach ($arr as $val) {
        if(strlen($val)<$min)
        {
            $min = strlen($val);
        }
    }

    echo "The shortest array length is $min. The longest array length is $max.";
?>