<?php
    $star = rand(3,10);
    print "star = $star <br>";
    
    // $sum="@";
    // $sum2 = ""; 
    // for($z=1; $z<=$star; $z++) {
    //     $sum2 = $sum . $sum2;
        
    //     print "$sum2 <br>";
    // }
    

    $sum = '';
    for ($z=1;$z <= $star; $z++) {
        $sum = $sum."@";
        print "{$sum}<br>";
    }


