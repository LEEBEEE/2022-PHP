<?php
    include_once "db/db_user.php";

    $uid = $_POST['uid'];
    $upw = $_POST['upw'];
    
    echo "ID : $uid<br>PASSWORD : $upw<br>";

    $param = [
        "uid" => $uid 
    ];

    $result = sel_user($param);

    if(empty($result))
    {
        echo "해당하는 아이디 없음<br>";
        echo "<a href='login.php'>로그인으로 이동</a><br>";
        echo "<a href='join.php'>회원가입으로 이동</a>";
        exit;
    }

    // echo "i_user :", $result['i_user'], "<br>";
    // echo "pw :", $result['upw'], "<br>";
    
    if($upw === $result['upw'])
    {
        session_start();
        $_SESSION["login_user"] = $result;
        header("location: list.php");
    }
    else
    {
        header("location: login.php");
    }

    //echo empty($result);

