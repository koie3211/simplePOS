<div class="menu"
style="position: fixed;
       top: 0px;
       left: 0px;
       height: 1000px;
       width:20%;
       margin: 0 auto 0 0;
       background-color: #aaa;
       line-height: 20px;">
  <br>
  <?php
    echo "<h1>歡迎".$_SESSION['name']."</h1><br>";
    if ($_SESSION['position']==1):
   ?>
  <li><a href="#">銷售商品</a></li>
  <li><a href="#">庫存查詢</a></li>
  <li></li>
  <li><a href="#">進貨明細</a></li>
  <li><a href="#">進貨單</a></li>
  <li><a href="#">進或查詢</a></li>
  <li></li>
  <li><a href="#">退貨</a></li>
  <li><a href="#">退貨查詢</a></li>
  <li></li>
  <li><a href="#">總庫存查詢</a></li>
  <li><a href="#">低於安全庫存</a></li>
  <li></li>
  <li><a href="#">新增供應商</a></li>
  <li><a href="#">查詢供應商</a></li>
  <li></li>
  <li><a href="#">新增產品</a></li>
  <li><a href="#">查詢產品</a></li>
  <li><a href="#">新增類別</a></li>
  <?php else: ?>
  <li><a href='#'>銷售商品</a></li>
  <li><a href='#'>庫存查詢</a></li>
<?php endif; ?>
  <br>
  <a href="logout.php">登出</a>
</div>
