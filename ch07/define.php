<?php
    define("NAME", "Hong Gildong");
    define("NAME2", "Jang Bogo");
    define("STAND_AGE", 25);
    // 상수 const  vs 리터럴 literal
    // 상수는 한 번 값이 입력되면 값을 변경할 수 없다
    // 상수는 변수명을 대문자로 쓴다

    print NAME . "<br>";
    print NAME2 . "<br>";
    print STAND_AGE . "<br>";

    function fn1()
    {
        print "fn1 : " . NAME . "<br>";
    }
    
    fn1();