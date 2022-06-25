<?php
    $arr1 = [1, 2, 3, 4, 5];
    $arr2 = [1, 2, 3, 6, 7];

    $arr3 = [1, 2, 3, 4, 5];

    $diff_arr = array_diff($arr1, $arr2);

    print_r($diff_arr);
    print "<br>";

    print ($arr1 === $arr2) . "<br>";
    print ($arr1 === $arr3) . "<br>";