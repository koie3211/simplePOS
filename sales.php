<?php
  require_once 'product_service.class.php';
  $productService = new ProductService();

  $kind = $_POST['kind'];
  $p_id = $_POST['p_id'];
  switch ($kind) {
    case 'getproduct':
      $arr = $productService->GetProduct($p_id);
      if(count($arr)<1){
        echo "no";
      }else {
        print_r( json_encode($arr, JSON_PRETTY_PRINT));
      }
      break;
    case 'sales':
      $arr = $productService->GetProduct($p_id);
      $inventory = $_POST['inventory'];
      $subtotal = $_POST['subtotal'];
      $b = $productService->Sales($arr,$inventory);
      if ($b == '1') {
        echo "yes";
      }else {
        echo $b;
      }
      break;
    default:
      echo "error";
      break;
  }
 ?>
