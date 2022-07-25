<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include_once "head.php"; ?>
    <title>Sign in</title>
</head>
<body>
    <div class="container h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="d-flex justify-content-center align-items-center flex-column">
                <h1 class="m-0">Sign In</h1>
                <form action="login_pro.php" method="POST" class="mw-200 p-2">
                    <div id="formInput" class="row">
                        <input type="text" class="inputOutline" name="uid" placeholder="ID">
                        <input type="password" class="inputOutline" name="upw" placeholder="PASSWORD">
                        <input type="submit" value="Sign In">
                    </div>
                </form>
                <span class="join"><a href="join.php" tabindex="-1">Sign Up</a></span>
            </div>
        </div>
    </div>
</body>
</html>