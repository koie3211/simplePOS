<?php
  require_once('dbconfig.php');

  $user = $_POST['user'];
  $pass = md5($_POST['pass']);

  $sql = "SELECT * FROM `user_account` WHERE `username` = '{$user}'";
  $result = mysqli_query($link,$sql);
  if ($num = mysqli_num_rows($result)==1) {
    $rs = mysqli_fetch_assoc($result);
    if($pass == $rs['password']){
      $_SESSION['is_login'] = true;
      $_SESSION['name'] = $rs['name'];
      $_SESSION['position'] = $rs['position'];
      echo 'yes';
    }else{
      echo 'no';
    }
  }

 ?>
