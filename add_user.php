<?php
  require_once('dbconfig.php');

  $name = $_POST['name'];
  $ssd = $_POST['ssd'];
  $birth = $_POST['birth'];
  $email = $_POST['email'];
  $user = $_POST['user'];
  $pass = md5($_POST['pass']);

  $sql = "INSERT INTO `user_account`(`name`, `ssd`, `birthday`, `email`, `username`, `password`, `position`)
                             VALUES ('{$name}','{$ssd}','{$birth}','{$email}','{$user}','{$pass}',0)";
  $result = mysqli_query($_SESSION['link'],$sql);
  if($result){
    echo 'yes';
  }else {
    echo 'no';
  }
 ?>
