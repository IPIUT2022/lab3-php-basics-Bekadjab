<?php

   $sample = fopen("Sample.txt", "r") or die("Can't open file");
    $text = fread($sample, 25000);
    fclose($sample);

    $parsedString = preg_split("/\r\n|\n|\r| /", $text);

    $keyValueArray = array();

    for($i = 0; $i < count($parsedString) - 2; $i += 2) {
        $keyValueArray[$parsedString[$i]] = $parsedString[$i+1];
    }

    foreach ($keyValueArray as $key => $value) {
        echo "Key: \"${key}\" Value: \"${value}\" </br>";
    }

?>