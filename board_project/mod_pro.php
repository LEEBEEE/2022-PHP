<?php
    include_once "db/db_board.php";
    $i_board = $_POST["i_board"];
    $page = $_POST["page"];
    $search_txt = $_POST["search_txt"];

    session_start();
    if(isset($_SESSION["login_user"]))
    {
        $login_uesr = $_SESSION["login_user"];
        $i_user = $login_uesr["i_user"];
        $param = [
            "i_board" => $i_board,
            "i_user" => $i_user,
            "title" => $_POST["title"],
            "ctnt" => $_POST["ctnt"]
        ];
        $result = upd_board($param);
        header("location: detail.php?i_board=$i_board&page=$page".($search_txt === '' ? '' : '&search_txt='.$search_txt));
    }
    else {
        echo "권한이 없습니다 <br>";
        echo "<a href='detail.php?i_board=$i_board'>원래 글로 돌아가기</a>";
    }

