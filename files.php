<?php 
  require_once 'database.php';
  class file{
  	var $fileName;
    var $fileFather;
    var $fileOwner;
    var $fileDb;
    function __construct($name,$father,$owner){
      $this->setName($name);
      $this->setFather($father);
      $this->setAuthor($owner);
      $this->fileDb=new db();
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
    function createFile(){
      $connection=$this->fileDb->connect();
      $this->fileDb->setSql('insert table file(name,father,userid) values("'+$this->fileName+'","'+$this->fileFather+'","'+$this->fileOwner+'");');
      $this->fileDb->query();
    }
  }
?>