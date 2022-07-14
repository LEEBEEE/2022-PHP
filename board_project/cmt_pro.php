<?php  
    $i_board = $_POST["i_board"];
    $i_user = $_POST["i_user"];
    $cmt = $_POST["cmt"];
    
    $param = [
        "i_board" => $i_board,
        "i_user" => $i_user,
        "cmt" => $cmt
    ];

    include_once "db/db_reply.php";

    if(!empty($cmt)) {
        $result = ins_reply($param);
    }

    header("location: detail.php?i_board=$i_board");