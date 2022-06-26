<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JOIN</title>
</head>
<body>
    <h1>JOIN</h1>
    <a href="login.php" tabindex="-1"><button>Login</button></a>
    <form action="join_pro.php" method="post">
        <div><input type="text" name="uid" placeholder="아이디"></div>
        <div><input type="password" name="upw" placeholder="비밀번호"></div>
        <div><input type="password" name="confirm_upw" placeholder="비밀번호 확인"></div>
        <div><input type="text" name="nm" placeholder="이름"></div>
        <div>성별 : <label><input type="radio" name="gender" value="0" checked>여자</label>
                    <label><input type="radio" name="gender" value="1">남자</label>
        </div>
        <div>
            <input type="submit" value="회원가입">
            <input type="reset" value="초기화">
        </div>
    </form>
</body>
</html>