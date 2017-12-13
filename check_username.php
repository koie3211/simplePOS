<?php
  require_once('dbconfig.php');
  $user = $_POST['username'];

  $sql = "SELECT `name` FROM `user_account` WHERE `username` = '{$user}'";
  $result = mysqli_query($link,$sql);
  if(mysqli_num_rows($result)>=1){
    echo 'no';
  }else{
    echo 'yes';
  }

  ?>
