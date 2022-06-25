<?php
    function swap_val($n1, $n2)
    {
        $temp = $n1;
        $n1 = $n2;
        $n2 = $temp;
    }

    function swap_ref(&$n1, &$n2)
    {
        $temp = $n1;
        $n1 = $n2;
        $n2 = $temp;
    }

    $a = 10;
    $b = 30;

    print "a : $a, b : $b <br>";
    swap_val($a, $b);
    print "a : $a, b : $b <br>";
    print "----------<br>";
    print "a : $a, b : $b <br>";
    swap_ref($a, $b);
    print "a : $a, b : $b <br>";
