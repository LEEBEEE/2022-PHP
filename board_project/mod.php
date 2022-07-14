<?php
    include_once "db/db_board.php";
    $i_board = $_GET['i_board'];
    $param = [
        "i_board" => $i_board
    ];
    $item = sel_board($param);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include_once "head.php"; ?>
    <title><?=$item['title']?> Modify</title>
</head>
<body>
    <?php include_once "header.php" ?>
    <div class="button">
        <a href="list.php" tabindex="-1"><button tabindex="5">List</button></a>
    </div>
    <form action="mod_pro.php" method="POST">
        <input type="hidden" name="i_board" value="<?=$i_board?>" readonly>
        <div class="titlebox">
            <input type="text" name="title" placeholder="Title" tabindex="1" value="<?=$item['title']?>">
        </div>
        <div class="ctntbox">
            <textarea name="ctnt" placeholder="content" tabindex="2"><?=$item['ctnt']?></textarea>
        </div>
        <div class="button">
            <input type="submit" value="Submit" tabindex="3">
            <input type="reset" value="Reset" tabindex="4">
        </div>
    </form>
</body>
</html>