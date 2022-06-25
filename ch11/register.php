<?php
    session_start();
    $_SESSION['var1'] = "v1";
    $_SESSION['var2'] = "v2";

    unset($_SESSION['var2']); // var2를 없애서

    echo $_SESSION['var1'], "<br>";
    echo $_SESSION['var2'], "<br>"; // 오류
?>

<a href="session_destroy.php">destroy</a>