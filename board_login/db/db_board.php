<?php
    include_once "db.php";

    function ins_board(&$param)
    {
        $title = $param["title"];
        $ctnt = $param["ctnt"];
        $i_user = $param["i_user"];

        $sql = 
        "   INSERT INTO t_board
            (title, ctnt, i_user)
            VALUES
            ('$title', '$ctnt', $i_user)
        ";
        $conn = get_conn();
        $result = mysqli_query($conn, $sql);
        mysqli_close($conn);
        return $result;
    }

    function sel_board_list()
    {
        $sql = 
        "   SELECT A.i_board 
            FROM t_board as A
            INNER JOIN t_user as B
                ON A.i_user = B.i_user
        ";
        $conn = get_conn();
        $result = mysqli_query($conn, $sql);
        mysqli_close($conn);
        return $result;
    }

    function sel_listpage(&$param)
    {
        $start = $param['start'];
        $row_count = $param['row_count'];

        $sql = 
        "   SELECT A.i_board, A.title, 
            B.nm,
                DATE_FORMAT(A.create_at, '%Y-%m-%d')as create_at
            FROM t_board as A
            INNER JOIN t_user as B
                ON A.i_user = B.i_user
            ORDER BY A.i_board DESC
            LIMIT $start, $row_count
        ";
        $conn = get_conn();
        $result = mysqli_query($conn, $sql);
        mysqli_close($conn);
        return $result;
    }

    function pre_board(&$param)
    {
        $i_board = $param['i_board'];

        $sql = 
        "   SELECT i_board
            FROM t_board
            WHERE i_board < $i_board
            ORDER BY i_board DESC
            LIMIT 1
        ";
        $conn = get_conn();
        $result = mysqli_query($conn, $sql);
        mysqli_close($conn);
        return mysqli_fetch_assoc($result);
    }

    function odd_board(&$param)
    {
        $i_board = $param['i_board'];

        $sql = 
        "   SELECT i_board
            FROM t_board
            WHERE i_board > $i_board
            ORDER BY i_board
            LIMIT 1
        ";
        $conn = get_conn();
        $result = mysqli_query($conn, $sql);
        mysqli_close($conn);
        return mysqli_fetch_assoc($result);
    }


    function sel_board(&$param)
    {
        $i_board = $param['i_board'];
        
        $sql = 
        "   SELECT A.title, A.ctnt, A.i_user, A.create_at, A.update_at,
                   B.nm
            FROM t_board as A
            INNER JOIN t_user as B
                    ON A.i_user = B.i_user
            WHERE i_board = $i_board
        ";
        $conn = get_conn();
        $result = mysqli_query($conn, $sql);
        mysqli_close($conn);
        return mysqli_fetch_assoc($result);
    }

    function del_post(&$param)
    {
        $i_board = $param['i_board'];
        $i_user = $param['i_user'];

        $sql = 
        "   DELETE FROM t_board
            WHERE i_board = $i_board
            AND i_user = $i_user
        ";

        $conn = get_conn();
        $result = mysqli_query($conn, $sql);
        mysqli_close($conn);
        return $result;
    }

    function upd_board(&$param)
    {
        $i_board = $param["i_board"];
        $i_user = $param["i_user"];
        $title = $param["title"];
        $ctnt = $param["ctnt"];

        $sql =
        "   UPDATE t_board
            SET title = '$title',
            ctnt = '$ctnt',
            update_at = NOW()
            WHERE i_board = $i_board
            AND i_user = $i_user
        ";

        $conn = get_conn();
        $result = mysqli_query($conn, $sql);
        mysqli_close($conn);
        return header("location: detail.php?i_board=$i_board");
    }

    function search_board(&$param){
        $conn = get_conn();

        $search_select = $param["search_select"];
        $search_input_txt = $param["search_input_txt"];
        $textArray = explode(" ", $search_input_txt);
        $where = [];
        $sql = 
        "   SELECT A.title, A.ctnt, A.i_user, A.i_board, A.create_at, A.update_at, B.nm
            FROM t_board as A
            INNER JOIN t_user as B
                    ON A.i_user = B.i_user
            WHERE ";
        
        switch($search_select){
            case "search_writer":
                $where += ["B.nm"];
                break;
            case "search_title":
                $where += ["A.title"];
                break;
            case "search_ctnt":
                $where += ["A.title", "A.ctnt"];
                break;
        }
        for($i = 0; $i < count($textArray); $i++) {
            for($j = 0; $j < count($where); $j++) {
                $sql = $sql. " $where[$j] LIKE '%$textArray[$i]%' ";
                
                if(($i !== count($textArray)-1) || ($j !== count($where) - 1)) {
                    $sql = $sql."OR";
                }
            }
        }
        $result = mysqli_query($conn, $sql);
        mysqli_close($conn);
        return $result;
    }