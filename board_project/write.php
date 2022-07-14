<?php
    /*
    session_start();
    $login_user = $_SESSION['login_user'];
    // 이거 해놓으면 여기 들어오면 로그인 안 한 유저는 튕기게...
    // 다른 파일에 만들어서 임포트 하는 게 나음
    */
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include_once "head.php"; ?>
    <style>
        * {
            box-sizing: border-box; padding: 0; margin: 0;
        }

        @font-face {
            font-family: 'YUniverse-B';
            src: url('https://cdn.jsdelivr.net/gh/projectnoonnu/noonfonts_yuniverse@1.0/YUniverse-B.woff2') format('woff2');
            font-weight: normal;
            font-style: normal;
        }
        .button button, .button input {
            font-family: 'YUniverse-B';
            border: none;
            border-radius: 5px;
            border-color: rgb(150, 213, 255);
            color: #fff;
            font-size: 13px;
            padding: 5px 10px;
            cursor: pointer;
            box-shadow: 0 0 40px 40px rgb(150, 213, 255) inset, 0 0 0 0 rgb(150, 213, 255);
            transition: all 150ms ease-in-out;
        }
        .button button:hover, .button input:hover {
            box-shadow: 0 0 10px 0 rgb(150, 213, 255) inset, 0 0 10px 4px rgb(150, 213, 255);
        }

        .wrap {
            display: flex;
            /* flex-wrap: wrap; */
            width: 900px;
            margin: 20px auto;
        }

        .button a {
            text-decoration: none;
        }

        .button {
            display: inline;
            position: relative;
        }

        .button button, .button input {
            display: inline-flex;
            flex-direction: row;
        }

        .button button {
            position: absolute;
            left: 859px;
        }

        .titlebox input {
            width: 900px;
            border: none;
            border-bottom: 1px solid gray;
            margin: 20px 0 5px 0;
            height: 2.5em;
            padding: 3px;
        }

        .ctntbox textarea {
            display: flex;
            flex-wrap: wrap;
            width: 900px;
            resize: none;
            height: 80vh;
            padding: 3px;
            border: none;
            border-top: 1px solid gray;
        }

        .titlebox input:focus, .ctntbox textarea:focus {
            outline: none;
        }

    </style>
    <title>Edit</title>
</head>
<body>
    <?php include_once "header.php" ?>
    <div class="wrap">
        <div class="button">
            <a href="list.php" tabindex="-1"><button tabindex="5">List</button></a>
        </div>
        <form action="write_pro.php" method="POST">
            <div class="button">
                <input type="submit" value="Submit" tabindex="3">
                <input type="reset" value="Reset" tabindex="4">
            </div>
            <div class="titlebox">
                <input type="text" name="title" placeholder="Title" tabindex="1" autofocus>
            </div>
            <div class="ctntbox">
                <textarea name="ctnt" placeholder="content" tabindex="2"></textarea>
            </div>
        </form>
    </div>
</body>
</html>