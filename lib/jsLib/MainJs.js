/**
 * this file is the main js file for this application.
 */

$(document).ready(
  function(){
    $.get("http://127.0.0.1:8081/theSuperEditor/server.php?query=background",function(data){
      var mydata=eval('('+decodeURI(data)+')');
      setBackground(mydata.background);
    })	  
  }		
);
function setBackground(bg){
  if(bg=="gray"){
	$("#mainText").addClass("gray");
  }	
}