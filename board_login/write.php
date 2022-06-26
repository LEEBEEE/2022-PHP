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
            width: 800px;
            margin: 0 auto;
        }

        .button button {
            float: right;
        }        

    </style>
    <title>Edit</title>
</head>
<body>
    <div class="wrap">
        <div class="button">
            <a href="list.php" tabindex="-1"><button tabindex="5">List</button></a>
        </div>
        <form action="write_pro.php" method="POST">
            <div class="titlebox">
                <input type="text" name="title" placeholder="Title" tabindex="1">
            </div>
            <div class="ctntbox">
                <textarea name="ctnt" placeholder="content" tabindex="2"></textarea>
            </div>
            <div class="button">
                <input type="submit" value="Submit" tabindex="3">
                <input type="reset" value="Reset" tabindex="4">
            </div>
        </form>
    </div>
</body>
</html>