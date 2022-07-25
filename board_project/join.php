<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include_once "head.php"; ?>
    <title>Sign Up</title>
</head>
<body>
    <div class="container h-100">
       <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="d-flex justify-content-center align-items-center flex-column">
                <h1 class="m-0">Sign Up</h1>
                <div class="join m-2">
                    <a href="login.php" tabindex="4">Sign In</a>
                </div>
                <form action="join_pro.php" method="post" id="formInput" class="mw-200 p-2">
                    <div class="button row">
                        <input class="inputOutline" type="text" name="uid" placeholder="아이디">
                        <input class="inputOutline" type="password" name="upw" placeholder="비밀번호">
                        <input class="inputOutline" type="password" name="confirm_upw" placeholder="비밀번호 확인">
                        <input class="inputOutline" type="text" name="nm" placeholder="이름"></div>
                        <div class="d-flex justify-content-center align-items-center" ><span class="me-2">성별 : </span><label><input type="radio" name="gender" value="0" checked><span class="me-2">여자</span></label>
                                    <label><input type="radio" name="gender" value="1">남자</label>
                        </div>
                        <div class="d-flex justify-content-between mt-2">
                            <input type="reset" value="초기화">
                            <input type="submit" value="회원가입">
                        </div>
                    </div>
                </form>
            </div>
       </div>
    </div>
</body>
</html>