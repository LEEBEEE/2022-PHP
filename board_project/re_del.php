<?php
    include_once "db/db_reply.php";

    $page = $_GET["page"];
    $search_txt = '';
    $i_board =$_GET['i_board'];
    if(isset($_GET["search_txt"])) {
        $search_txt = $_GET["search_txt"];
    }
    
    session_start();
    if(isset($_SESSION["login_user"])) {
        $param = [
            "idx" => $_GET["idx"],
            "i_user" => $_GET["i_user"],
        ];
        
        $result = del_reply($param);
        header("location: detail.php?i_board=$i_board&page=$page".($search_txt === '' ? '' : '&search_txt='.$search_txt));
    } else {
        echo "권한이 없습니다.<br><br>";
        echo "<a href='detail.php?i_board=".$i_board."&page=".$page($search_txt === '' ? '' : '&search_txt='.$search_txt)."'>이전으로 돌아가기</a>";
    }