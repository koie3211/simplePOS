<?php
  require_once 'user_service.class.php';
  $user = $_POST['username'];
  $userService = new UserService();
  $check = $userService->CheckUsername($user);
  if($check =="no"){
    echo "no";
  }else{
    echo "yes";
  }

  ?>
