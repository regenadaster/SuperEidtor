<?php
  class user{
  	var $username;
  	var $passwd;
  	function __construct(){
  	  $this->setName("");
  	  $this->setPasswd("");
  	}
  	function setName($_name){
  	  $this->username=$_name;
  	}
  	function setPasswd($_passwd){
  	  $this->passwd=$_passwd;
  	}
  	function getName(){
  	  return $this->username;
  	}
  	function getPasswd(){
  	  return $this->passwd;
  	}
  }
?>