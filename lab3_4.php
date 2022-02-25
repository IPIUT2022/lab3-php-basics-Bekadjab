<?php

   $originalNums = array('1', '2', '3', '4', '5');

    echo "Original Array </br>";
    foreach($originalNums as $nums) {
        echo $nums . "\n";
    }

    print "</br>";

    array_splice($originalNums, 3, 0,'$');
    echo "After inserting $ </br>";
    foreach($originalNums as $nums) {
        echo $nums ."\n";
    }

?>