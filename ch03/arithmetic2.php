<?php
    // 증감연산자
    $n1 = 10.5;

    $n1++;
    print "$n1 <br>";

    ++$n1;
    print "$n1 <br>";

    print "!------------------------<br>";

    $n2 = 10;
    $sum = 10 + $n2++; // ++$n2면 ++먼저 해서 더하기 $n2++면 더하고 $n2만 ++함
    // 10 + ++$n2 은 21 10 + $n2++은 20
    print "$sum <br>";
    print "$n2 <br>";

    print "!!-----------------------<br>";

    $n3 = 10;
    $n3 = $n3 + 2; // $n3++;
    print "$n3 <br>";
    $n3 = $n3 + 2; // $n3++;
    print "$n3 <br>";

    print "!!!-----------------------<br>";

    $n4 = 10;
    $n4 += 2;
    print "$n4 <br>";

    print "!!!!-----------------------<br>";

    $oprd1 = '10';
    $oprd2 = 10;

    $result = $oprd1 == $oprd2;
    print "$oprd1 == $oprd2 : $result <br>"; // 값만 비교

    $result = $oprd1 === $oprd2;
    print "$oprd1 === $oprd2 : $result <br>"; // 타입까지 같아야함

    $result = $oprd1 != $oprd2;
    print "$oprd1 != $oprd2 : $result <br>"; // != 는 ==의 반대 !==는 ===의 반대

    $result = $oprd1 > $oprd2;
    print "$oprd1 > $oprd2 : $result <br>";
