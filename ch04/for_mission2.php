<?php
    $dan = rand(2,9);

    echo $dan. "단 <br>";

    for($i=1; $i <= 9; $i++)
    {
        print $dan . "×" . $i . "=". $dan*$i . "<br>";

    }
