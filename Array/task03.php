<?php
    #Write a PHP script which decodes the following JSON string.
   
    $json_str = '{"Title": "The Cuckoos Calling",
        "Author": "Robert Galbraith",
        "Detail": {
        "Publisher": "Little Brown"
        }}';

    $json_arr = json_decode($json_str, true);
    array_walk_recursive($json_arr, function($key, $val){ echo "$key : $val<br>"; });

?>