<?php
    function inc()
    {
        static $i = 1;
        print $i . "<br>";
        $i += 1;
    }

    $j =1;
    function inc2()
    {
        global $j;
        print $j . "<br>";
        $j += 1;
    }
    

    for($i=0; $i<10; $i++)
    {
        inc();
    }