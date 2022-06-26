<?php
    include_once "db/db.php";

    $conn = get_conn();

    $YY = date('Y'); // year
    $MM = date('m'); // month
    $DD = date('d'); // day
    $dat = $YY ."-". $MM ."-". $DD;
    $sql = "SELECT * FROM t_visit WHERE redate = '$dat'";
    $result = mysqli_query($conn, $sql);

    $list = mysqli_num_rows($result);
    if(!$list) {
        $count = 0;
    }
    else {
        $row = mysqli_fetch_assoc($result);
        $count = $row['count'];
    }

    if($count === 0) {
        $count++;
        $sql = 
        " INSERT INTO t_visit
        VALUES ($count, '$dat')
        ";
    }
    else{
        $count++;
        $sql = 
        " UPDATE t_visit
        SET count = $count
        WHERE redate = '$dat'
        ";
    }
    mysqli_query($conn, $sql);

    $total_sql = " SELECT SUM(count) FROM t_visit";
    $total_count = mysqli_fetch_array(mysqli_query($conn, $total_sql))[0];
    mysqli_close($conn);


    echo "<br><center><h2>방문자 수 통계입니다.</h2><hr>";
    echo "[ 오늘 : <font color = red>";
    echo "${count}명";
    echo "</font>] <br>";
    echo "[ Total : <font color = blue>";
    echo "${total_count}명";
    echo "</font>] <br>";
