<?php
    include_once "db/db_reply.php";

    $page = $_POST["page"];
    $search_txt = $_POST["search_txt"];
    
    session_start();
    if(isset($_SESSION["login_user"])){
        $login_user = $_SESSION["login_user"];
        
        $param = [
            "idx" => $_GET["idx"],
            "i_user" => $login_user["i_user"],
        ];
        
        $result = del_reply($param);
        Header("Location: detail.php?i_board={$result['i_board']}&page=$page" .($search_txt === '' ? '' : '&search_txt=$search_txt'));
    }
    else {
        echo "권한이 없습니다.<br>";
    }