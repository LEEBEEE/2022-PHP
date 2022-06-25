<?php
    $score = array(
        // 국, 영, 수
        array(100, 100, 100),
        array(90, 80, 70),
        array(55, 65, 75),
        array(90, 88, 55),
    );

    $sub = array("국어", "영어", "수학");
    $sum = array();
    $avg = array();

     for($i=0; $i<count($score[$i]); $i++)
    {
        for($j=0; $j<count($score); $j++)
        {
            $sum[$i] += $score[$j][$i];
            $avg[$i] = $sum[$i]/(count($score));
        }
        print $sub[$i]. "<br> 합계 : " . $sum[$i] . ", 평균 : " . $avg[$i] . "<br>";
    }