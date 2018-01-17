<?php
  require_once 'dbconfig.php';

  class ProductService{
    //新增產品
    function AddProduct($p_name,$inventory,$amount,$price,$safty_inventory,$sid,$cid){
      $dbconfig = new dbconfig();
      $sql = "INSERT INTO `product` (`p_name`,`inventory`,`amount`,`price`,`safty_inventory`,`s_id`,`c_id`)
                              VALUES('{$p_name}',$inventory,$amount,$price,$safty_inventory,$sid,$cid)";
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
  }

 ?>
