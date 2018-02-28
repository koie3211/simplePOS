<?php
  require_once 'common.php';
  checkUserValidate();
  $_SESSION['Sales'] = "";
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/common.css">
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <script type="text/javascript" src="js/sales.js">

    </script>
    <title>銷售商品</title>
  </head>
  <body>
    <br>
    <h1>銷售商品</h1>
    <div class="common_div">
      <form class="sales_form">
        <table class="table table-hover">
          <thead>
            <tr>
              <th scope="col">產品編號</th>
              <th scope="col">產品名稱</th>
              <th scope="col">產品單價</th>
              <th scope="col">產品數量</th>
              <th scope="col">小計</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td><input type="text" class="form-control" id="p_id"></td>
              <td><input type="text" class="form-control" id="p_name" disabled></td>
              <td><input type="text" class="form-control" id="price" disabled></td>
              <td><input type="text" class="form-control" id="amount"></td>
              <td><input type="text" class="form-control" id="subtotal" disabled></td>
            </tr>
          </tbody>
        </table>
      <button type="submit" class="btn btn-primary">輸入</button>
    </form>
    </div>
    <br>
    <div id="result" class="common_div">
      <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col">產品編號</th>
            <th scope="col">產品名稱</th>
            <th scope="col">產品單價</th>
            <th scope="col">產品數量</th>
            <th scope="col">小計</th>
            <th scope="col"></th>
          </tr>
        </thead>
        <tbody class="tbody">
        </tbody>
      </table>
      <br>
      <div class="common_div">
        <table align="right">
          <tr>
            <td></td>
            <td></td>
            <td></td>
            <td>總額：<span class="total">0</span></td>
            <td align="right"><button type="button" class="btn btn-primary" id="sales_btn" disabled>結帳</button></td>
          </tr>
        </table>
      </div>
    </div>
  </body>
</html>
