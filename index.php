<!DOCTYPE html>
<?php
  session_start();
  if(isset($_SESSION['is_login']) && $_SESSION['is_login']==true):
?>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/index.css">
    <title>進銷存貨管理系統</title>
  </head>
  <body>
    <a href="logout.php">登出</a>
    <div class="menu">
      blr
      blr
      blr
    </div>
  </body>
</html>
<?php else: ?>
  <?php header('Location:login.php'); ?>
<?php endif; ?>
