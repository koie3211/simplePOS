<?php
  $a = strlen($_POST['username']);

  if($a % 2 ==0){
    echo 'yes';
  }else {
    echo 'no';
  }

  ?>
