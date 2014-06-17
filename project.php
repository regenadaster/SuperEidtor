<?php
  require_once 'database.php';
  class Project{
  	var $files=array();
  	var $proName;
  	var $proDb;
  	function __construct($name){
  	  $this->setName($name);
  	  $this->proDb=new db();
  	}
  	function setName($_name){
  	  $this->proName=$_name;
  	}
  	function createProject(){
  	  $connection=$this->proDb->connect();
  	  $this->proDb->setSql('insert table project(userid,name) values("'+$_SESSION['username']+'","'+$this->proName+'");');
  	  $this->proDb->query();
  	}
  	function createFile($_fileName,$_fileFather,$_author){
  	  
  	}
    function getFileArr(){
      return $this->$files;
    }
  }
?>
