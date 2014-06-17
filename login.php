<?php
  require_once 'user.php';
  $editor=new user();
  if(isset($_POST["username"])){
    if(isset($_POST["password"])){
      //echo $_POST["username"].$_POST["password"];
      $editor->setName($_POST["username"]);
      $editor->setPasswd($_POST["password"]);
      $editor->checkUser();
    }	
  }
  


?>