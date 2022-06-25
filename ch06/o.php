<?php
    $mon = rand(0, 15);
    $season = get_season($mon);

    if($season)
    {
        print "${mon}월은 ${season}입니다.";
    }
    else{
        print "${mon}월은 잘못된 값";
    }

    function get_season($mon)
    { 
        switch($mon)
        {
            case 0:
                return "";
            case ($mon > 0 && $mon < 3 || $mon === 12):
                return "겨울";
            
            case ($mon < 6):
                return "봄";
    
            case ($mon < 9):
                return "여름";
    
            case ($mon < 12):
                return "가을";
            
            default :
                return "";
        }
    }