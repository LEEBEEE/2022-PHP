<?php
    // && : true 만들기 힘듦. false 만들기가 쉬움.
    // || : false 만들기가 힘듦. true 만들기가 쉬움.

    $name = 1 ;
    if(1 && 1 && 1 && 2 && 'a' && $name)
    {
        print "나는 진실이다. <br>";
    }
    // 하나라도 false일 시 false
    // 0과 공백만 false 음수, 양수, 문자열 상관없이 값만 있으면 true

    if(0 || 0 || 0 || 0)
    {
        print "I'm true";
    }
    // 모두 false여야 false
