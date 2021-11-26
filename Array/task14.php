<?php
    #Write a PHP script to calculate and display average temperature, five lowest and highest temperatures.
    #Recorded temperatures : 78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73

    $temp = [78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73];
    $avg = 0;
    foreach($temp as $val) {
        $avg += $val; 
    }

    $avg /= count($temp);
    echo "Average Temperature is : $avg<br>" ;

    sort($temp);

    echo "List of five lowest temperatures : ";
    for ($i=0; $i< 5; $i++)
    { 
        echo $temp[$i].", ";
    }

    echo "<br>List of five highest temperatures : ";
    for ($i=(count($temp)-5); $i< (count($temp)); $i++)
    {
        echo $temp[$i].", ";
    }
?>