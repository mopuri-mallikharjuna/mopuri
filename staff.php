<?php
include "time.php" 
?><html><head>
<style>
input[type=button]{
color:red;
background:green;
}
input[type=submit]{
color:aqua;
background:blue;
}
input[type=text]{
color:yellow;
}
form{
align:"center";
}</style></head>
<body bgcolor="dodgerblue">
<h1 align="center"  style="color:orange;background:dodgerblue;">STAFF-2019</h1>
<form action="#" method="POST" style="text-align:center;border:2px dotted green;" onsubmit="return validateForm()">
user:<input type="text" name="ram" id="na">
<input type="submit" value="submit">
<script>
function validateForm(){
var x = document.getElementById('na').value;
if(x == "user"){
window.location.href("res.php");
return false;
}
}
</script>
<input type="button" name="close" value="Home" onclick="fun()">
<script>
function fun(){
window.location.href("today.php");
}</script>
</form></body>
</html>