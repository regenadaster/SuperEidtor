<?php
  session_start();
  if($_SESSION['userName']==""){
  	header("Location: http://127.0.0.1:8081/theSuperEditor/login.html");
  }
  else{	
	  include "BaseClass.php";
	  include "project.php";
	  include "files.php";
	  $setting=new BaseSetting();
	  $setting->setBackGround("gray");
	  if($_GET["query"]=="background"){
	    $answer=$setting->getBackGround();
	    $data=array("background"=>$answer);
	    echo json_encode($data);
	  }
	  $oneword=new OneDayOneWord();
	  $word=$oneword->getWord();
	  $author=$oneword->getAuthor();
	  if($_GET["query"]=="word"){
	  	$data=array("word"=>$word);
	  	echo json_encode($data);
	  }
	  if($_GET["query"]=="fileST"){
	    $files=new file();
	  }
  }
?>