<!DOCTYPE html>
<html>
<head>
	
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<style>
body{
background-color:mediumseagreen;
}
font{
color:green;
align:center;
}
</style>	
	
</head>


<body>

	
<div id="page-wrap">

		

        
<?php
  
$sk1 = $_POST['sk1'];
 
$tcs1= $_POST['tcs1'];
  
$pre1 = $_POST['pre1'];
 
$dc1= $_POST['dc1'];
 
$onts1 = $_POST['onts1'];
 
$sk2= $_POST['sk2'];
  
$tcs2 = $_POST['tcs2'];
 
$pre2= $_POST['pre2'];
  
$dc2 = $_POST['dc2'];
 
$onts2= $_POST['onts2'];
 
$sk3= $_POST['sk3'];
  
$tcs3 = $_POST['tcs3'];
 
$pre3= $_POST['pre3'];
  
$dc3 = $_POST['dc3'];
 
$onts3= $_POST['onts3'];
   
$sk4 = $_POST['sk4'];
 
$tcs4= $_POST['tcs4'];
  
$pre4 = $_POST['pre4'];
 
$dc4= $_POST['dc4'];
 
$onts4 = $_POST['onts4'];
 
$sk5= $_POST['sk5'];
  
$tcs5= $_POST['tcs5'];
 
$pre5= $_POST['pre5'];
  
$dc5 = $_POST['dc5'];
 
$onts5= $_POST['onts5'];
  

                  
  if(!empty($sk1) || !empty($tcs1) || !empty($pre1) || !empty($dc1) || !empty($onts1) || !empty($sk2) || !empty($tcs2) || !empty($pre2) || !empty($dc2) || !empty($onts2) || !empty($sk3) || !empty($tcs3) || !empty($pre3) || !empty($dc3) || !empty($onts3) || !empty($sk4) || !empty($tcs4) || !empty($pre4) || !empty($dc4) || !empty($onts4) || !empty($sk5) || !empty($tcs5) || !empty($pre5) || !empty($dc5) || !empty($onts5))
{
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
                   
                      $INSERT = "INSERT Into thirda (sk1,tcs1,pre1,dc1,onts1,sk2,tcs2,pre2,dc2,onts2,sk3,tcs3,pre3,dc3,onts3,sk4,tcs4,pre4,dc4,onts4,sk5,tcs5,pre5,dc5,onts5) values (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
                    
                    $stmt = $conn->prepare($INSERT);
                     $stmt->bind_param("iiiiiiiiiiiiiiiiiiiiiiiii",$sk1,$tcs1,$pre1,$dc1,$onts1,$sk2,$tcs2,$pre2,$dc2,$onts2,$sk3,$tcs3,$pre3,$dc3,$onts3,$sk4,$tcs4,$pre4,$dc4,$onts4,$sk5,$tcs5,$pre5,$dc5,$onts5);
                    $stmt->execute();
                   echo 'SUCCESS';
   
        }
$stmt->close();
$conn->close();
}
?>

<h2 align="center" style="color:blue;background:gray"><a href="today.php" align="center" >LOGOUT</a>  	
		
	


</h2></body>

</html>