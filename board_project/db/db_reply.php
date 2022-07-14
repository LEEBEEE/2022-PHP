<?php
    include_once "db.php";

    function ins_reply(&$param)
    {
        $i_board = $param['i_board'];
        $i_user = $param['i_user'];
        $cmt = $param['cmt'];

        $sql =
        "   INSERT INTO t_reply
            (i_board, i_user, comment)
            VALUES
            ('$i_board', '$i_user', '$cmt')
        ";
        $conn = get_conn();
        $result = mysqli_query($conn, $sql);
        mysqli_close($conn);
        return $result;
    }

    function sel_reply(&$param)
    {
        $i_board = $param['i_board'];

        $sql =
        "   SELECT A.idx, A.comment, A.create_at as create_at,
                   B.i_board, C.nm
            FROM t_reply as A
            INNER JOIN t_board as B
                ON A.i_board = B.i_board
            INNER JOIN t_user AS C
                ON A.i_user = C.i_user
            WHERE B.i_board = $i_board
            ORDER BY A.idx
        ";
        $conn = get_conn();
        $result = mysqli_query($conn, $sql);
        mysqli_close($conn);
        return $result;
    }

    function del_reply(&$param)
    {
        $i_sql = 
        "   SELECT i_board FROM t_reply
            WHERE idx = {$param['idx']}
        ";
        $sql =
        "   DELETE FROM t_reply
            WHERE idx = {$param['idx']}
            AND i_user = {$param['i_user']}
        ";
        $conn = get_conn();
        $board = mysqli_query($conn, $i_sql);
        $result = mysqli_query($conn, $sql);
        mysqli_close($conn);
        if($result) {
            return mysqli_fetch_assoc($board);
        }
    }