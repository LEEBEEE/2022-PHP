<?php
    print "--START--<br>";
    $r_val = rand(1, 10);
    while($r_val !== 10)
    {
        print "r_val : $r_val <br>";
        $r_val = rand(1, 10);
    }
    print "---END---<br>";