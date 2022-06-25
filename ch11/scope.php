<?php

    // 인생은 B와 D사이의 chicken... 왜 치킨이야 지금 cookie 할거면 쿠키지

    function A()
    {
        global $n;
        $n = "A";
        $m = "A";
        print "2 : aa${n}aa, $m<br>"; // 자바스크립트는 {$이거 안댐}  여기에${익숙해지도록 하자}
    }
    

    $n = "M";
    $m = "M";

    print "1 : $n, $m<br>";

    A();

    print "3 : $n, $m<br>";

//    이런데다가 뭐 흘리지 마세용