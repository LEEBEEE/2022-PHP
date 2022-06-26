<?php
        //$_FILES에 담긴 배열 정보구하기 (개발단계에서만 사용)
        var_dump($_FILES);

        // 임시로 저장된 정보(tmp_name)
    $tempFile = $_FILES['img']['tmp_name'];

    // 파일타입 및 확장자 체크
    $fileTypeExt = explode("/", $_FILES['img']['type']);

    // 파일타입
    $fileType = $fileTypeExt[0]; // image

    // 파일 확장자
    $fileExt = $fileTypeExt[1]; // jpg, png 등

    // 확장자 검사
    $extStatus = false;

    switch($fileExt) {
        case 'jpeg':
        case 'jpg':
        case 'gif':
        case 'bmp':
        case 'png':
            $extStatus = true;
            break;

        default :
            echo "이미지 전용 확장자(jpg, png, gif, bmp) 외에는 사용이 불가합니다.";
            exit;
            break;
    }

    if($fileType == 'image') {
        if($extStatus) {
            $res_path = "../img";
            if(!is_dir($res_path)) {
                mkdir($res_path, 0777, true); // mAkEdirECTORY
            }
            // 임시 파일을 옮길 디렉토리 및 파일명
            $resFile = $res_path . "/{$_FILES['img']['name']}"; // 문자열 안에서 {$이케 쓰면 배열도 쓸 수 있음} ${다른 언어에서나 이렇게 쓰지...}
            // 임시 저장된 파일을 우리가 저장할 디렉토리 및 파일명으로 옮김
            $imageUload = move_uploaded_file($tempFile, $resFile);

            // 업로드 성공 여부 확인
            if($imageUload == true) {
                echo "파일이 정상적으로 업로드 되었습니다. <br>";
                echo "<img src='{$resFile}' width='100'>";
            } else {
                echo "파일 업로드에 실패했습니다.";
            }
        }
        else {
            echo "파일 확장자가 jpg, png, gif, bmp여야 합니다.";
            exit;
        }
    }
    else {
        echo "이미지 파일이 아닙니다.";
    }