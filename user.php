<?php
  require_once 'project.php';
  require_once 'database.php';
  class user{
  	var $userDb;
  	var $username;
  	var $passwd;
  	var $userId;
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
      if($this->userDb->IsresultEmpty()==0){
      	echo "ำรปงร๛รÜย๋ดํฮ๓";
      }
      else{
      	//echo "good";
      	$this->getUserId();
      }
      $this->userDb->close();
  	}
  	function getUserId(){
  	  //echo "here";
  	  $this->userDb->connect();
  	  $this->userDb->setSql('select id from user where name='.'"'.$this->getName().'" AND password="'.$this->getPasswd().'";');
  	  $this->userDb->query();
  	  $row = $this->userDb->result->fetch_array(MYSQLI_ASSOC);
  	  	echo "here";
  	  	$this->userId=$row->id;
  	  	print_r($row);

  	  //echo $this->userId;
  	  echo "out";
  	  $this->userDb->close();
  	}
  }
?>