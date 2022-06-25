<?php
    $star = rand(3,10);
    print "star = $star <br>";
    
    for($j=1; $j<=$star; $j++)
    {
        for ($z=1; $z <= $j; $z++)
        {
            print "@";
        }
    print "<br>";
    }
?>

