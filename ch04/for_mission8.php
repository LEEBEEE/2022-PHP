<?php
    $star = rand(2,10);
    for($i=$star; $i; $i--)
    {   
        for($j=$star; $j ; $j--)
        {
            print "🌠";
        }
        print "<br>";
    }
    print "STAR : " . $star . "<br>";