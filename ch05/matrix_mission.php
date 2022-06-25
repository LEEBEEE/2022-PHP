<?php
    $score = array(
        // 국, 영, 수
        array(100, 100, 100),   // 영수
        array(90, 80, 70),      // 순자
        array(55, 65, 75),      // 영철
        array(90, 88, 55),
    );

    $names = array("영수", "순자", "영철", "옥순");
    $each_sum = array();

    for($i=0; $i<count($score); $i++)
    {
        for($z=0; $z<count($score[$i]); $z++)
        {
            $each_sum[$i] += $score[$i][$z];
        }
    }

    for($i=0; $i<count($names); $i++)
    {
        $avg = $each_sum[$i] / count($score[$i]);
        print $names[$i] . " - sum : " . $each_sum[$i] . " &nbsp&nbsp - avg : $avg <br>";
    }