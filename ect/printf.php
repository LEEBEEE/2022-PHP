<?php
    $name = "홍길동";
    $age = 22;
    $height = 178.34;
    $blood_type = 'O';

    $str = sprintf("제 이름은 %s입니다. 나이는 %d세이고, 키는 %.1fcm입니다. 혈액형은 %s입니다."
    , $name, $age, $height, $blood_type);

    // printf 형식화된 문자열 print / sprintf 는 return
    // %s 문자열 %d 정수 %f 실수 %.숫자f 는 소수점 몇자리까지 표시

    print $str;