<?php
    if(isset($name)){
        print "name is ok!!";
    }
    
    $name = "Alice";
    if(isset($name)){
        print "name is good!! <br>";
    }

    print $name . "<br>";

    unset($name);
    print "unset(\$name):" . $name . "<br>"; // unset되면 Warning:undefined

    print "The End";