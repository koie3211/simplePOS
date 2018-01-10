<?php
  require_once 'user_service.class.php';
  $user = $_POST['user'];
  $pass = md5($_POST['pass']);
  $userService = new UserService();
  $check = $userService->CheckUser($user,$pass);
  if ($check =="yes") {
    echo "yes";
  }else{
    echo "no";
  }
 ?>
