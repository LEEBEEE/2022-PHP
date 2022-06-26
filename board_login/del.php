<?php
    include_once "db/db_board.php";
    $i_board = $_GET["i_board"];

    session_start();   
    if(isset($_SESSION["login_user"]))
    {
        $login_uesr = $_SESSION["login_user"];
        $i_user = $login_uesr["i_user"];
        $param = [
            "i_board" => $i_board,
            "i_user" => $i_user
        ];
    
        $result = del_post($param);
        header("location: list.php");
    }
    else {
        echo "권한이 없습니다 <br>";
        echo "<a href='detail.php?i_board=$i_board'>원래 글로 돌아가기</a>";
    }
    