<?php
    #Write a PHP function to search a specified value within the values of an associative array.
    $arr = array( 
        "Italy"=>"Rome", 
        "Luxembourg"=>"Luxembourg", 
        "Belgium"=> "Brussels", 
        "Denmark"=>"Copenhagen", 
        "Finland"=>"Helsinki", 
        "France" => "Paris",
        "Slovakia"=>"Bratislava", 
        "Slovenia"=>"Ljubljana", 
        "Germany" => "Berlin", 
        "Greece" => "Athens", 
        "Ireland"=>"Dublin", 
        "Netherlands"=>"Amsterdam", 
        "Portugal"=>"Lisbon", 
        "Spain"=>"Madrid", 
        "Sweden"=>"Stockholm", 
        "United Kingdom"=>"London", 
        "Cyprus"=>"Nicosia", 
        "Lithuania"=>"Vilnius", 
        "Czech Republic"=>"Prague", 
        "Estonia"=>"Tallin", 
        "Hungary"=>"Budapest", 
        "Latvia"=>"Riga", 
        "Malta"=>"Valetta", 
        "Austria" => "Vienna", 
        "Poland"=>"Warsaw"
    ) ;

    function findIn($str, $arr){
        foreach ($arr as $key => $val) {
            if(strcmp($str, $val) == 0)
            {
                return array($key => $val); 
            }
        }
        return null;
    }


    $new_arr = findIn("Prague", $arr);

    if($new_arr != null) {
        foreach ($new_arr as $key => $val) {
            echo "$val is matched on $key key in given array";
        }
    } else {
        echo "Not found.....";
    }

?>