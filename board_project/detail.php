<?php
    include_once "db/db_board.php";
    include_once "db/db_reply.php";
    session_start();
    if(isset($_SESSION["login_user"]))
    {
        $login_uesr = $_SESSION["login_user"];
        $i_user = $login_uesr["i_user"];
        $nm = $login_uesr["nm"];
    }
    $i_board = $_GET['i_board'];
    $page = $_GET['page'];
    $search_txt = "";
    if(isset($_GET['search_txt'])){
        $search_txt = $_GET['search_txt'];
    }
    $param = [
        "search_txt" => $search_txt,
        "i_board" => $i_board
    ];
    
    $item = sel_board($param);
    
    $pre = pre_board($param);
    $odd = odd_board($param);

    $reply = sel_reply($param);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include_once "head.php"; ?>
    <title><?=$item['title']?></title>
</head>
<body>
    <?php include_once "header.php" ?>
    <h3 class="title"><?=$item['title']?></h3>
    <div class="nm">작성자 : <?=$item['nm']?></div>
    <div class="create_at">작성일시 : <?=$item['create_at']?></div>
    <div class="mod_at">수정일시 : <?=$item['update_at']?></div>
    <?php
        if(isset($_SESSION["login_user"]) &&  $i_user === $item['i_user'])
        {
           echo "<a href='mod.php?i_board=".$i_board."' tabindex='-1'><button>Modify</button></a> ";
           echo "<button onclick='isDel();'>Delete</button>";
        }
    ?>
    <div class="ctnt"><?=nl2br($item['ctnt'])?></div>
    <a href="list.php?page=<?=$page?><?= ($search_txt !== "" ? "&search_txt=".$search_txt : "")?>" tabindex="-1"><button>List</button></a>
    <div class="link">
        <?php 
            if(isset($pre['i_board'])) {
        ?>
            <a href="detail.php?i_board=<?=$pre['i_board']?>&page=<?=$page?><?= ($search_txt !== "" ? "&search_txt=".$search_txt : "")?>"><button>◀</button></a>
        <?php
            }
        ?>
        <?php 
            if(isset($odd['i_board'])) {
        ?>
            <a href="detail.php?i_board=<?=$odd['i_board']?>&page=<?=$page?><?= ($search_txt !== "" ? "&search_txt=".$search_txt : "")?>"><button>▶</button></a>
        <?php
            }
        ?>
    </div>
    <hr>
    <div class="reply">
        <div class="reply_container">
            <?php
                foreach($reply as $ritem){
            ?>
                <div><?=$ritem['nm']?></div>
                <a href="re_del.php?idx=<?=$ritem['idx']?>"><button>삭제</button></a>
                <div><?=$ritem['create_at']?></div>
                <div><?=$ritem['comment']?></div>
                <br>
            <?php } ?>
        </div>
        <?php if(isset($_SESSION["login_user"])) {?>
        <form action="cmt_pro.php" method="POST">
            <input type="hidden" name="i_board" value="<?=$i_board?>" readonly>
            <input type="hidden" name="i_user" value="<?=$i_user?>" readonly>
            <div><?=$nm?></div>
            <div><input type="text" name="cmt" placeholder="댓글을 입력하세요."></div>
            <div><input type="submit" value="작성하기"></div>
        </form>
        <?php } ?>
    </div>

    <script>
        function isDel() {
            console.log('isDel 실행 됨!');
            if(confirm('삭제하시겠습니까?')) {
                location.href = 'del.php?i_board=<?=$i_board?>';
            }
        }
        // 확인 누르면 true를 리턴하고 취소 누르면 false를 리턴
    </script>
    <!-- 외부에 파일을 만들어서 임포트해서 사용하면 유지관리가 쉬움 -->
</body>
</html>