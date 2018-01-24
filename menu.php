<div class="menu"
style="position: fixed;
       top: 0px;
       left: 0px;
       height: 1000px;
       width:15%;
       margin: 0 auto;
       padding: 10px;
       background-color: #21252B;
       line-height: 20px;
       color: #939CA9;">
  <br>
  <?php
    echo "<h1>歡迎 ".$_SESSION['name']."</h1><br>";
    if ($_SESSION['position']==1):
   ?>
  <li><a href="salesUI.php" target="view_frame">銷售商品</a></li>
  <li><a href="#" target="view_frame">庫存查詢</a></li>
  <li></li>
  <li><a href="#" target="view_frame">進貨明細</a></li>
  <li><a href="#" target="view_frame">進貨單</a></li>
  <li><a href="#" target="view_frame">進或查詢</a></li>
  <li></li>
  <li><a href="#" target="view_frame">退貨</a></li>
  <li><a href="#" target="view_frame">退貨查詢</a></li>
  <li></li>
  <li><a href="inventoryUI.php" target="view_frame">總庫存查詢</a></li>
  <li><a href="#" target="view_frame">低於安全庫存</a></li>
  <li></li>
  <li><a href="add_supplierUI.php" target="view_frame">新增供應商</a></li>
  <li><a href="search_supplierUI.php" target="view_frame">查詢供應商</a></li>
  <li></li>
  <li><a href="add_productUI.php" target="view_frame">新增產品</a></li>
  <li><a href="search_productUI.php" target="view_frame">查詢產品</a></li>
  <li><a href="add_categoryUI.php" target="view_frame">新增類別</a></li>
  <?php else: ?>
  <li><a href='salesUI.php' target="view_frame">銷售商品</a></li>
  <li><a href='#' target="view_frame">庫存查詢</a></li>
<?php endif; ?>
  <br>
  <a href="logout.php">登出</a>
</div>
