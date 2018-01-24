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
    <script type="text/javascript" src="js/search.js">

    </script>
    <title>查詢產品</title>
  </head>
  <body>
    <br>
    <h1>查詢產品</h1>
    <div class="common_div">
      <form class="serchproduct_form">

      <div class="form-group">
        <label for="p_name">產品名稱</label>
        <input type="text" class="form-control" id="p_name" placeholder="Enter product name">
      </div>

      <button type="submit" class="btn btn-primary">送出</button>
    </form>
    </div>
    <br>
    <div id="result" class="common_div">
    </div>
  </body>
</html>
