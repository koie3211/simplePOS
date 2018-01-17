<?php
  require_once 'common.php';
  checkUserValidate();
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/add.css">
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <script type="text/javascript" src="js/add.js">

    </script>
    <title>新增供應商</title>
  </head>
  <body>
    <br>
    <h1>新增供應商</h1>
    <div class="add_div">
      <form class="addsupplier_form">

      <div class="form-group">
        <label for="s_name">供應商名稱</label>
        <input type="text" class="form-control" id="s_name" placeholder="Enter supplier name">
      </div>

      <div class="form-group">
        <label for="s_tel">聯絡電話</label>
        <input type="number" class="form-control" id="s_tel" placeholder="Enter tel">
      </div>

      <button type="submit" class="btn btn-primary">送出</button>
    </form>
    </div>
  </body>
</html>
