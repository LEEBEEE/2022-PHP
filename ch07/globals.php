<?php
    $x = 10;
    $d = 59;
    $c = 23;
    $v = 96;

    foreach($GLOBALS as $key => $var)
    {
        print $key . " : " ;
        print_r($var); 
        print "<br>";
    }