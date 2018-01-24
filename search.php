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
      $str = "<br>
              <table class='table table-hover'>
                <thead>
                  <tr>
                    <th scope='col'>產品編號</th>
                    <th scope='col'>產品名稱</th>
                    <th scope='col'>產品數量</th>
                    <th scope='col'>產品單價</th>
                  </tr>
                </thead>
                <tbody>";
      if (count($arr)>0) {
          foreach ($arr as $key ) {
            $str.= "<tr>
                      <th scope='row'>{$key['p_id']}</th>
                      <td>{$key['p_name']}</td>
                      <td>{$key['inventory']}</td>
                      <td>{$key['price']}</td>
                    </tr>";
          }
      }else {
        $str.= "<tr>
                  <td colspan='4'>無資料!</td>
                </tr>";
      }
      $str.= "</tbody></table>";
      echo $str;
      break;
      //查詢供應商
    case 'supplier':
      $s_name = $_POST['s_name'];
      $arr = $productService->SearchSupplier($s_name);
      $str = "<br>
              <table class='table table-hover'>
                <thead>
                  <tr>
                    <th scope='col'>供應商編號</th>
                    <th scope='col'>供應商名稱</th>
                    <th scope='col'>供應商電話</th>
                  </tr>
                </thead>
                <tbody>";
      if (count($arr)>0) {
        foreach ($arr as $key ) {
          $str.= "<tr>
                    <th scope='row'>{$key['s_id']}</th>
                    <td>{$key['s_name']}</td>
                    <td>{$key['s_tel']}</td>
                  </tr>";
        }
      }else {
        $str.= "<tr>
                  <td colspan='3'>無資料!</td>
                </tr>";
      }
      $str.= "</tbody></table>";
      echo $str;
      break;
      //查詢總庫存
      case 'inventory':
        $arr = $productService->SearchInventory();
        $str = "<br>
                <table class='table table-hover'>
                  <thead>
                    <tr>
                      <th scope='col'>產品編號</th>
                      <th scope='col'>產品名稱</th>
                      <th scope='col'>供應商名稱</th>
                      <th scope='col'>供應商編號</th>
                      <th scope='col'>產品數量</th>
                      <th scope='col'>產品單價</th>
                    </tr>
                  </thead>
                  <tbody>";
        if (count($arr)>0) {
          foreach ($arr as $key ) {
            $str.= "<tr>
                      <th scope='row'>{$key['p_id']}</th>
                      <td>{$key['p_name']}</td>
                      <td>{$key['s_name']}</td>
                      <td>{$key['s_id']}</td>
                      <td>{$key['inventory']}</td>
                      <td>{$key['price']}</td>
                    </tr>";
          }
        }else {
          $str.= "<tr>
                    <td colspan='6'>無資料!</td>
                  </tr>";
        }
        $str.= "</tbody></table>";
        echo $str;
        break;
    default:
      header('Location: login.php?err=2');
      break;
  }
 ?>
