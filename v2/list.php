<?php
    include_once "db/db_board.php";

    session_start();
    $nm = "";
    if(isset($_SESSION["login_user"])) {
        $login_user = $_SESSION["login_user"];
        $nm = $login_user["nm"];
    }

    $page = 1;
    if(isset($_GET['page'])){
        $page = intval($_GET['page']);
    }
    $search_txt = "";
    if(isset($_GET['search_txt'])){
        $search_txt = $_GET['search_txt'];
    }
    
    $row_count = 10;
    $param = [
        "start_idx" => ($page-1)*$row_count,
        "row_count" => $row_count,
        "search_txt" => $search_txt,
    ];
    $paging_count = sel_paging_count($param);
    $list = sel_board_list($param);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="common.css">
    <title>리스트</title>
</head>
<body>
    <div id="container">
        <header>
            <?=isset($_SESSION["login_user"]) ? "<div>". $nm . "님 환영합니다.</div>" : "" ?>
            <div class="linkbtn">
                <a href="list.php">리스트</a>
                <?php if(isset($_SESSION["login_user"])) { ?>
                    <a href="write.php">글쓰기</a>
                    <a class="logout" href="logout.php">로그아웃</a>
                <?php } else { ?>
                    <a href="login.php">로그인</a>
                <?php } ?>                
            </div>
        </header>
        <main>
            <h1>리스트</h1>
            <div>
                <form action="list.php" method="get">
                    <div>
                        <input type="search" name="search_txt" value="<?=$search_txt?>">
                        <input type="submit" value="검색">
                    </div>
                </form>
            </div>
            <table>
                <thead>
                    <tr>
                        <th>글번호</th>
                        <th>제목</th>
                        <th>글쓴이</th>
                        <th>등록일시</th>
                    </tr>
                </thead>
                <tbody>                    
                    <?php foreach($list as $item) { ?>
                        <tr>
                            <td><?=$item["i_board"]?></td>
                            <td><a href="detail.php?i_board=<?=$item["i_board"]?>&page=<?=$page?><?= ($search_txt === "" ? "" : "&search_txt=".$search_txt)?>"><?=str_replace($search_txt, "<mark>{$search_txt}</mark>", $item['title'])?></a></td>
                            <td><?=$item["nm"]?></td>
                            <td><?=$item["create_at"]?></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
            <div>
                <?php
                    for($i=1; $i<=$paging_count; $i++)
                    {
                        echo "<span class='".($i==$page ? 'selected_page' : '')."' ><a href='list.php?page={$i}".($search_txt === "" ? "" : "&search_txt=".$search_txt)."'>$i</a></span>";
                    }
                ?>
            </div>
        </main>
    </div>
</body>
</html>