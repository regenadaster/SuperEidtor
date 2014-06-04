<?php
  include "BaseClass.php";
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
?>