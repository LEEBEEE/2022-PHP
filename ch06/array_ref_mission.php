<?php

    function plus_array(&$arr, $val)
    {
        for($i=0; $i<count($arr); $i++)
        {
            $arr[$i] = $arr[$i] + $val;
        }
    }

    function plus_array2(&$arr, $val)
    {
        foreach($arr as $k => $v)
        {
            $arr[$k] = $v + $val;
        }
    }


    $arr = [10, 20, 30, 40, 50];
    
    //plus_array($arr, 10);
    print_r($arr);
    print "<br>";
    plus_array2($arr, 5);
    print_r($arr);