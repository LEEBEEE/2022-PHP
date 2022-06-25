<?php
    session_start();
    session_destroy();
    echo $_SESSION['var1'], "<br>";
    echo $_SESSION['var2'], "<br>";
?>

<a href="confirm.php">확인</a>

<!-- unset은 바로 사라지고 destroy는 실행했을 땐 살아있다가 새로고침 하면 파괴 -->
