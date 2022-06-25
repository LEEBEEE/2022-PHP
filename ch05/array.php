<?php
    $week = array("일", "월", "화", "수", "목", "금", "토");

    print $week[0] . "<br>";
    print $week[3] . "<br>";

    $week[3] = "wed";
    print $week[3] . "<br>";

    $week[7] = "??";
    print $week[7] . "<br>";

    $week[9] = "ouo";
    print $week[8] . "<br>";
    print $week[9] . "<br>";
    print $week[11] . "<br>";
    print count($week) . "<br>";

    print "test <br>";
    
    $test = array("A", "B");
    print count($test) . "<br>";

    // $test[10] = "C";
    array_push($test, "C", "D"); // 배열 끝에 추가함 

    print "count(\$test) : " . count($test) . "<br>";

    print "test[2] : " . $test[2] . "<br>";
    print "test[3] : " . $test[3] . "<br>";

    print "----- <br>";
    $test2 = array(1, 3.44, "안녕");
    print $test2[0] ;
    print $test2[1] ;
    print $test2[2] ;
    // 여러 타입을 섞어 써도 나오긴 하지만 웬만해서는 array에 타입 섞어 쓰지 말 것