<?php
    // 재귀함수
    // 내가 함수라면 내가 나를 호출하는 것

    $num = 4;
    $result = factorial_rec($num); 
    print "${num}! = $result <br>";

    function factorial($num)
    {
        $f = 1;
        for($i=$num; $i>1; $i--)
        {
            $f *= $i;
        }
        return $f;
    }

    function factorial_rec($num)
    {
        if($num < 0){ return 0; }
        if($num === 1) { return 1; }
        return $num * factorial_rec($num - 1);
    }

    //절대값만들기
    function my_abs($val)
    {
        /*
        if($val < 0)
        {
            return -$val;
        }
        return $val;
        */
        return $val < 0 ? -$val : $val;
    }
    print "my_abs(-3) : " . my_abs(-3) . "<br>";
    print "my_abs(-3) : " . my_abs(3) . "<br>";
    $num = my_abs(-3);
    $result = factorial_rec($num);
    print "${num}! = $result <br>";