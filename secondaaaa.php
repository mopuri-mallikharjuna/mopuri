<html><head><style>table, th, td{border:1px solid black;}table{border-collapse:collapse;}input[type=button]{color:orange;background:blue;}</style></head><body style="background:mediumseagreen;"><h1 align="center">Database Output</h1><h2 align="center">SECOND-A/S</h2><table name="main"><tr><th colspan="5">DataBase Management System [P.A.Ramesh]</th><th colspan="5">Computer Networks [A.Jyothsna]</th><th colspan="5">Web Technologies [G.Chidananda]</th><th colspan="5">Software Engineering [P.Ravindra]</th><th colspan="5">Operating Systems [S.Narasimhulu]</th></tr><tr><th>sk1</th><th>tcs1</th><th>pre1</th><th>dc1</th><th>onts1</th><th>sk2</th><th>tcs2</th><th>pre2</th><th>dc2</th><th>onts2</th><th>sk3</th><th>tcs3</th><th>pre3</th><th>dc3</th><th>onts3</th><th>sk4</th><th>tcs4</th><th>pre4</th><th>dc4</th><th>onts4</th><th>sk5</th><th>tcs5</th><th>pre5</th><th>dc5</th><th>onts5</th></tr>
<?php
$sk1 = "sk1";
$tcs1 = "tcs1";
$pre1= "pre1";
$dc1 ="dc1";
$onts1 ="onts1";
$sk2 = "sk2";
$tcs2 = "tcs2";
$pre2= "pre2";
$dc2 ="dc2";
$onts2 ="onts2";
$sk3 = "sk3";
$tcs3 = "tcs3";
$pre3= "pre3";
$dc3 ="dc3";
$onts3 ="onts3";
$sk4 = "sk4";
$tcs4 = "tcs4";
$pre4= "pre4";
$dc4 ="dc4";
$onts4 ="onts4";
$sk5 = "sk5";
$tcs5 = "tcs5";
$pre5= "pre5";
$dc5 ="dc5";
$onts5 ="onts5";
                                  $host = "localhost";
                      $dbusername = "root";
                  $dbpassword = "";
                $dbname = "feedback";
               $conn = mysqli_connect($host, $dbusername, $dbpassword, $dbname);
                if(mysqli_connect_error())
       {
                 die('Connect Error ('. mysqli_connect_errno() .') '. mysqli_connect_error());
       }
        else
        {
$sql="SELECT * FROM  seconda";

if($result = mysqli_query($conn,$sql)) 
{
while($row=$result->fetch_assoc()){
$field1name=$row["sk1"];
$field2name=$row["tcs1"];
$field3name=$row["pre1"];
$field4name=$row["dc1"];
$field5name=$row["onts1"];
$field6name=$row["sk2"];
$field7name=$row["tcs2"];
$field8name=$row["pre2"];
$field9name=$row["dc2"];
$field10name=$row["onts2"];
$field11name=$row["sk3"];
$field12name=$row["tcs3"];
$field13name=$row["pre3"];
$field14name=$row["dc3"];
$field15name=$row["onts3"];
$field16name=$row["sk4"];
$field17name=$row["tcs4"];
$field18name=$row["pre4"];
$field19name=$row["dc4"];
$field20name=$row["onts4"];
$field21name=$row["sk5"];
$field22name=$row["tcs5"];
$field23name=$row["pre5"];
$field24name=$row["dc5"];
$field25name=$row["onts5"];
echo '<tr><td>'  .$field1name .  ' </td><td> '  . $field2name  .  ' </td><td>'  .$field3name .  '</td><td> '  .$field4name .  '</td><td>'  .$field5name . '</td><td> '  .$field6name .  ' </td><td>'   . $field7name .  ' </td><td>'   .$field8name .  '</td><td> '  .$field9name . ' </td><td> ' . $field10name .  '</td> <td> '   .$field11name .  '  </td> <td> '  .$field12name .' </td> <td> ' . $field13name  . ' </td> <td>' .$field14name .' </td> <td>' .$field15name . ' </td><td>' . $field16name . ' </td> <td>' .$field17name . '</td> <td>' .$field18name . ' </td> <td>' . $field19name . ' </td> <td>'  .$field20name . '</td> <td>' .$field21name.' </td> <td>' . $field22name  . ' </td> <td>'  .$field23name .'  </td> <td>  ' . $field24name  . ' </td><td>' .$field25name .   ' </td></tr>';
} 
}

$result->free();
$conn->close();
}

?><tr><td>
<?php 
include "connect.php";
 foreach($conn->query('SELECT (AVG(sk1)) AS total FROM seconda') as $row)
{
echo "   " , $row['total'] , " ";	
} 
?></td><td>
<?php 
include "connect.php";
 foreach($conn->query('SELECT (AVG(tcs1)) AS total FROM seconda') as $row)
{
echo "   " , $row['total'] , " ";	
} 
?></td><td>
<?php 
include "connect.php";
 foreach($conn->query('SELECT (AVG(pre1)) AS total FROM seconda') as $row)
{
echo "   " , $row['total'] , " ";	
} 
?></td><td>
<?php 
include "connect.php";
 foreach($conn->query('SELECT (AVG(dc1)) AS total FROM seconda') as $row)
{
echo "   " , $row['total'] , " ";	
} 
?></td><td>
<?php 
include "connect.php";
 foreach($conn->query('SELECT (AVG(onts1)) AS total FROM seconda') as $row)
{
echo "   " , $row['total'] , " ";	
} 
?></td><td>
<?php 
include "connect.php";
 foreach($conn->query('SELECT (AVG(sk2)) AS total FROM seconda') as $row)
{
echo "   " , $row['total'] , " ";	
} 
?></td><td>
<?php 
include "connect.php";
 foreach($conn->query('SELECT (AVG(tcs2)) AS total FROM seconda') as $row)
{
echo "   " , $row['total'] , " ";	
} 
?></td><td>
<?php 
include "connect.php";
 foreach($conn->query('SELECT (AVG(pre2)) AS total FROM seconda') as $row)
{
echo "   " , $row['total'] , " ";	
} 
?></td><td>
<?php 
include "connect.php";
 foreach($conn->query('SELECT (AVG(dc2)) AS total FROM seconda') as $row)
{
echo "   " , $row['total'] , " ";	
} 
?></td><td>
<?php 
include "connect.php";
 foreach($conn->query('SELECT (AVG(onts2)) AS total FROM seconda') as $row)
{
echo "   " , $row['total'] , " ";	
} 
?></td><td>
<?php 
include "connect.php";
 foreach($conn->query('SELECT (AVG(sk3)) AS total FROM seconda') as $row)
{
echo "   " , $row['total'] , " ";	
} 
?></td><td>
<?php 
include "connect.php";
 foreach($conn->query('SELECT (AVG(tcs3)) AS total FROM seconda') as $row)
{
echo "   " , $row['total'] , " ";	
} 
?></td><td>
<?php 
include "connect.php";
 foreach($conn->query('SELECT (AVG(pre3)) AS total FROM seconda') as $row)
{
echo "   " , $row['total'] , " ";	
} 
?></td><td>
<?php 
include "connect.php";
 foreach($conn->query('SELECT (AVG(dc3)) AS total FROM seconda') as $row)
{
echo "   " , $row['total'] , " ";	
} 
?></td><td>
<?php 
include "connect.php";
 foreach($conn->query('SELECT (AVG(onts3)) AS total FROM seconda') as $row)
{
echo "   " , $row['total'] , " ";	
} 
?></td><td>
<?php 
include "connect.php";
 foreach($conn->query('SELECT (AVG(sk4)) AS total FROM seconda') as $row)
{
echo "   " , $row['total'] , " ";	
} 
?></td><td>
<?php 
include "connect.php";
 foreach($conn->query('SELECT (AVG(tcs4)) AS total FROM seconda') as $row)
{
echo "   " , $row['total'] , " ";	
} 
?></td><td>
<?php 
include "connect.php";
 foreach($conn->query('SELECT (AVG(pre4)) AS total FROM seconda') as $row)
{
echo "   " , $row['total'] , " ";	
} 
?></td><td>
<?php 
include "connect.php";
 foreach($conn->query('SELECT (AVG(dc4)) AS total FROM seconda') as $row)
{
echo "   " , $row['total'] , " ";	
} 
?></td><td>
<?php 
include "connect.php";
 foreach($conn->query('SELECT (AVG(onts4)) AS total FROM seconda') as $row)
{
echo "   " , $row['total'] , " ";	
} 
?></td><td>
<?php 
include "connect.php";
 foreach($conn->query('SELECT (AVG(sk5)) AS total FROM seconda') as $row)
{
echo "   " , $row['total'] , " ";	
} 
?></td><td>
<?php 
include "connect.php";
 foreach($conn->query('SELECT (AVG(tcs5)) AS total FROM seconda') as $row)
{
echo "   " , $row['total'] , " ";	
} 
?></td><td>
<?php 
include "connect.php";
 foreach($conn->query('SELECT (AVG(pre5)) AS total FROM seconda') as $row)
{
echo "   " , $row['total'] , " ";	
} 
?></td><td>
<?php 
include "connect.php";
 foreach($conn->query('SELECT (AVG(dc5)) AS total FROM seconda') as $row)
{
echo "   " , $row['total'] , " ";	
} 
?></td><td>
<?php 
include "connect.php";
 foreach($conn->query('SELECT (AVG(onts5)) AS total FROM seconda') as $row)
{
echo "   " , $row['total'] , " ";	
} 
?></td></tr></table><input type="button" name="close" value="Home" onclick="fun()">
<script>
function fun(){
window.location.href("today.php");
}</script>
<input type="button" name="close" value="BACK" onclick="func()">
<script>
function func(){
window.location.href("secondaaa.php");
}</script>
</body></html>