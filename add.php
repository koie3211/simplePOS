<?php
  require_once 'product_service.class.php';
  $productService = new ProductService();

  $kind = $_POST['kind'];
  switch ($kind) {
    //新增產品
    case 'product':
      $p_name = $_POST['p_name'];
      $inventory = $_POST['inventory'];
      $amount = $_POST['amount'];
      $price = $_POST['price'];
      $safty_inventory = $_POST['safty_inventory'];
      $sid = $_POST['sid'];
      $cid = $_POST['cid'];
      $b = $productService->AddProduct($p_name,$inventory,$amount,$price,$safty_inventory,$sid,$cid);
      if ($b == "1") {
        echo "yes";
      }else {
        echo "no";
      }
      break;
    //新增類別
    case 'category':
      $c_name = $_POST['c_name'];
      $b = $productService->AddCategory($c_name);
      if ($b == "1") {
        echo "yes";
      }else {
        echo "no";
      }
      break;
    //新增供應商
    case 'supplier':
      $s_name = $_POST['s_name'];
      $s_tel = $_POST['s_tel'];
      $b = $productService->AddSupplier($s_name,$s_tel);
      if ($b == "1") {
        echo "yes";
      }else {
        echo "no";
      }
      break;
    default:
      header('Location: login.php?err=2');
      break;
  }
 ?>
