<?php
    for ($i=0; $i<7; $i++)
    {
      for ($j=0; $j<=7; $j++)
        {
            if ($j == 1 || (($i == 0 || $i == 3) && $j > 0 && $j < 5) || (($j == 5 || $j == 1) && ($i == 1 || $i == 2)))
            {
                echo "*"; 
            }
            else  
            {
                echo "&nbsp;&nbsp;"; 
            }
        }        
      echo "<br>";
    }
?>