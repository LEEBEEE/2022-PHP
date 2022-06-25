<?php
    $star = rand(2,10);
    print "값 = $star <br>";
    
    for($i = 2 ; $i <=$star; $i++)
        {   
            print "<br>★";
            for($z=2; $z<=$star; $z++)
            {
                print "★";
            }

        }
?>

