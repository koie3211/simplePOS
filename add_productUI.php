<?php
  require_once 'common.php';
  checkUserValidate();
  require_once 'product_service.class.php';
  $productService = new ProductService();
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/common.css">
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <script type="text/javascript" src="js/add.js">

    </script>
    <title>新增產品</title>
  </head>
  <body>
    <br>
    <h1>新增產品</h1>
    <div class="common_div">
      <form class="addproduct_form">

      <div class="form-group">
        <label for="p_name">產品名稱</label>
        <input type="text" class="form-control" id="p_name" placeholder="Enter name">
      </div>

      <div class="form-group">
        <label for="inventory">庫存量</label>
        <input type="number" class="form-control" id="inventory" placeholder="Enter inventory">
      </div>

      <div class="form-group">
        <label for="amount">訂購量</label>
        <input type="number" class="form-control" id="amount" placeholder="Enter amount">
      </div>

      <div class="form-group">
        <label for="price">單價</label>
        <input type="number" class="form-control" id="price" placeholder="Enter price">
      </div>

      <div class="form-group">
        <label for="safty_inventory">安全庫存</label>
        <input type="number" class="form-control" id="safty_inventory" placeholder="Enter safty_inventory">
      </div>

      <div class="form-group">
        <label for="s_id">選擇供應商</label>
        <select class="form-control" id="s_id">
          <?php
            $arr = $productService->GetSupplier();
            foreach ($arr as $key):?>
              <option value="<?php echo $key['s_id']?>"><?php echo $key['s_name'] ?></option>
            <?php endforeach; ?>
        </select>
      </div>

      <div class="form-group">
        <label for="c_id">選擇類別</label>
        <select class="form-control" id="c_id">
          <?php
            $arr = $productService->GetCategory();
            foreach ($arr as $key):?>
            <option value="<?php echo $key['c_id']?>"><?php echo $key['c_name'] ?></option>
          <?php endforeach; ?>
        </select>
      </div>

      <button type="submit" class="btn btn-primary">送出</button>
    </form>
    </div>
  </body>
</html>
