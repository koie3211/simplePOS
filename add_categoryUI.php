<?php
  require_once 'common.php';
  checkUserValidate();
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/common.css">
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <script type="text/javascript" src="js/add.js">

    </script>
    <title>新增類別</title>
  </head>
  <body>
    <br>
    <h1>新增類別</h1>
    <div class="common_div">
      <form class="addcategory_form">

      <div class="form-group">
        <label for="c_name">類別名稱</label>
        <input type="text" class="form-control" id="c_name" placeholder="Enter category name">
      </div>

      <button type="submit" class="btn btn-primary">送出</button>
    </form>
    </div>
  </body>
</html>
