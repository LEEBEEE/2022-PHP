<?php
    session_start();
    print $_SESSION['g'];
    $a = 10;

    echo $_SESSION['g'] , ', ' , $a; // <문자열 합칠 때 echo는 콤마로도 됨

    // session으로 로그인 하면 브라우저 종료 시 로그아웃
    // JWT JSON Web Tokens으로 만들면 자동로그인 된다 나중에 프로젝트 할 때 알아서 해보기

    // 세션으로 인증과 권한처리
