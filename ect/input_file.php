<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        .filebox .upload-name {
            display: inline-block;
            height: 40px;
            padding: 0 10px;
            vertical-align: middle;
            border: 1px solid #dddddd;
            width: 78%;
            color: #999999;
        }

        .filebox label {
            display: inline-block;
            padding: 10px 20px;
            color: #fff;
            vertical-align: middle;
            background-color: #999999;
            cursor: pointer;
            height: 40px;
            margin-left: 10px;
        }
        .filebox input[type="file"] {
            position: absolute;
            width: 0;
            height: 0;
            padding: 0;
            overflow: hidden;
            border: 0;
        }
    </style>
    <title>Document</title>
</head>
<body>
    <div class="filebox">
        <input class="upload-name" value="첨부파일" placeholder="첨부파일">
        <label for="file">파일찾기</label> 
        <input type="file" id="file">
    </div>
    <script>
        let file = document.querySelector('#file');
        let uploadName = document.querySelector('.upload-name');

        file.onchange = function(){
            let fileName = file.value;
            uploadName.value = fileName;
        }
    </script>
</body>
</html>