<?php
    $arr = [10, 33, 12, 8, 1, 89, 11];

    for($i=0; $i < count($arr); $i++)
    {
        for($j=0; $j<count($arr)-1; $j++)
        {
            if($arr[$j+1]<$arr[$j])
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