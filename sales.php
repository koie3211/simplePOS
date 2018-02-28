<?php
  require_once 'product_service.class.php';
  $productService = new ProductService();
  session_start();

  $kind = $_POST['kind'];
  switch ($kind) {
    case 'getproduct':
      $p_id = $_POST['p_id'];
      $arr = $productService->GetProduct($p_id);
      if(count($arr)==0){
        echo "no";
      }else {
        echo json_encode($arr[0]);
      }
      break;
    case 'cart':
      $i = $_POST['i'];
      $p_id = $_POST['p_id'];
      $p_name = $_POST['p_name'];
      $price = $_POST['price'];
      $amount = $_POST['amount'];
      $subtotal = $_POST['subtotal'];
      $_SESSION['Sales'][$i]['p_id'] = $p_id;
      $_SESSION['Sales'][$i]['price'] = $price;
      $_SESSION['Sales'][$i]['p_name'] = $p_name;
      $_SESSION['Sales'][$i]['amount'] = $amount;
      $_SESSION['Sales'][$i]['subtotal'] = $subtotal;
      print_r(json_encode($_SESSION['Sales']));
      break;
      case 'del':
        $id = $_POST['id'];
        unset($_SESSION['Sales'][$id]);
        print_r(json_encode($_SESSION['Sales']));
        break;
      case 'sales':
        $str = "";
        foreach ($_SESSION['Sales'] as $key => $value) {
          $arr = $productService->Searchamount($value['p_id']);
          $inventory = $arr[0]['inventory'];
          if ($inventory < $value['amount']) {
            $str .= $value['p_name']."庫存不足\n";
          }
        }
        if ($str == "") {
          foreach ($_SESSION['Sales'] as $key => $value) {
            $b = $productService->Sales($value['p_id'],$inventory,$value['amount']);
          }
          unset($_SESSION['Sales']) ;
          echo "交易成功!";
        }else {
          echo $str;
        }
        break;
    default:
      echo "error";
      break;
  }
 ?>
