<?php
    $dan = rand(2, 9);

    print_gugudan($dan);
    print "<br><br>";
    print_gugudan_from_to(4, 8);

    function print_gugudan($d)
    {
        for($i = 1 ; $i < 10 ; $i++)
        {
            $result = $d * $i;
            print "$d X $i = $result <br>"; 
        }
    }
    
    function print_gugudan_from_to($sd, $ed)
    {
        for($j=$sd; $j<=$ed; $j++)
        {
            print_gugudan($j);
            print "------------ <br>";
        }
    }