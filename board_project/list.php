<?php
    include_once "db/db_board.php";
    
    // 여기서부터 페이지
    $list_row = array(5, 10, 15, 20);
    $search_txt = isset($_GET['search_txt'])?$_GET['search_txt']:"";
    $page = isset($_GET['page'])?intval($_GET['page']):1;
    $page_num = 5;
    $row_count = 10;
    
    $param = [
        "search_txt" => $search_txt,
    ];
    
    $num = sel_list_count($param);
 
    $total_page = ceil($num/$row_count);
    $total_block = ceil($total_page/$page_num);
    $now_block = ceil($page/$page_num);
    $start_p = ($now_block - 1) * $page_num + 1;
    if($start_p <= 0) { $start_p= 1; }
    $end_p = $now_block * $page_num;
    if($end_p > $total_page) { $end_p = $total_page; }
    $start = ($page - 1) * $row_count;
    $cnt = $num - $start;

    $param["row_count"] = $row_count; 
    $param["start"] = $start; 


    $p_list = sel_listpage($param);

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
    <?php include_once "head.php"; ?>
    <title>List</title>
</head>
<body>
    <?php include_once "header.php"; ?>
    <main>
        <div class="container text-center">
            <div class="">
                <h1>List</h1>
            </div>
            <div class="mb-3">
                Total : <?=$num?>
            </div>
            <div class="d-flex justify-content-center">
                <table class="table table-sm table-hover border-light mw-960">
                    <thead class="table-primary">
                        <tr>
                            <th class="col-1">No.</th>
                            <th class="col-8">Title.</th>
                            <th class="col-1">Editor.</th>
                            <th class="col-2">Date.</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php 
                        foreach($p_list as $item) { 
                            $title = $item['title'];
                            if(mb_strlen($item['title'], "utf-8")>20) {
                                $title = str_replace($item['title'], mb_substr($item['title'], 0, 20, "utf-8")."…", $item['title']);
                            }
                    ?>
                        <tr>
                            <td><?=$cnt--?></td>
                            <td><a href="detail.php?i_board=<?=$item['i_board']?>&page=<?=$page?><?= ($search_txt === "" ? "" : "&search_txt=".$search_txt)?>" class="text-dark hover-light"><?=str_replace($search_txt, "<mark>{$search_txt}</mark>", $title)?></a></td>
                            <td><?=$item["nm"]?></td>
                            <td><?=$item["create_at"]?></td>
                        </tr>
                        
                    <?php } ?>
                    </tbody>
                </table>
            </div>
            <div class="m-3">
                <?php
                    if($page > 1) {
                        $pre = $page-1;
                        echo "<a href='list.php?page=$pre". ($search_txt === '' ? '' : '&search_txt='.$search_txt) ."' class='pe-2 text-dark hover-light'>◀</a>"; 
                    }
                    for($print_page = $start_p; $print_page <= $end_p; $print_page++)
                    {
                        echo "<a href='list.php?page=${print_page}". ($search_txt === '' ? '' : '&search_txt='.$search_txt) ."' class='pe-2 hover-light ".($page == $print_page ? 'pageSelected' : 'text-dark')."'>${print_page}</a>";
                    }
                    
                    if($page < $total_page) {
                        $next = $page+1;
                        echo "<a href='list.php?page=$next". ($search_txt === '' ? '' : '&search_txt='.$search_txt) ."' class='text-dark hover-light'>▶</a>"; 
                        }
                ?>
            </div>
            
            <div class="button d-inline-flex align-items-center">
                <form action="list.php" method="get">
                    <div class="d-flex">
                        <input class="align-items-center inputOutline" type="search" name="search_txt" value="<?=$search_txt?>">
                        <input type="submit" value="검색">
                    </div>
                </form>
            </div>
        </div>
    </main>
</body>
</html>