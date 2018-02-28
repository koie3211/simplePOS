<?php
  require_once 'dbconfig.php';

  class ProductService{
    //新增產品
    function AddProduct($p_name,$inventory,$price,$safty_inventory,$sid,$cid){
      $dbconfig = new dbconfig();
      $sql = "INSERT INTO `product` (`p_name`,`inventory`,`price`,`safty_inventory`,`s_id`,`c_id`)
                              VALUES('{$p_name}',$inventory,$price,$safty_inventory,$sid,$cid)";
      $b = $dbconfig->excute_dml($sql);
      $dbconfig->close();
      return $b;
    }
    //新增類別
    function AddCategory($c_name){
      $dbconfig = new dbconfig();
      $sql = "INSERT INTO `category` (`c_name`) VALUES ('{$c_name}')";
      $b = $dbconfig->excute_dml($sql);
      $dbconfig->close();
      return $b;
    }
    //新增供應商
    function AddSupplier($s_name,$s_tel){
      $dbconfig = new dbconfig();
      $sql = "INSERT INTO `supplier` (`s_name`,`s_tel`) VALUES ('{$s_name}','{$s_tel}')";
      $b = $dbconfig->excute_dml($sql);
      $dbconfig->close();
      return $b;
    }
    //查詢產品
    function SearchProduct($p_name){
      $dbconfig = new dbconfig();
      $sql = "SELECT * FROM `product` WHERE `p_name` LIKE '%{$p_name}%'";
      $arr = $dbconfig->excute_dql($sql);
      $dbconfig->close();
      return $arr;
    }
    function SearchProductById($p_name){
      $dbconfig = new dbconfig();
      $sql = "SELECT * FROM `product` WHERE `p_id` = {$p_name}";
      $arr = $dbconfig->excute_dql($sql);
      $dbconfig->close();
      return $arr;
    }
    //查詢供應商
    function SearchSupplier($s_name){
      $dbconfig = new dbconfig();
      $sql = "SELECT * FROM `supplier` WHERE `s_name` LIKE '%{$s_name}%'";
      $arr = $dbconfig->excute_dql($sql);
      $dbconfig->close();
      return $arr;
    }
    //查詢總庫存
    function SearchInventory(){
      $dbconfig = new dbconfig();
      $sql = "SELECT `product`.`p_id`,`product`.`p_name`,`supplier`.`s_name`
                    ,`product`.`s_id`,`product`.`inventory`,`product`.`price`
                    FROM `product`,`supplier` WHERE `product`.`s_id` = `supplier`.`s_id`";
      $arr = $dbconfig->excute_dql($sql);
      $dbconfig->close();
      return $arr;
    }
    //取得類別名稱
    function GetCategory(){
      $dbconfig = new dbconfig();
      $sql = "SELECT * FROM `category`";
      $arr = $dbconfig->excute_dql($sql);
      $dbconfig->close();
      return $arr;
    }
    //取得供應商
    function GetSupplier(){
      $dbconfig = new dbconfig();
      $sql = "SELECT * FROM `supplier`";
      $arr = $dbconfig->excute_dql($sql);
      $dbconfig->close();
      return $arr;
    }

    //取得產品
    function GetProduct($p_id){
      $dbconfig = new dbconfig();
      $sql = "SELECT * FROM `product` WHERE `p_id` = {$p_id}";
      $arr = $dbconfig->excute_dql($sql);
      $dbconfig->close();
      return $arr;
    }
    //檢查要購買商品的庫存是否還夠
    function SearchAmount($p_id){
      $dbconfig = new dbconfig();
      $sql = "SELECT `inventory` FROM `product` WHERE `p_id` = {$p_id}";
      $arr = $dbconfig->excute_dql($sql);
      $dbconfig->close();
      return $arr;
    }
    //結帳?
    function Sales($p_id,$inventory,$amount){
      $dbconfig = new dbconfig();
      $inventory -= $amount;
      $sql = "UPDATE `product` SET `inventory` = {$inventory} WHERE `p_id` = {$p_id};";
      $b = $dbconfig->excute_dml($sql);
      $dbconfig->close();
      return $b;
    }
  }

 ?>
