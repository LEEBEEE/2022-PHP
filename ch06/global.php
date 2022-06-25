<?php

    $i = 0;
    while($i < 10)
    {
        counts();
        print $i . "<br>";
    }

    function counts()
    {
        global $i;
        $i++;
    }
