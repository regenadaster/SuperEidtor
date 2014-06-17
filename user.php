<?php
  require_once 'project.php';
  require_once 'database.php';
  class user{
  	var $userDb;
  	var $username;
  	var $passwd;
  	var $projectArr=array();
  	function __construct(){
  	  $this->setName("");
  	  $this->setPasswd("");
  	  $this->userDb=new db();
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
  	function createProject($_proName){
  	  $pro=new Project($_proName);
  	  $projectArr[]=$pro;
  	}
  	function checkUser(){
  	  $this->userDb->connect();
  	  $this->userDb->setSql('select * from user where name='.'"'.$this->getName().'" AND password="'.$this->getPasswd().'";');
  	  $this->userDb->query();
  	  echo $this->userDb->result;
  	}
  }
?>