<?php
$username = $_POST['username'];
$roll = $_POST['roll'];
                if(!empty($username) || !empty($roll))
{
                     $host = "localhost";
                      $dbusername = "root";
                  $dbpassword = "";
                $dbname = "registration";
               $conn = mysqli_connect($host, $dbusername, $dbpassword, $dbname);
                if(mysqli_connect_error())
       {
                 die('Connect Error ('. mysqli_connect_errno() .') '. mysqli_connect_error());
       }
        else
        {
$sql="SELECT * FROM  registration WHERE username ='$username' and roll ='$roll' ";
$result = mysqli_query($conn,$sql);
                 
if(mysqli_num_rows($result)==1)
{
echo '<html><body bgcolor="mediumseagreen"><h1 align="center" style="background:dodgerblue;color:white;"><a href="rama.php">Click here to give feedback</a></h1></body></html>';
  $conn->close();
}
else 
{
echo '<html><body bgcolor="gray"><B>YOUR NOT A REGISTERED USER</B><a href="regi.php">Click here to Re-Login</a></body></html>';
}
}
}
