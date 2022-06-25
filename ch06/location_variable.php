<?php
    function make_ten()
    {
       // $i = $i + 10; // local 지역변수 : 호출 > 사용 후 소멸
        
       global $i;
       $i = 10;
    }

    $i = 0; // global 전역변수
    make_ten();
    print "i : $i <br>";
