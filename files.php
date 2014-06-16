<?php 
  class file{
  	var $fileName;
    var $fileFather;
    var $fileOwner;
    function __construct($name,$father,$owner){
      $this->setName($name);
      $this->setFather($father);
      $this->setAuthor($owner);
    }
    function setName($_name){
      $this->fileName=$_name;
    }
    function setFather($_father){
      $this->fileFather=$_father;
    }
    function setAuthor($_owner){
      $this->fileOwner=$_owner;
    }
  }
?>