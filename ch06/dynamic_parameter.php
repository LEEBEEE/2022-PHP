<?php

    function sum(...$vals)
    {
        //$sum = 0;
        /*
        for($i=0; $i<=count($vals); $i++)
        {
            $sum += $vals[$i];
        }
        */
        /*
        foreach ($vals as $val)
        {
            $sum += $val;
        }
        print "SUM : $sum<br>";
        */
        print "SUM : " . array_sum($vals) . "<br>";

    }    

    sum(1, 2);
    sum(1, 2, 3);
    sum(1, 2, 3, 4);