<?php
    
    $score = rand(0,120);
    print "점수 : $score <br>";

    if($score>100 || $score < 0)
    {
        print "잘못된값";
    }
    else
    {
        $sign = "F";
        $symbol = "";
        $val_1 = floor($score / 10);  // intval($score / 10); // 실수 빼고 정수만 
        // floor 내림 ceil 올림 round 반올림
        switch($val_1)
        {
            case 10: case 9:
                $sign = "A";
                break;
            case 8:
                $sign = "B";
                break;
            case 7:
                $sign = "C";
                break;
            case 6:
                $sign = "D";
                break;
        }
        $val_2 = $score%10;
        if($score >= 60)
        {
            if($score === 100 || $val_2 >= 7)
            {
                $symbol = "+";
            }
            else if($val_2 <= 3)
            {
                $symbol = "-";
            }
            else {}
        }
        print $sign . $symbol;
    }