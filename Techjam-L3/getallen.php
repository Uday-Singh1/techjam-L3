<?php
  // Start een for loop  die van 33 tot 543 loopt
        for ($i = 33; $i <= 543; $i++) {
            $output = $i;   //toont de waarde van i

            if ($i % 5 == 0 && $i % 9 == 0) {    //dit geeft aan dat je zegt dat als het te delen is door zowel 5 en 9 
                $output = "Web";    //toont web als het te delen is door 5 en 9
            } elseif ($i % 5 == 0) {    //anders deel je door 5
                $output = "Software";   //toon software als het door 5 te delen is 
            } elseif ($i % 9 == 0) {   //anders deel je door 9
                $output = "Developer";   //toon software als het door 9 te delen is     
            }

            echo '<li>'; //toont een li 
            if ($i % 2 == 0) {
                echo '<strong>';  //strong is dikgedrukte lettertype
            }

            echo $output;  // Toon de waarde van $output

            if ($i % 2 == 0) {
                echo '</strong>';   // Als $i even is, sluit de sterke tag 
            }
    
            echo '</li>'; //de list item word gesloten
        }
     ?>