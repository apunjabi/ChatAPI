<!DOCTYPE html
PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- 
This is a skeleton html file that you can use to get you started on each new 
HTML project

Name: Your Name Here
Class: CIS 3303
Section: x
-->
<html>

<head>
	Fandango GroupMe API
<title>Fandango GroupMe API</title>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
</head>

<body>
<div id = "container" style="width: 100%;">
	<div id = "first textbox" style="width: 200 px; float:left;">
<textarea rows = "20" cols = "40">

</textarea>

	</div>
	<div id = "second textbox" style="margin-left: 220px;">
<textarea rows = "20" cols = "40">

</textarea>

	</div>
<input type= "submit" value = "Submit" style="margin-left:100px;">
<input type= "submit" value = "Submit" style="margin-left: 300px;">
<div>

</body>
</html>

<script>
$(document).ready(function(){
$.get( " https://api.groupme.com/v3/groups?token=3d392470dde501312b9c06969a394856", function( data ) {
  $( ".result" ).html( data );
  console.log(data);
  alert( "Load was performed." );
});

$.post( "https://push.groupme.com/faye", { "channel":"/meta/handshake",
	"version":"1.0",
    "supportedConnectionTypes":["long-polling"],
    "id":"1"})
  .done(function( data ) {
    console.log( "Data Loaded: " + data );
  });




});
</script>