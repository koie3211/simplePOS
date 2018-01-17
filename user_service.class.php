<?php
  session_start();
  require_once 'dbconfig.php';

  class UserService{

    //登入驗證
    function CheckUser($user,$pass){
      $dbconfig = new dbconfig();
      $sql = "SELECT * FROM `user_account` WHERE `username` = '{$user}'";
      $arr = $dbconfig->excute_dql($sql);
      $dbconfig->close();
      if($pass == $arr[0]['password']){
        $_SESSION['is_login'] = true;
        $_SESSION['name'] = $arr[0]['name'];
        $_SESSION['position'] = $arr[0]['position'];
        return "yes";
      }else{
        return "no";
      }
    }

    //檢查帳號是否重複
    function CheckUsername($user){
      $dbconfig = new dbconfig();
      $sql = "SELECT `name` FROM `user_account` WHERE `username` = '{$user}'";
      $arr = $dbconfig->excute_dql($sql);
      $dbconfig->close();
      if (count($arr[0])>=1) {
        return "no";
      }else {
        return "yes";
      }
    }

    //新增帳戶
    function AddUser($name,$ssd,$birth,$email,$user,$pass){
      $dbconfig = new dbconfig();
      $sql = "INSERT INTO `user_account`(`name`, `ssd`, `birthday`, `email`, `username`, `password`, `position`)
                                 VALUES ('{$name}','{$ssd}','{$birth}','{$email}','{$user}','{$pass}',0)";
      $b = $dbconfig->excute_dml($sql);
      $dbconfig->close();
      return $b;
    }
  }
 ?>
