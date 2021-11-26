<?php
    #Delete an element from the above PHP array. After deleting the element, integer keys must be normalized.
    $x = array(1, 2, 3, 4, 5);
    var_dump($x);
    unset($x[2]);
    $x = array_values($x);
    echo '<br>';
    var_dump($x);

?>