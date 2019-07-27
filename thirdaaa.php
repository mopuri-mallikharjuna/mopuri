<html> <head><style>
input[type=button]{
color:orange;
background:blue;
}
#main th.a{
background:green;
border:2px dotted aqua;
}
#main td.b{
color:orange;
border:1px solid black;
}
#main td.c{
color:yellow;
border:1px solid black;
}
</style></head><form action="today.php" method="POST">
<body style="background:dodgerblue;">
<h1 align="center" style="background:dodgerblue;color:orange;">RESULTS-MCA-III-A/S-2019</h1>
<table cellpadding="2" width="5%" height="60" align="center" background="gold" id="main"
cellspacing="1" style="border:2px dotted red;">

<th class="a">SUBJECT</th>
<th class="a">TOTAL</th>
<th class="a">AVERAGE</th>
<tr><td class="b">1.Cloud Computing</td><td class="c">
<?php
$host = "localhost";
                     $dbusername = "root";
                  $dbpassword = "";
                $dbname = "feedback";
               $conn = mysqli_connect($host, $dbusername, $dbpassword, $dbname);
                if(mysqli_connect_error())
       {
                 die('Connect Error ('. mysqli_connect_errno() .') '. mysqli_connect_error());
       }

  foreach($conn->query('SELECT (SUM(sk1+tcs1+pre1+dc1+onts1)) AS total FROM thirda') as $row)
{
echo "   " , $row['total'] , " ";	
} 
?></td><td class="c">
<?php
$host = "localhost";
                     $dbusername = "root";
                  $dbpassword = "";
                $dbname = "feedback";
               $conn = mysqli_connect($host, $dbusername, $dbpassword, $dbname);
                if(mysqli_connect_error())
       {
                 die('Connect Error ('. mysqli_connect_errno() .') '. mysqli_connect_error());
       }


foreach($conn->query('SELECT (AVG(sk1+tcs1+pre1+dc1+onts1)) AS total FROM thirda') as $row)
{
echo " " , $row['total'] , " ";	
} ?></td></tr><tr><td class="b">2.Software Testing</td><td class="c">
<?php
$host = "localhost";
                     $dbusername = "root";
                  $dbpassword = "";
                $dbname = "feedback";
               $conn = mysqli_connect($host, $dbusername, $dbpassword, $dbname);
                if(mysqli_connect_error())
       {
                 die('Connect Error ('. mysqli_connect_errno() .') '. mysqli_connect_error());
       }


 foreach($conn->query('SELECT (SUM(sk2+tcs2+pre2+dc2+onts2)) AS total FROM thirda') as $row)
{
echo " " , $row['total'] , " ";	
} ?></td><td class="c">
<?php
$host = "localhost";
                     $dbusername = "root";
                  $dbpassword = "";
                $dbname = "feedback";
               $conn = mysqli_connect($host, $dbusername, $dbpassword, $dbname);
                if(mysqli_connect_error())
       {
                 die('Connect Error ('. mysqli_connect_errno() .') '. mysqli_connect_error());
       }

foreach($conn->query('SELECT (AVG(sk2+tcs2+pre2+dc2+onts2)) AS total FROM thirda') as $row)
{
echo " " , $row['total'] , " ";	
} ?></td></tr><tr><td class="b">3.Fundamentals Of Datascience</td><td class="c">
<?php
$host = "localhost";
                     $dbusername = "root";
                  $dbpassword = "";
                $dbname = "feedback";
               $conn = mysqli_connect($host, $dbusername, $dbpassword, $dbname);
                if(mysqli_connect_error())
       {
                 die('Connect Error ('. mysqli_connect_errno() .') '. mysqli_connect_error());
       }

 foreach($conn->query('SELECT (SUM(sk3+tcs3+pre3+dc3+onts3)) AS total FROM thirda') as $row)
{
echo " " , $row['total'] , " ";	
}
?></td><td class="c">
<?php
$host = "localhost";
                     $dbusername = "root";
                  $dbpassword = "";
                $dbname = "feedback";
               $conn = mysqli_connect($host, $dbusername, $dbpassword, $dbname);
                if(mysqli_connect_error())
       {
                 die('Connect Error ('. mysqli_connect_errno() .') '. mysqli_connect_error());
       }

foreach($conn->query('SELECT (AVG(sk3+tcs3+pre3+dc3+onts3)) AS total FROM thirda') as $row)
{
echo " " , $row['total'] , " ";	
} ?></td></tr><tr><td class="b">4.Python Programming</td><td class="c">
<?php
$host = "localhost";
                     $dbusername = "root";
                  $dbpassword = "";
                $dbname = "feedback";
               $conn = mysqli_connect($host, $dbusername, $dbpassword, $dbname);
                if(mysqli_connect_error())
       {
                 die('Connect Error ('. mysqli_connect_errno() .') '. mysqli_connect_error());
       }

 foreach($conn->query('SELECT (SUM(sk4+tcs4+pre4+dc4+onts4)) AS total FROM thirda') as $row)
{
echo " " , $row['total'] , " ";	
} ?></td><td class="c">
<?php
$host = "localhost";
                     $dbusername = "root";
                  $dbpassword = "";
                $dbname = "feedback";
               $conn = mysqli_connect($host, $dbusername, $dbpassword, $dbname);
                if(mysqli_connect_error())
       {
                 die('Connect Error ('. mysqli_connect_errno() .') '. mysqli_connect_error());
       }

 foreach($conn->query('SELECT (AVG(sk4+tcs4+pre4+dc4+onts4)) AS total FROM thirda') as $row)
{
echo " " , $row['total'] , " ";	
} ?></td></tr><tr><td class="b">5.Software Project Management</td><td class="c">
<?php
$host = "localhost";
                     $dbusername = "root";
                  $dbpassword = "";
                $dbname = "feedback";
               $conn = mysqli_connect($host, $dbusername, $dbpassword, $dbname);
                if(mysqli_connect_error())
       {
                 die('Connect Error ('. mysqli_connect_errno() .') '. mysqli_connect_error());
       }

 foreach($conn->query('SELECT (SUM(sk5+tcs5+pre5+dc5+onts5)) AS total FROM thirda') as $row)
{
echo " " , $row['total'] , " ";	
} ?></td><td class="c">
<?php
$host = "localhost";
                     $dbusername = "root";
                  $dbpassword = "";
                $dbname = "feedback";
               $conn = mysqli_connect($host, $dbusername, $dbpassword, $dbname);
                if(mysqli_connect_error())
       {
                 die('Connect Error ('. mysqli_connect_errno() .') '. mysqli_connect_error());
       }

foreach($conn->query('SELECT (AVG(sk5+tcs5+pre5+dc5+onts5)) AS total FROM thirda') as $row)
{
echo " " , $row['total'] , " ";	
} ?></td></tr>
</table>
<input type="button" name="close" value="Home" onclick="fun()">
<script>
function fun(){
window.location.href("today.php");
}</script>
<input type="button" name="close" value="BACK" onclick="func()">
<script>
function func(){
window.location.href("res.php");
}</script>
<input type="button" name="close" value="next" onclick="funct()">
<script>
function funct(){
window.location.href("thirdaaaa.php");
}</script>
    </form>     
</body>
</html>