<?php
    $score = array(
        array(100, 45, 60),
        array(48, 64, 77),
        array(68, 94, 52)
    );

    $sum = array();
    for($i=0; $i<count($score[$i]); $i++)
    {
        for($j=0; $j<count($score); $j++)
        {
            $sum[$i] += $score[$j][$i];
        }
    print $sum[$i] . "<br>";
    }
