<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include_once "head.php"; ?>
    <title>Profile</title>
</head>
<body>
    <?php include_once "header.php" ?>
    <form action="profile_pro.php" method="POST" enctype="multipart/form-data">
        <div><label>이미지 : <input type="file" name="img" accept="imge/*"></label></div>
        <div><input type="submit" value="적용"></div>
    </form>
</body>
</html>