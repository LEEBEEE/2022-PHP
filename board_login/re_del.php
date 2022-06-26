<?php
    include_once "db/db_reply.php";
    
    session_start();
    if(isset($_SESSION["login_user"])){
        $login_user = $_SESSION["login_user"];
        
        $param = [
            "idx" => $_GET["idx"],
            "i_user" => $login_user["i_user"],
        ];
        
        $result = del_reply($param);
        Header("Location: detail.php?i_board={$result['i_board']}");
    }
    else {
        echo "권한이 없습니다.<br>";
    }