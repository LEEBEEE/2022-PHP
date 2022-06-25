<?php
    for($d=2; $d < 10; $d++)
    {
        if ($d>2){print "---------------<br>";}
        for($i=1; $i < 10; $i++)
        {
            print "${d} × ${i} = " .$d*$i. "<br>";
        }
    }
