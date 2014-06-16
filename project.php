<?php
  class Project{
  	var $files=array();
  	var $proName;
  	function __construct($name){
  	  $this->setName($name);
  	}
  	function setName($_name){
  	  $this->proName=$_name;
  	}
  	function createFile($_fileName,$_fileFather,$_author){
  	  
  	}
    function getFileArr(){
      return $this->$files;
    }
  }


?>
