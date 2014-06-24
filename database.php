<?php
/*
  $dbconnect=new mysqli("localhost","root","","supereditor");
  if($dbconnect){
    $result=$dbconnect->query("SELECT * FROM file;");
    while($row = $result->fetch_array(MYSQLI_ASSOC)){
      $name=$row["name"];
    }
    echo "end";
  }
  else{
  	echo "bad";
  }
  $dbconnect->close();
  */
  class db{
  	var $dbConnect;
  	var $dbUser;
  	var $dbPass;
  	var $dbName;
  	var $siteName;
  	var $sqlSen;
  	var $result;
  	var $err;
  	function __construct(){
  	  $this->setDbName("superditor");
  	  $this->setPass("");
  	  $this->setUser("root");
  	  $this->site("localhost");
  	}
  	function setSql($sql){
  	  $this->sqlSen=$sql;
  	  echo $sql;
  	}
  	function query(){
  	  $this->result=$this->dbConnect->query($this->sqlSen);
  	  print_r($this->result);
  	}
  	function site($sitename){
  	  $this->siteName=$sitename;
  	}
  	function setDbName($name){
  	  $this->dbName=$name;
  	}
  	function setUser($user){
  	  $this->dbUser=$user;
  	}
  	function setPass($pass){
  	  $this->dbPass=$pass;
  	}
  	function connect(){
  	  if(!isset($this->dbConnect)){
  	    $this->dbConnect=new mysqli($this->siteName,$this->dbUser,$this->dbPass,$this->dbName);
  	    if(!$this->dbConnect){
  	      echo "bad";
  	    }
  	  }
  	  return $this->dbConnect;
  	}
  	function close(){
  	  $this->dbConnect->close();
  	}
  	function IsresultEmpty(){
  	  if(empty($this->result)){
  	  	return 1;
  	  }
  	  else{
  	  	return 0;
  	  }
  	}
  }
?>