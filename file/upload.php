<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>file</title>
</head>
<body>
    <!-- 파일 업로드 메소드는 무조건 포스트 이름은 딱히 상관 없는듯 -->
    <!-- enctype = encodingtype -->
    <form action="upload_proc.php" method="POST" enctype="multipart/form-data"> 
        <div><label>이미지 <input type="file" name="img" accept="image/*"></label></div>
        <div><input type="submit" value="업로드"></div>
    </form>
</body>
</html>