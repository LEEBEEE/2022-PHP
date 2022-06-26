<?php
    session_start();
    $nm = "";
    if(isset($_SESSION["login_user"]))
    {
        $login_uesr = $_SESSION["login_user"];
        $nm = $login_uesr["nm"];
    }

    include_once "db/db_board.php";
    $list = sel_board_list();
    $num = mysqli_num_rows($list);

    // 여기서부터 페이지
        $page_num = 3;
        $list_row = array(5, 10, 15, 20);
        $page = isset($_GET['page'])?$_GET['page']:1;
        
        if(isset($_POST['board_list_count'])) {
            $row_count = $_POST['board_list_count'];
        }
        else{
            $row_count = $list_row[0];
        }

        $total_page = ceil($num/$row_count);
        $total_block = ceil($total_page/$page_num);
        $now_block = ceil($page/$page_num);
        $start_p = ($now_block - 1) * $page_num + 1;
        if($start_p <= 0) { $start_p= 1; }
        $end_p = $now_block * $page_num;
        if($end_p > $total_page) { $end_p = $total_page; }
        $start = ($page - 1) * $row_count;
        $cnt = $num - $start;

        $param = [
            "row_count" =>$row_count,
            "start" => $start
        ];

        $p_list = sel_listpage($param);
    
    if(isset($_POST['search_input_txt']) && $_POST['search_input_txt'] != "") {
        $param += [
            "search_select" => $_POST['search_select'],
            "search_input_txt" => $_POST['search_input_txt'],
        ];
        //DB조회 전달 후 결과 list를 받아온다.
        $p_list = search_board($param);
    }

    function select_check($row_count, $count){
        if($row_count == $count){
            return "<option value=".$count." selected>";
        }
        return "<option value=".$count.">";
    }

?>

<!DOCTYPE html>
<html lang="en">
<head> 
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="common.css">
    <title>List</title>
</head>
<body>
    <div id="container">
        <header>
        <?php
            /*
            if(!empty($nm))    or     if(isset($_SESSION["login_user"]))
            {
                echo "<div>${nm}님 환영합니다.</div>";
            }
            */
        ?>
        <?=isset($_SESSION["login_user"]) ? "<div class='welcome'>" . $nm . "님 환영합니다.</div>" : ""?>
        <div class="button">
            <?=isset($_SESSION["login_user"]) 
            ? "<a href='logout.php' tabindex='-1'><button>Logout</button></a>" 
            : "<a href='login.php' tabindex='-1'><button>Login</button></a>"?>
            <?=isset($_SESSION["login_user"]) 
            ? "<a href='write.php' tabindex='-1'><button>Edit</button></a>" 
            : "<a href='join.php' tabindex='-1'><button>Join</button></a>"?>
            <a href="list.php" tabindex="-1"><button>Main</button></a>
        </div>
        </header>
        <main>
            <div class="page-title">
                <h1>List</h1>
            </div>
            <div class="total">
                Total : <?=$num?>
            </div>
            <div class="selectbox">
                <form method="POST">
                    <select name="board_list_count" onchange="this.form.submit()">
                        <?php
                            foreach ($list_row as $count) {
                                // <option value="$list_row[$i]">$list_row[$i]."개"</option>
                                echo select_check($row_count, $count).$count."개</option>";
                            }
                        ?>
                    </select>
                </form>
            </div>
            <div class="table">
                <table class="list-table">
                    <thead>
                        <tr>
                            <th class="no_">No</th>
                            <th class="title_">Title</th>
                            <th class="nm_">Editor</th>
                            <th class="at_">Create at</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                        /*
                        while($row = mysqli_fetch_assoc($p_list))
                        {
                            $i_board = $row['i_board'];
                            $title = $row['title'];
                            $create_at = $row['create_at'];
                            $nm = $row['nm'];

                            if(strlen($title)>20)
                            {
                                $title = str_replace($row['title'], mb_substr($row['title'], 0, 20, "utf-8")."…", $row['title']);
                            }
            
                            echo "<tr>";
                            echo "<td class='no_'>${start}</td>";
                            echo "<td class='title_'><a href='detail.php?i_board=${i_board}' class='a_title'>${title}</a></td>";
                            echo "<td class='nm_'>${nm}</td>";
                            echo "<td class='at_'>${create_at}</td>";
                            echo "</tr>";
                            $start++;
                        }
                        */
                    ?>
                    <?php 
                        foreach($p_list as $item) { 
                            $title = $item['title'];
                            if(mb_strlen($item['title'], "utf-8")>20) {
                                $title = str_replace($item['title'], mb_substr($item['title'], 0, 20, "utf-8")."…", $item['title']);
                            }
                    ?>
                        <tr>
                            <td class="no_"><?=$cnt--?></td>
                            <td class="title_"><a href="detail.php?i_board=<?=$item['i_board']?>" class="a_title"><?=$title?></a></td>
                            <td class="nm_"><?=$item["nm"]?></td>
                            <td class="at_"><?=$item["create_at"]?></td>
                        </tr>
                        
                    <?php } ?>
                    </tbody>
                </table>
            </div>
            <div class="page">
                <?php
                    if($page > 1) {
                        $pre = $page-1;
                        echo "<a href='list.php?page=$pre'>◀</a>"; 
                    }
                    for($print_page = $start_p; $print_page <= $end_p; $print_page++)
                    {
                        echo "<a href='list.php?page=${print_page}'>${print_page}</a>";
                    }
                    
                    if($page < $total_page) {
                        $next = $page+1;
                        echo "<a href='list.php?page=$next'>▶</a>"; 
                        }
                ?>
            </div>
            
            <div class="searchform">
                <form action="list.php" method="POST">
                    <div class="searchselect">
                        <select name="search_select">
                            <option value="search_writer">작성자</option>
                            <option value="search_title">제목</option>
                            <option value="search_ctnt">제목+내용</option>
                        </select>
                    </div>
                    <div class="searchinput">
                        <input type="text" name="search_input_txt">
                        <input type="submit" value="검색">
                    </div>
                </form>
            </div>
        </main>
    </div>
</body>
</html>