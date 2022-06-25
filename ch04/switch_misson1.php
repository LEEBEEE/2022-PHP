<?php
 //범위 지정이 안된다는 가정하에 swith 미션
 // swich 문으로 해결
 // $mon 값이 3~5 사이면 "봄"이 출력
 // $mon 값이 6~8 사이면 "여름"이 출력
 // $mon 값이 9~11 사이면 "가을"이 출력
 // $mon 값이 12,1,2면 "겨울"이 출력
 // $mon 다른 값이면 "계절 없음" 출력

    $mon = rand(1, 12);

    switch($mon) {
        case 12: case 1: case 2:
            print "${mon}월은 겨울";
            break;

        case 3: case 4: case 5:
            print "${mon}월은 봄";
            break;

        case 6: case 7: case 8:
            print "${mon}월은 여름";
            break;

        case 9: case 10: case 211:
            print "${mon}월은 가을";
            break;

        default:
            print "계절 없음";
            break;
    }

    if($mon == 12 || $mon == 1 || $mon == 2 ) {
        print "겨울";
    }
    else if($mon == 3 || $mon == 4 || $mon == 5) {
        print "봄";
    }
    else if($mon == 6 || $mon == 7 || $mon == 8) {
        print "여름";
    }
    else if($mon == 9 || $mon == 10 || $mon == 11) {
        print "가을";
    }
    else {
        print "계절 없음";
    }