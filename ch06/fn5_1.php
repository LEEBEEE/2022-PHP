<?php
    $snum = 4;
    $enum = 10;
    print_num_from_to($snum, $enum);
    print_num_from_to2($snum, $enum);
    print_num_from_to(10, 4);
    print_num_from_to2(10, 4);

    function print_num_from_to($snum, $enum)
    {
        print "[";
        if($snum > $enum)
        {
            for($i = $snum; $i >= $enum; $i--)
            {
                print $i;
                if($i !== $enum){print ", ";}
            }
        }
        else
        {
            for($i = $snum; $i <= $enum; $i++)
            {
                print $i;
                if($i !== $enum){print ", ";}
            }
        }
        print "]<br>";
    }

    function print_num_from_to2($snum, $enum)
    {
        print "[";
        for($i=$snum; $snum < $enum ? $i <= $enum : $i >= $enum ; $snum < $enum ? $i++ : $i--)
        {
            if($i != $snum){print ", ";}
            print $i;
        }
        print "]<br>";
    }
