<?php
  require_once 'BaseClass.php';
  $appSetting=new BaseSetting();
  $appSetting->init();
  if(isset($_SESSION["username"])){
    $appSetting->redirect($appSetting->getVal("baseUrl")."/index.html");
  }
  else{
  	$appSetting->redirect($appSetting->getVal("baseUrl")."/login.html");
  }
?>