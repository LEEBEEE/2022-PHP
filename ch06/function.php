<?php
    //객체 안에 함수가 있으면 method라고 부른다

    //객체 안이 아니라면 function(함수)라고 부른다.
    //함수 function

    function sum($n1, $n2)
    {
        return $n1 + $n2;
    }

    $result = sum(10, 20);

    print "result : $result <br>";
    print "result : " . sum(30,40) . "<br>";

    minus(35, 12);
    minus(10, 2);

    function minus($n1, $n2)
    {
        print "minus : " . ($n1 - $n2) . "<br>";
        return; // 자동으로 들어가서 생략 가능 
    }