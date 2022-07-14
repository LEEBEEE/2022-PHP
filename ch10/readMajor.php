<?php
    $data = file("./major.txt");

    print_r($data);

    print "<br>----------<br>";

    foreach($data as $line){
        // print $line. "<br>";
        $div = explode(" ", $line);

        print "Name : {$div[0]}, Major : {$div[1]} <br>";
    }