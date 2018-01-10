<?php
  require_once 'user_service.class.php';

  $name = $_POST['name'];
  $ssd = $_POST['ssd'];
  $birth = $_POST['birth'];
  $email = $_POST['email'];
  $user = $_POST['user'];
  $pass = md5($_POST['pass']);
  $userService = new UserService();
  $b = $userService->AddUser($name,$ssd,$birth,$email,$user,$pass);
  if($b =="1"){
    echo "yes";
  }else {
    echo "no";
  }
 ?>
