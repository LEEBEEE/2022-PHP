<?php
    $arr = [10, 33, 12, 8, 1, 89, 11];

    for($i=count($arr)-1; $i>0; $i--)
    {
        for($j=0; $j<$i; $j++)
        {
            if($arr[$j]>$arr[$j+1])
            {
                $temp = $arr[$j];
                $arr[$j] = $arr[$j+1];
                $arr[$j+1] = $temp;
            }
        }
        print_r($arr);
        print "<br>";
    }
    print "<br>";
    print "<br>";
    print_r($arr);