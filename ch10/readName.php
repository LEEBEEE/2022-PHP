<?php
    $data = file("./name.txt");

    print_r($data);

    print "<br>----------<br>";

    foreach($data as $idx => $name){
        print $idx+1 . $name . "<br>";
    }