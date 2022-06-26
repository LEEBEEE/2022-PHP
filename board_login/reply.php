<?php
   $i_board = $_POST['i_board'];
   $i_user = $_POST['i_user'];
   $reply = $_POST['reply'];

   $param = [
      "reply" => $reply,
      "i_board" => $i_board,
      "i_user" => $i_user
   ];

   include_once "db/db_reply.php";
   if(!empty($reply)){
      $result = ins_reply($param);
   }
   else {
      echo "빈 댓글은 등록할 수 없습니다.<br>";
      echo "<a href='detail.php?i_board=$i_board'>글로 돌아가기</a>";
      exit;
   }

   header("location: detail.php?i_board=$i_board");