<?php
    $origin = file("./exam6.txt");
    $filep = fopen("./exam6_capital.txt", "w");

    $letter = implode('', $small);
    
    fputs($filep, strtoupper($letter));
    
    fclose($filep);