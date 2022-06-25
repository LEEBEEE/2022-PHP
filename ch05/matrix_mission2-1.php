<?php
    $score = array(
        // 국, 영, 수
        array(100, 100, 100),
        array(90, 80, 70),
        array(55, 65, 75),
        array(90, 88, 55),
    );

    $subject = array("국어", "영어", "수학");
    $sub_sum = array();

     for($i=0; $i<count($score); $i++)
    {
        for($j=0; $j<count($score[$i]); $j++)
        {
         $sub_sum[$j] += $score[$i][$j];   
        }
    }
    for($i=0; $i<count($subject); $i++)
    {
        $sum = $sub_sum[$i];
        $avg = $sum / count($score);
        print $subject[$i]. "<br> 합계 : $sum, 평균 : $avg <br>";
    }