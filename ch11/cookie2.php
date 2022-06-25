<?php
    setcookie("country", "한국");
    echo "Country : ", $_COOKIE['country'], "<br>";

    $_COOKIE['country'] = "UK";
    echo "Country : ", $_COOKIE['country'], "<br>";

    //setcookie("country", "UK"); 
    // 새로고침하면 이 페이지의 모든 쿠키가 uk가 된다

    /*
    unset($_COOKIE['country']);
    setcookie("country");
    */

    echo "Country : ", $_COOKIE['country'], "<br>";
