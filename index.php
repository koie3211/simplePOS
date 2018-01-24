<?php
  require_once 'common.php';
  checkUserValidate();
  if(isset($_SESSION['is_login']) && $_SESSION['is_login']==true):
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/common.css">
    <title>進銷存貨管理系統</title>
  </head>
  <body>
    <?php include_once("menu.php") ?>
    <iframe src="welcome.php" class="main" name="view_frame">
    </iframe>
  </body>
</html>
<?php else: ?>
  <?php header('Location:login.php?err=1'); ?>
<?php endif; ?>
