<?php
    $end_val = 10;
    print "[";
    for($i=1; $i<=$end_val; $i++)
    {
        print ($i > 1 ? ", ":"") .$i;
    }  
    print "] <br>";

    $end_val = 10;
    print "[";
    for($i=1; $i<=$end_val; $i++)
    {
        print $i;
        if($i<$end_val)
        {
            print ", ";
        }
    }  
    print "] <br>";

    $end_val = 10;
    print "[";
    for($i=1; $i<=$end_val; $i++)
    {
        if($i>1)
        {
            print ", ";
        }
        print $i;
    }  
    print "] <br>";
