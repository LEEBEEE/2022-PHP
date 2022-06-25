<?php
    $star = rand(3,10);
    print $star . "<br>";
    for($i=1;$i<=$star;$i++)
    {
        for($j=0;$j<=$star;$j++)
        {
            if($j<$i){
                print "*";
            }
        }
        print "<br>";
    }
    print "---<br>";
    for($z=$star;$z;$z--)
    {
        for($y=$star--;$y;$y--)
        {
            print "*";
        }
        print "<br>";
    }    
