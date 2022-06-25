<?php
    setcookie("country", "Korea");
    if(isset($_COOKIE['country'])){
        echo "Country : ", $_COOKIE['country'], "<br>";
    }
    //setcookie하고 바로 출력X 새로고침하면 됨
?>
<a href="cookie2.php">Next Page</a>