<?php 
  require_once 'database.php';
  require_once 'BaseClass.php';
  class file{
  	var $fileName;
    var $fileFather;
    var $fileOwner;
    var $fileDb;
    var $connection;
    function __construct(){
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
      $this->fileDb->connect();
      $this->fileDb->setSql('insert table file(name,father,userid) values("'.$this->fileName.'","'.$this->fileFather.'","'.$this->fileOwner.'");');
      $this->fileDb->query();
    }
    function selectfile(){
      $this->fileDb->connect();
      $this->fileDb->setsql('select * from file(name,father,userid) values("');
    }
  }
?>