<?php
    $sum = 0;
    for($i=0;$i<=100;$i++)
    {
        $sum += $i;
    }
    print $sum. "<br>";
    print "<br>";

    print "(☞ﾟヮﾟ)☞ ";
    for($i=1; $i<=10; $i++)
    {
        if($i>1){print ", ";}
        print $i;
    }
    print " ☜(ﾟヮﾟ☜)<br>";
    print "<br>";

    $star = rand(1,10);
    for($i=$star;$i;$i--)
    {
        print "✨";
    }
    print "<br>";
    print "<br>";

    $score = rand(0, 10);
    switch ($score)
    {
        case $score < 3:
            print "🙄<( ${score}점 )";
            break;
        case $score < 6:
            print "😶<( ${score}점 )";
            break;
        case $score < 8:
            print "😀<( ${score}점 )";
            break;
        case $score <= 10:
            print "😊<( ${score}점 )";
            break;
        default :
            print "😵<( ${score}점 )";
            break;
    }
    print "<br>";
    print "<br>";
    
    $i=1;
    $sum=0;
    while($i<101)
    {
        $sum=$sum+$i;
        $i=$i+1;
    }
    print "1부터 100까지의 합 = $sum";
    print "<br>";
    print "<br>";
    
    $i=0;
    $value = 1;
    while(true)
    {
        $value=$value*3 ;
        $i=$i+1;
        if($value>10000)
        break;
    }
    print $i;
    print "<br>";
    print "<br>";
    
    $luck = rand(1,7);
    print "GOOD LUCK : " . $luck*$luck . "00%<br>";
    for($i=$luck;$i;$i--)
    {
        for($u=$luck;$u;$u--)
        {
            print "🍀";
        }
        print "<br>";
    }
    print "<br>";
    print "<br>";
    