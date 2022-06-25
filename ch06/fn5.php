<?php
    $snum = 4;
    $enum = 10;
    print_num_from_to($snum, $enum);

    function print_num_from_to($snum, $enum)
    {
        if($snum > $enum)
        {
            print "종료값이 더 작을 수 없습니다.";
            return;
        }
        
        print "[";
        for($i = $snum; $i <= $enum; $i++)
        {
            print $i;
            if($i !== $enum)
            {
                print ", ";
            }
        }
        print "]";
    }