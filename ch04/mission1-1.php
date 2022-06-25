<?php
    
    $score = 0;
    print "점수 : $score <br>";

    switch($score)
    {   case 0 :
            print "F";
            break;
        case ($score > 100 || $score < 0):
            print "잘못된 값";
            break;        
        case $score < 60 :
            print "F";
            break;
        case $score >= 90 :
            print "A";
            break;
        case $score >= 80 :
            print "B";
            break;
        case $score >= 70 :
            print "C";
            break;
        case $score >= 60 :
            print "D";
            break;

    }
    if($score%10 >= 7 && $score > 60 || $score === 100)
    {
        print "+";
    }
    else if($score%10 <= 3 && $score >= 60 && $score <100)
    {
        print "-";
    }