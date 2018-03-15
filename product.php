<?php
require_once 'product_service.class.php';
$productService = new ProductService();
$kind = $_POST['kind'];
$p_id = $_POST['p_id'];
$amount = $_POST['amount'];
switch ($kind) {
  case 'export':
    //$productService->
    break;

  default:
    # code...
    break;
}

 ?>
