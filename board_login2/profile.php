<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>프로필</title>
</head>
<body>
    <form action="profile_pro.php" method="POST" enctype="multipart/form-data">
        <div><label>이미지 : <input type="file" name="img" accept="image/*"></label></div>
        <div><input type="submit" value="이미지 업로드"></div>
    </form>
    <a href="list.php"><button>리스트로 가기</button></a>
</body>
</html>