<?php

  $colour = array('white', 'green', 'red');

    for ($i = 0; $i < count($colour); $i++) {
        if ($i == count($colour) - 1) {
            print $colour[$i];
        } else {
             print $colour[$i] .",";
        }
    }

    print "<ul>";
    sort($colour);

    for ($i = 0; $i < count($colour); $i++) {
          print "<li>". $colour[$i] ."</li>";
    }

    print "</ul>";

?>