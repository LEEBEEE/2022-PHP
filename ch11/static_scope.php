<?php
    function A()
    {
        global $n;
        print $n . "<br>";
    }

    function B()
    {
        $n = "B";
        A();
    }

    $n = "M";
    A();
    B();

    // 함수 안에 있는 변수는 지역변수