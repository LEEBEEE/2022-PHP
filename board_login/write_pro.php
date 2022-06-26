<?php
    include_once "db/db_board.php";
    
    $title = $_POST["title"];
    $ctnt = $_POST["ctnt"];
    
    session_start();
    if(isset($_SESSION["login_user"]))
    {
        $login_uesr = $_SESSION["login_user"];
        $i_user = $login_uesr["i_user"];
        $param = [
            "title" => $title,
            "ctnt" => $ctnt,
            "i_user" => $i_user
        ];

        $result = ins_board($param);
        header("location: list.php");
    }
    else{
        echo "권한이 없습니다.<br><br>";
        echo "<a href='list.php'>리스트로 돌아가기</a>";
    }
