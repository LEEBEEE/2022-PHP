<?php
    include_once "db/db_user.php";
    session_start();
    define("PROFILE_PATH", "img/profile/");

    $login_user = &$_SESSION["login_user"];

    if($_FILES["img"]["name"] == "") {
        echo "이미지 없음";
        exit;
    }

    function gen_uuid_v4() {
        // printf 포맷에 맞춰 집어넣어 프린트 / sprintf 값을 리턴해줘서 2차가공이 가능
        return sprintf('%04x%04x-%04x-%04x-%04x-%04x%04x%04x'
            , mt_rand(0, 0xffff)
            , mt_rand(0, 0xffff)
            , mt_rand(0, 0xffff)
            , mt_rand(0, 0xffff) | 0x4000
            , mt_rand(0, 0xffff) | 0x8000
            , mt_rand(0, 0xffff)
            , mt_rand(0, 0xffff)
            , mt_rand(0, 0xffff)
        );
    }
    $img_name = $_FILES['img']['name'];
    $last_index = mb_strrpos($img_name, ".");
    $ext = mb_substr($img_name, $last_index); // 원본은 건드리지 않는 비파괴함수

    $target_filenm = gen_uuid_v4() .$ext;
    $target_folder = PROFILE_PATH .$login_user["i_user"];
    if(!is_dir($target_folder)) {
        // umask(0);
        mkdir($target_folder, 0777, true);
    }
    
    $tmp_img = $_FILES['img']['tmp_name'];
    $imgUpload = move_uploaded_file($tmp_img, $target_folder."/".$target_filenm);
    if($imgUpload) {
        // 이전에 등록된 프사가 있으면 삭제
        if($login_user['profile_img']) {
            $saved_img = $target_folder . "/" . $login_user['profile_img'];
            if(file_exists($saved_img)) {
                unlink($saved_img);
            }
        }

        // DB에 저장
        $param = [
            "profile_img" => $target_filenm,
            "i_user" => $login_user['i_user']
        ];
        $result = upd_profile_img($param);
        $login_user['profile_img'] = $target_filenm;
        header("location: list.php");
    }
    else {
        echo "업로드 실패!";
    }
