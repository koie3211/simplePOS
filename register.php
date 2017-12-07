<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/register.css">
    <title>註冊</title>
  </head>
  <body>
    <h1>註冊</h1>
    <div class="register_div">
      <form class="register">

      <div class="form-group">
        <label for="name">姓名</label>
        <input type="text" class="form-control" id="name" placeholder="Enter name">
      </div>

      <div class="form-group">
        <label for="ssd">身分證</label>
        <input type="text" class="form-control" id="ssd" placeholder="Enter ssd" maxlength="10">
      </div>

      <div class="form-group">
        <label for="birthday">生日</label>
        <input type="date" class="form-control" id="birthday" placeholder="Enter birthday">
      </div>

      <div class="form-group">
        <label for="email1">電子郵件</label>
        <input type="email" class="form-control" id="email1" placeholder="Enter email">
      </div>

      <div class="form-group">
        <label for="username">帳號</label>
        <input type="text" class="form-control" id="username" placeholder="Enter name">
      </div>

      <div class="form-group">
        <label for="password">密碼</label>
        <input type="password" class="form-control" id="password" placeholder="Password">
      </div>

      <div class="form-group">
        <label for="repassword">再次輸入密碼</label>
        <input type="password" class="form-control" id="repassword" placeholder="Password">
      </div>

      <button type="submit" class="btn btn-primary">送出</button>
    </form>

    </div>
  </body>
</html>
