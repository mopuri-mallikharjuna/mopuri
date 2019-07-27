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
table, td.a{color:yellow;border:1px solid black;}

#main th.c{color:black;
background:gray;
border:2px dotted black;}

</style>
</head>
<body bgcolor="dodgerblue">

<form   name="myform" action="firstaa.php" method = "POST" onsubmit="return validate()">
<h1 align="center" style="color:orange;background:aqua;">SVCE-2019-MCA-1-A/S</h1>
<h1 align="center" style="color:green;background:blue;">STUDENT FEEDBACK FORM</h1>
<p style="color:black;background:dodgerblue;">................................................1-normal.......2-Average.......3-Good......4-Excellent.....5-Extraordinary.....</p>
<table cellpadding="2" width="10%"  align="center" background="gold" id="main"
cellspacing="2" style="border:2px dotted orange;background:gray;">

<tr>
<td colspan=2>
</td>
</tr>
<tr><th class="c">Subject</th>
<th class="c">Subject Knowledge</th>
<th class="c">Teaching & Communication Skills</th>
<th class="c">Providing Relevant Examples</th>
<th class="c">Doubts Clarification</th>
<th class="c">Ontime Syllabus Coverage</th></tr>
<tr>
<td class="a">1.Technical Communication Skills</td>
<td class="a"><select name="sk1" id="a1" autofocus>
<option value=" "></option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
</td>
<td class="a"><select name="tcs1" id="a2" autofocus>
<option value=" "></option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
</td>
<td class="a"><select name="pre1" id="a3" autofocus>
<option value=" "></option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
</td>
<td class="a"><select name="dc1" id="a4" autofocus>
<option value=" "></option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
</td>
<td class="a"><select name="onts1"  id="a5" autofocus>
<option value=" "></option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
</td>
</tr>
<tr>
<td class="a">2.Probability &Statistics</td>
<td class="a"><select name="sk2"  id="b1" autofocus>
<option value=" "></option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option></td>
<td class="a"><select name="tcs2"  id="b2" autofocus>
<option value=" "></option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option></td>
<td class="a"><select name="pre2" id="b3" autofocus>
<option value=" "></option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option></td>
<td class="a"><select name="dc2" id="b4" autofocus>
<option value=" "></option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option></td>
<td class="a"><select name="onts2" id="b5" autofocus>
<option value=" "></option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option></td>
</tr>
<tr>
<td class="a">3.Accounting &Financial Management</td>
<td class="a"><select name="sk3" id="c1" autofocus>
<option value=" "></option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
<td class="a"><select name="tcs3" id="c2" autofocus>
<option value=" "></option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
</td>
<td class="a"><select name="pre3" id="c3" autofocus>
<option value=" "></option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
</td>
<td class="a"><select name="dc3" id="c4" autofocus>
<option value=" "></option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
</td>
<td class="a"><select name="onts3" id="c5" autofocus>
<option value=" "></option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
</td>
</tr>

<tr>
<td class="a">4.Mathematical Foundations Of ComputerScience</td>
<td class="a"><select name="sk4" id="d1" autofocus>
<option value=" "></option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option></td>
<td class="a"><select name="tcs4" id="d2" autofocus>
<option value=" "></option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option></td>
<td class="a"><select name="pre4" id="d3" autofocus>
<option value=" "></option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option></td>
<td class="a"><select name="dc4" id="d4" autofocus>
<option value=" "></option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option></td>
<td class="a"><select name="onts4" id="d5" autofocus>
<option value=" "></option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option></td>
</tr><tr>
<td class="a">5.Problem Solving &Programming</td>
<td class="a"><select name="sk5" id="e1" autofocus>
<option value=" "></option>
<option value="0">0</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
<td class="a"><select name="tcs5" id="e2" autofocus>
<option value=" "></option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
</td>
<td class="a"><select name="pre5" id="e3" autofocus>
<option value=" "></option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
</td>
<td class="a"><select name="dc5" id="e4" autofocus>
<option value=" "></option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
</td>
<td class="a"><select name="onts5" id="e5" autofocus>
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
if(a == " " || b == " " || c == " " || d == " " || e == " " || f == " " || g == " " || h == " " || i == " " || j == " " || k == " " || l == " " || m == " " || n == " " || o == " " || p == " " || q == " " || r == " " || s == " " || t == " " || u == " " || v == " " || w == " " || x == " " || y == " ")
{
alert("Please Fill All The Field");
return false;
}
return true;
}
</script>
</form>


<center><input type="button" name="close" value="Home" onclick="fun()"></center>
<script>
function fun(){
window.location.href("today.php");
}
</script> 
</body>
</html>