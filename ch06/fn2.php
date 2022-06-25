<?php
    $num = rand(1, 10);

    print_odd_even($num);

    function print_odd_even($no)
    {
        print "숫자 ${no}은(는) " . ($no % 2 === 0 ? "짝" : "홀") . "수입니다.";

    }
