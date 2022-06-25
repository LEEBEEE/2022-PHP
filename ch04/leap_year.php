<?php
    $year = rand(0, 2022);

    if ($year % 400 === 0 || ($year % 4 === 0 && $year % 100 !== 0))
    {
        print "${year}년은 윤년이다.";
    }
    else
    {
        print "${year}년은 윤년이 아니다.";
    }
    /*
    $year = rand(0, 2022);
    $leap_year = "윤년이 아니다";

    if($year % 400 === 0 || ($year % 4 === 0 && $year % 100 !== 0) )
    {
        $leap_year = "윤년이다";
    }

    print "${year}년은 ${leap_year}.";
    */
