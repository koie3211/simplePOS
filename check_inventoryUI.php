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
    <script type="text/javascript" src="js/check_inventory.js">

    </script>
    <title>低於安全庫存</title>
  </head>
  <body>
    <br>
    <h1>低於安全庫存</h1>
    <br>
    <div id="result" class="common_div">
      <br>
      <table class='table table-hover'>
        <thead>
          <tr>
            <th scope='col'>產品編號</th>
            <th scope='col'>產品名稱</th>
            <th scope='col'>庫存</th>
            <th scope='col'>安全庫存</th>
            <th scope='col'>產品單價</th>
          </tr>
        </thead>
        <tbody class="tbody">
        </tbody>
      </table>
    </div>
  </body>
</html>
