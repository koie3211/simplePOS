<?php
function checkUserValidate(){
  session_start();
  if (!isset($_SESSION['is_login']) || $_SESSION['is_login'] != true) {
    header('Location: login.php?err=2');
  }
}
 ?>
