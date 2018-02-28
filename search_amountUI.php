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
    <title>庫存查詢</title>
  </head>
  <body>
    <br>
    <h1>庫存查詢</h1>
    <div class="common_div">
      <form class="serchamount_form">

      <div class="form-group">
        <label for="p_name">名稱/編號</label>
        <input type="text" class="form-control" id="p_name" placeholder="Enter product name">
      </div>

      <button type="submit" class="btn btn-primary">送出</button>
    </form>
    </div>
    <br>
    <div id="result" class="common_div">
      <br>
      <table class='table table-hover'>
        <thead>
          <tr>
            <th scope='col'>產品編號</th>
            <th scope='col'>產品名稱</th>
            <th scope='col'>產品數量</th>
            <th scope='col'>產品單價</th>
          </tr>
        </thead>
        <tbody class="tbody">
        </tbody>
      </table>
    </div>
  </body>
</html>
