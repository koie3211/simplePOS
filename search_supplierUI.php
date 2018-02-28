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
    <title>查詢供應商</title>
  </head>
  <body>
    <br>
    <h1>查詢供應商</h1>
    <div class="common_div">
      <form class="serchsupplier_form">

      <div class="form-group">
        <label for="s_name">供應商名稱</label>
        <input type="text" class="form-control" id="s_name" placeholder="Enter supplier name">
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
              <th scope='col'>供應商編號</th>
              <th scope='col'>供應商名稱</th>
              <th scope='col'>供應商電話</th>
            </tr>
          </thead>
        <tbody class="tbody">
        </tbody>
      </table>
    </div>
  </body>
</html>
