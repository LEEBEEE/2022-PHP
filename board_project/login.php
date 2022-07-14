<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        .header {
            display: flex;
            justify-content: center;            
        }
        .form {
            display: flex;
            justify-content: center;
        }
        .btn {
            display: flex;
            justify-content: center;
        }
        .join {
            display: flex;
            justify-content: center;
        }
    </style>
    <?php include_once "head.php"; ?>
    <title>Login</title>
</head>
<body>
    <div class="wrap">
        <div class="header"><h1>LOGIN</h1></div>
        <div class="container">
            <div class="form">
                <form action="login_pro.php" method="POST">
                    <div class="id"><input type="text" name="uid" placeholder="ID"></div>
                    <div class="pw"><input type="password" name="upw" placeholder="PASSWORD"></div>
                    <div class="btn"><input type="submit" value="Login"></div>
                </form>
            </div>
            <div class="join">
                <a href="join.php" tabindex="-1"><button>JOIN</button></a>
            </div>
        </div>
    </div>
</body>
</html>