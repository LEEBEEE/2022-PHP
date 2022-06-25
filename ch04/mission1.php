<?php
    
    $score = rand(0,120);
    print "점수 : $score <br>";

    switch($score)
    {           
        case 0 :
            print "F";
            break;
        case $score > 100 :
            print "잘못된 값";
            break;
        case 100 :
            print "A+";
            break;
        case $score >= 90 :
            print "A";
            if($score%10 >= 7)
            {
                print "+";
            }
            if($score%10 <= 3)
            {
                print "-";
            }
            break;
        case $score >= 80 :
            print "B";
            if($score%10 >= 7)
            {
                print "+";
            }
            if($score%10 <= 3)
            {
                print "-";
            }
            break;
        case $score >= 70 :
            print "C";
            if($score%10 >= 7)
            {
                print "+";
            }
            if($score%10 <= 3)
            {
                print "-";
            }
            break;
        case $score >= 60 :
            print "D";
            if($score%10 >= 7)
            {
                print "+";
            }
            if($score%10 <= 3)
            {
                print "-";
            }
            break;
        case $score < 60 :
            print "F";
            break;
        case $score < 0 :
            print "잘못된 값";
            break;
    }
