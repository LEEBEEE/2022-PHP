<?php
    $score_arr = array(100, 90, 33, 87, 65);

    // $sum = $score_arr[0] + $score_arr[1] + $score_arr[2] + $score_arr[3] + $score_arr[4];
    $sum = 0;
    $len = count($score_arr);
    for($i=0; $i<=$len; $i++)
    {
        $sum += $score_arr[$i];
    }
    $avg = $sum / $len;
    
    print "점수 합 : $sum<br>점수 평균 : $avg";
