<?php 
  class BaseSetting{
  	var $UserName;
  	var $PassWord;
  	var $BackGround;
  	function setUserName($_name){
  	  $this->UserName=$_name;
  	}
  	function setPassWord($_password){
  	  $this->PassWord=$_password;
  	}
  	function setBackGround($_bg){
  	  $this->BackGround=$_bg;
  	}
  }
?>