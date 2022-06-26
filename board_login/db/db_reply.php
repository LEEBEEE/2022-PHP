<?php
   include_once "db.php";

   function ins_reply(&$param){
      $i_board = $param['i_board'];
      $i_user = $param['i_user'];
      $reply = $param['reply'];

      $sql = 
      "  INSERT INTO t_reply
         (reply, i_board, i_user)
         VALUES
         ('$reply', '$i_board', '$i_user')
      ";
      $conn = get_conn();
      $result = mysqli_query($conn, $sql);
      mysqli_close($conn);
      return $result;
   }