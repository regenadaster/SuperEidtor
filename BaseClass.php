<?php 
  class BaseSetting{
  	var $UserName;
  	var $PassWord;
  	var $BackGround;
  	function setUserName($_name){
  	  $this->UserName=$_name;
  	}
  	function setPassWord($_password){
  	  $this->PassWord=$_password;
  	}
  	function setBackGround($_bg){
  	  $this->BackGround=$_bg;
  	}
  	function getBackGround(){
  	  return $this->BackGround;
  	}
  	function getUserName(){
  	  return $this->UserName;
  	}
  	function getPassWord(){
  	  return $this->PassWord;
  	}
  }
  class splider{
  	var $url;
  	var $content;
  	function setURL($_url){
  	  $this->url=$_url;
  	}
  	function getContent(){
  	  $content=file_get_contents($this->url);
  	  return $content;
  	}
  }
  class OneDayOneWord{
  	var $theDate;
  	var $content;
  	var $author;
    var $smallsplider;
    var $word;
    function __construct(){
      $this->smallsplider=new splider();
      $this->smallsplider->setURL("http://xue.youdao.com/w");
      $this->content=$this->smallsplider->getContent(); 
      //print_r($this->content); 
      ereg('<p class="sen">(.{10,90})</p>',$this->content,$regs);
      //print_r($regs[1]);
      $word=$regs[1];
      $this->word=$word;
    }
    function getWord(){
      return $this->word;
    }
    function getAuthor(){
      return $this->author;
    }
  }
?>