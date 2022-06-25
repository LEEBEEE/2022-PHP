<?php

    print __FILE__ . "<br>";
    print __LINE__ . "<br>";
    print __LINE__ . "<br>";
    print "PHP VERSION : " . PHP_VERSION . "<br>";
    print "OS : " . PHP_OS . "<br>";

    $GLOBALS["foo"] = 10;
    $GLOBALS["foo"] = 11;


    print "--- 글로벌 상수 --- <br>";
    foreach($GLOBALS as $key => $var)
    {
        print $key . " : " ;
        print_r($var); 
        print "<br>";
    }
    
    $arr =  array(
        "NAME" => "Oz",
        "AGE" => 15,
        "HEIGHT" => 158.7
    );
    foreach($arr as $key => $var)
    {
        print $key . " : " ;
        print_r($var); 
        print "<br>";
    }