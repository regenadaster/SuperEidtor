<?php
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
?>