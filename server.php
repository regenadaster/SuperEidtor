<?php
  include "BaseClass.php";
  $setting=new BaseSetting();
  $setting->setBackGround("gray");
  //if($_POST["query"]=="background"){
    $answer=$setting->getBackGround();
    $data=array("background"=>$answer);
    echo json_encode($data);
//  }
?>