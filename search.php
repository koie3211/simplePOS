<?php
  require_once 'product_service.class.php';
  $productService = new ProductService();

  $kind = $_POST['kind'];
  switch ($kind) {
    //查詢產品
    case 'product':
      $p_name = $_POST['p_name'];
      error_log($p_name."--".date("Y:m:d H:i:s")."\r\n",3,"test.txt");
      $arr = $productService->SearchProduct($p_name);
      if (count($arr)>0) {
        echo json_encode($arr);
      }else {
        echo json_encode("無資料!");
      }
      break;
    //查詢供應商
    case 'supplier':
      $s_name = $_POST['s_name'];
      $arr = $productService->SearchSupplier($s_name);
      if (count($arr)>0) {
        echo json_encode($arr);
      }else {
        echo json_encode("無資料!");
      }
      break;
      //庫存查詢
    case 'amount':
      $p_name = $_POST['p_name'];
      error_log($p_name."--".date("Y:m:d H:i:s")."\r\n",3,"test.txt");
      if (is_numeric($p_name)) {
        $arr = $productService->SearchProductById($p_name);
      }else{
        $arr = $productService->SearchProduct($p_name);
      }
      if (count($arr)>0) {
          echo json_encode($arr);
      }else {
        echo json_encode("無資料!");
      }
      break;
    //查詢總庫存
    case 'inventory':
      $arr = $productService->SearchInventory();
      if (count($arr)>0) {
        echo json_encode($arr);
      }else {
        echo json_encode("無資料!");
      }
      break;
    case 'check_inventory':
      $arr = $productService->CheckInventory();
      if (count($arr)>0) {
        echo json_encode($arr);
      }else {
        echo json_encode("無資料!");
      }
      break;
    default:
      header('Location: login.php?err=2');
      break;
  }
 ?>
