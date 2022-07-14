<?php
    $filep = fopen("./logfile.txt", "a");
    if(!$filep) { die("파일을 열 수 없습니다."); }

    $now = date("Y-m-d H:i:s", time());
    fputs($filep, $now."\r");
    fclose($filep);

    print "Connect Service";