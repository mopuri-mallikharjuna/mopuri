<html><head><style>input[type=button]{color:orange;background:red;}</style></head><body style="background:aqua;"><h1 align="center" style="color:orange;background:blue;"> 
CountForFeedback</h1><table align="center" style="background:gray;"><tr><td><center><b><u><b align="center" style="color:yellow;">THIRD-A:
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
$sql="select count('sk1') from thirda";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($result);
echo "$row[0]";
 
mysqli_close($conn);
?>
<a href="thirdaaa.php">---Students</a></b></u></center></td></tr><td>
<center><u><b align="center" style="color:yellow;">THIRD-B:
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
$sql="select count('sk1') from thirdb";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($result);
echo "$row[0]";
 
mysqli_close($conn);
?>
<a href="thirdbbb.php">---Students</a></b></u></center></td></tr><td>
<center><u><b align="center" style="color:yellow;">SECOND-A:
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
$sql="select count('sk1') from seconda";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($result);
echo "$row[0]";
 
mysqli_close($conn);
?>
<a href="secondaaa.php">---Students</a></b></u></center></td></tr><td>
<center><u><b align="center" style="color:yellow;">SECOND-B:
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
$sql="select count('sk1') from secondb";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($result);
echo "$row[0]";
 
mysqli_close($conn);
?>
<a href="secondbbb.php">---Students</a></b></u></center></td></tr><td>
<center><u><b align="center" style="color:yellow;">FIRST-A:
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
$sql="select count('sk1') from firsta";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($result);
echo "$row[0]";
 
mysqli_close($conn);
?>
<a href="firstaaa.php">---Students</a></b></u></center></td></tr><td>
<center><u><b align="center" style="color:yellow;">FIRST-B:
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
$sql="select count('sk1') from firstb";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($result);
echo "$row[0]";
 
mysqli_close($conn);
?>
<a href="firstbbb.php">---Students</a></b></u></center></td></tr></table>
<center><input type="button" name="close" value="Home" onclick="fun()"></center>
<script>
function fun(){
window.location.href("today.php");
}</script></body></html>

    


