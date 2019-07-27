<?php
include "arjun.php"; 
?><!DOCTYPE html>
<html>
<head>
<style> 
 input[type=submit]{
background:green;
color:blue;
}
input[type=button]{
background:red;
color:green;
}
input[type=reset]{
background:blue;
color:yellow;
}
#main td.a{color:yellow;}
#main th.c{color:red;
background:lawngreen;
border:2px dotted black;}

</style>
</head>
<body bgcolor="dodgerblue">

<form   name="myform" action="viswa.php" method = "POST" onsubmit="return validate()">
<h1 align="center" style="color:orange;background:aqua;">SVCE-2019-MCA</h1>
<h1 align="center" style="color:green;background:blue;">STUDENT FEEDBACK FORM</h1>
<p style="color:red;background:dodgerblue;">.............................0-NILL.......1-normal.......2-Average.......3-Good......4-Excellent.....5-Extraordinary.....</p>
<table cellpadding="2" width="10%"  align="center" background="gold" id="main"
cellspacing="2" style="border:2px dotted orange;">

<tr>
<td colspan=2>
</td>
</tr>
<tr><th class="c">Subject</th>
<th class="c">Subject Knowledge</th>
<th class="c">Teaching & Communication Skills</th>
<th class="c">Providing Relevant Examples</th>
<th class="c">Doubts Clarification</th>
<th class="c">Ontime Syllabus Coverage</th>
<tr>
<td class="a">1.Cloud Computing</td>
<td class="a"><select name="a1" id="a1" autofocus>
<option value=" "></option>
<option value="0">0</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
</td>
<td class="a"><select name="a2" id="a2" autofocus>
<option value=" "></option>
<option value="0">0</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
</td>
<td class="a"><select name="a3" id="a3" autofocus>
<option value=" "></option>
<option value="0">0</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
</td>
<td class="a"><select name="a4" id="a4" autofocus>
<option value=" "></option>
<option value="0">0</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
</td>
<td class="a"><select name="a5"  id="a5" autofocus>
<option value=" "></option>
<option value="0">0</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
</td>
</tr>
<tr>
<td class="a">2.Software Testing</td>
<td ><select name="b1"  id="b1" autofocus>
<option value=" "></option>
<option value="0">0</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option></td>
<td ><select name="b2"  id="b2" autofocus>
<option value=" "></option>
<option value="0">0</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option></td>
<td ><select name="b3" id="b3" autofocus>
<option value=" "></option>
<option value="0">0</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option></td>
<td ><select name="b4" id="b4" autofocus>
<option value=" "></option>
<option value="0">0</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option></td>
<td ><select name="b5" id="b5" autofocus>
<option value=" "></option>
<option value="0">0</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option></td>
</tr>
<tr>
<td class="a">3.Fundamentals Of Datascience</td>
<td class="a"><select name="c1" id="c1" autofocus>
<option value=" "></option>
<option value="0">0</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
<td class="a"><select name="c2" id="c2" autofocus>
<option value=" "></option>
<option value="0">0</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
</td>
<td class="a"><select name="c3" id="c3" autofocus>
<option value=" "></option>
<option value="0">0</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
</td>
<td class="a"><select name="c4" id="c4" autofocus>
<option value=" "></option>
<option value="0">0</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
</td>
<td class="a"><select name="c5" id="c5" autofocus>
<option value=" "></option>
<option value="0">0</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
</td>
</tr>

<tr>
<td class="a">4.Python Programming</td>
<td ><select name="d1" id="d1" autofocus>
<option value=" "></option>
<option value="0">0</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option></td>
<td ><select name="d2" id="d2" autofocus>
<option value=" "></option>
<option value="0">0</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option></td>
<td ><select name="d3" id="d3" autofocus>
<option value=" "></option>
<option value="0">0</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option></td>
<td ><select name="d4" id="d4" autofocus>
<option value=" "></option>
<option value="0">0</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option></td>
<td ><select name="d5" id="d5" autofocus>
<option value=" "></option>
<option value="0">0</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option></td>
</tr><tr>
<td class="a">5.Software Project Management</td>
<td class="a"><select name="e1" id="e1" autofocus>
<option value=" "></option>
<option value="0">0</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
<td class="a"><select name="e2" id="e2" autofocus>
<option value=" "></option>
<option value="0">0</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
</td>
<td class="a"><select name="e3" id="e3" autofocus>
<option value=" "></option>
<option value="0">0</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
</td>
<td class="a"><select name="e4" id="e4" autofocus>
<option value=" "></option>
<option value="0">0</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
</td>
<td class="a"><select name="e5" id="e5" autofocus>
<option value=" "></option>
<option value="0">0</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
</td>
</tr>
<td><input type="reset"></td>
<td colspan="2"><input type="submit" value="Submit" /></td>
</tr>
</table>
<script>
function validate()
{
var a =document.getElementById('a1').value;
var b =document.getElementById('a2').value;
var c =document.getElementById('a3').value;
var d =document.getElementById('a4').value;
var e =document.getElementById('a5').value;
var f =document.getElementById('b1').value;
var g =document.getElementById('b2').value;
var h =document.getElementById('b3').value;
var i =document.getElementById('b4').value;
var j =document.getElementById('b5').value;
var k =document.getElementById('c1').value;
var l =document.getElementById('c2').value;
var m =document.getElementById('c3').value;
var n =document.getElementById('c4').value;
var o =document.getElementById('c5').value;
var p =document.getElementById('d1').value;
var q =document.getElementById('d2').value;
var r =document.getElementById('d3').value;
var s =document.getElementById('d4').value;
var t =document.getElementById('d5').value;
var u =document.getElementById('e1').value;
var v =document.getElementById('e2').value;
var w =document.getElementById('e3').value;
var x =document.getElementById('e4').value;
var y =document.getElementById('e5').value;
if(a == " " || b == " " || c == " " || d == " " || e == " " || f == " " || g == " " || h == " " || i == " " || j == " " || k == " " || l == " " || m == " " || n == " " || o == " " || p == " " || q == " " || r == " " || s == " " || t == " " || u == " " || v == " " || w == " " || x == " ")
{
alert("Please Fill All The Field");
return false;
}
return true;
}
</script>
</form>


<input type="button" name="close" value="close" onclick="fun()">
<script>
function fun(){
window.location.href("today.php");
}
</script> 
</body>
</html>