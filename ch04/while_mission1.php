<?php
    $val = rand(50, 100);
    print "val : $val <br>";

    $i = 1;
    $sum = 0;
    while($i <= $val)
    {
        $sum += $i++;
    }

    print "sum : $sum <br>";