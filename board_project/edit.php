<?php
    include_once "db/db_board.php";
    $i_board = "";
    if(isset($_GET['i_board'])) {
        $i_board = $_GET['i_board'];
        $param = [
            "i_board" => $i_board
        ];
        $item = sel_board($param);
        $page = $_GET['page'];
        $search_txt = "";
        if(isset($_GET['search_txt'])){
            $search_txt = $_GET['search_txt'];
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include_once "head.php"; ?>
    <title><?= $i_board !== "" ? $item['title'] : "" ?>Edit</title>
</head>
<body>
    <?php include_once "header.php" ?>
    <div class="container d-flex justify-content-center">
        <form action="<?= $i_board !== "" ? "mod_pro.php" : "write_pro.php" ?>" method="POST">
            <?php if($i_board !== "") { ?>
                <input type="hidden" name="i_board" value="<?=$i_board?>" readonly>
                <input type="hidden" name="page" value="<?=$page?>" readonly>
                <input type="hidden" name="search_txt" value="<?=$search_txt?>" readonly>
            <?php } ?>
            <div class="button d-flex justify-content-between">
                <input type="reset" value="Reset" tabindex="4">
                <input type="submit" value="Submit" tabindex="3">
            </div>
            <div class="titlebox">
                <input type="text" name="title" placeholder="Title" value="<?= $i_board !== "" ? $item['title'] : "" ?>" tabindex="1" autofocus>
            </div>
            <div class="ctntbox">
                <textarea name="ctnt" placeholder="content" tabindex="2"><?= $i_board !== "" ? $item['ctnt'] : "" ?></textarea>
            </div>
        </form>
    </div>
</body>
</html>