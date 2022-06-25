<?php
    $arr = [10, 33, 12, 8, 1, 89, 11];

    print_r($arr);
    print "<br>";
    print "<br>";

    for($i=0; $i<count($arr)-1; $i++)
    {
        $idx = $i;
        for($j=$i+1; $j<count($arr); $j++)
        {
            if($arr[$idx] > $arr[$j])
            {
                $idx = $j;
            }

        }
        if($idx != $i)
        {
            $temp = $arr[$idx];
            $arr[$idx] = $arr[$i];
            $arr[$i] = $temp;
        }
        print_r($arr);
        print "<br>";
    }
    print "<br>";
    print "<br>";
    print_r($arr);