<?php

    #Create a PHP script which displays the capital and country name from the above array $ceu. Sort the list by the capital of the country.

    $ceu = array( 
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

    foreach ($ceu as $key => $val) {
       echo "The capital of $key is $val."."<br>";
    }
?>