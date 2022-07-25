<?php
    include_once "db/db_board.php";
    include_once "db/db_reply.php";

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

    <div class="container mw-960">
        <h3 class="title size-1_25rem bold"><?=$item['title']?></h3>
        <div class="button d-flex justify-content-end">
        <?php
            if(isset($_SESSION["login_user"]) &&  $i_user === $item['i_user'])
            {
               echo "<a href='edit.php?i_board=".$i_board."' tabindex='-1'><button>Modify</button></a> ";
               echo "<button onclick='isDel();'>Delete</button>";
            }
        ?>
        </div>
        <div class="nm smFont">작성자 : <?=$item['nm']?></div>
        <div class="create_at smFont">작성일시 : <?=$item['create_at']?></div>
        <div class="mod_at smFont">수정일시 : <?=$item['update_at']?></div>
        <div class="ctnt mt-3"><?=nl2br($item['ctnt'])?></div>
        <div class="button d-flex justify-content-end">
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
        </div>
        <hr>
        <div class="reply">
            <div class="reply_container">
                <?php
                    foreach($reply as $ritem){
                ?>
                    <div class="mb-3 button">                       
                        <div class="d-flex justify-content-between">
                            <span class="bold"><?=$ritem['nm']?></span>
                            <a href="re_del.php?idx=<?=$ritem['idx']?>"><button>삭제</button></a>
                        </div>
                        <div><?=$ritem['create_at']?></div>
                        <div><?=$ritem['comment']?></div>
                    </div>
                <?php } ?>
            </div>
            <?php if(isset($_SESSION["login_user"])) {?>
                <div class="d-flex align-items-center mb-1">
                <?php
                    $session_img = !empty($_SESSION['login_user']['profile_img']) ? $_SESSION['login_user']['profile_img'] : "";
                    $profile_img = $session_img === "" ? "user.png" : $_SESSION['login_user']['i_user'] . "/" . $session_img;
                    ?>
                    <div class="circular__img circular__size20 me-2">
                    <img class="circle_img" src="img/profile/<?=$profile_img?>" width="100">
                    </div>
                <?=$nm?>
                </div>
                <form action="cmt_pro.php" method="POST" id="formInput">
                    <input type="hidden" name="i_board" value="<?=$i_board?>" readonly>
                    <input type="hidden" name="i_user" value="<?=$i_user?>" readonly>
                    <textarea name="cmt" placeholder="댓글을 입력하세요."></textarea>
                    <input type="submit" value="작성하기">
                </form>
            <?php } ?>
        </div>
    </div>

    <script>
        function isDel() {
            console.log('isDel 실행 됨!');
            if(confirm('삭제하시겠습니까?')) {
                location.href = 'del.php?i_board=<?=$i_board?>';
            }
        }
    </script>
</body>
</html>