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
  	function __construct(){
  	  $this->setDbName("superditor");
  	  $this->setPass("");
  	  $this->setUser("root");
  	  $this->site("localhost");
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
  	  $this->dbConnect=new mysqli($this->siteName,$this->dbUser,$this->dbPass,$this->dbName);
  	  return $this->dbConnect;
  	}
  	function close(){
  	  $this->dbConnect->close();
  	}
  }
?>