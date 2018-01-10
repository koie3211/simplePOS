<?php session_start(); ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/login.css">
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <script type="text/javascript" src="js/login.js">

    </script>
    <title>登入</title>
  </head>
  <body>
    <div>
      <form class="login_form">
        <div class="user">
          帳號： <input type="text" name="username" id="username">
        </div>
        <br>
        <div class="pass">
          密碼： <input type="password" name="password" id="password">
        </div>
        <br>
        <button type="submit">送出</button>
        <button type="button" id="register">註冊</button>
      </form>
    </div>
  </body>
</html>
