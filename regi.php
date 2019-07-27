<!Doc type html>
<html>
   
   <head>
      <title>Login Page</title>
      
      <style type = "text/css">
        
         label {
            font-weight:bold;
            width:100px;
            font-size:14px;
         }
         .box {
            border:#666666 solid 1px;
         }
input[type=submit]{
background:red;
color:green;
}
input[type=button]{
background:green;
color:slateblue;
}
input[type=reset]{
background:blue;
color:yellow;
}
#main td.a{color:black;}
#main td.b{color:black;}

      </style>

      
   </head>
   
   <body bgcolor="aqua" font-color="red"> 
<form action="vij.php" method="POST">
<h1 align="center" style="color:dodgerblue;background:red;">SVCE-2019</h1>
<table cellpadding="2" width="5%" height="60" align="center" style="background:gray;" id="main"
cellspacing="1" style="border:2px dotted red;">

<tr>
<td colspan=2>
<center><font size=4 color="green"><b>Student Registration Form</b></font></center>
</td>
</tr>

<tr>
<td class="a">username</td>
<td><input type="text" name="username" id="textname" size="30" required></td>
</tr>
<tr>
<td class="a">roll</td>
<td><input type="text" name="roll" id="textname" size="30" required></td>
</tr>
<tr>
<td class="b">Sex</td>
<td><input type="radio" name="sex" value="male" size="10">Male
<input type="radio" name="sex" value="Female" size="10">Female</td>
</tr>

<tr>
<td class="b">City</td>
<td><select name="City">
<option value="-1" selected>select..</option>
<option value="Tirupati">Tirupati</option>
<option value="Hyderabad">Hyderabad</option>
<option value="Bangalore">Bangalore</option>
<option value="Chennai">Chennai</option>
</select></td>
</tr>

<tr>
<td class="b">Course</td>
<td><select name="Course">
<option value="-1" selected>select..</option>
<option value="B.Tech">B.TECH</option>
<option value="MCA">MCA</option>
<option value="MBA">MBA</option>
<option value="BCA">BCA</option>
</select></td>
</tr>

<tr>
<td class="b">District</td>
<td><select name="District">
<option value="-1" selected>select..</option>
<option value="chittoor">chittoor</option>
<option value="kadapa">kadapa</option>
<option value="karnool">karnool</option>
<option value="Ananthapuramu">ananthapur</option>
<option value="nellore">nellore</option>
<option value="vizag">vizag</option>
<option value="guntur">guntur</option>
</select></td>

</tr>

<tr>
<td class="b">State</td>
<td><select Name="State">
<option value="-1" selected>select..</option>
<option value="Andhra Pradesh">ANDHRA PRADESH</option>
<option value="Telangana">TELANGANA</option>
<option value="Karnataka">KARNATAKA</option>
<option value="Tamilanadu">TAMILANADU</option>
</select></td>
</tr>
<tr>
<td class="b">PinCode</td>
<td><input type="text" name="pincode" id="pincode" size="30"></td>

</tr>
<tr >
<td class="b">EmailId</td>
<td><input type="text" name="emailid" id="emailid" size="30"></td>
</tr>

<tr>
<td class="b">DOB</td>
<td><input type="text" name="dob" id="dob" size="30"></td>
</tr>

<tr>
<td class="a">MobileNo</td>
<td><input type="text" name="MobileNo" id="MobileNo" size="30" required></td>
</tr>

<td><input type="reset"></td>
<td colspan="2"><input type="submit" value="submit"/></td>
</tr>
</table>

<center><input type="button" name="close" value="Home" onclick="fun()"></center>
<script>
function fun(){
window.location.href("today.php");
}</script>
    </form>         



<marquee direction="bottom" bgcolor="yellow">This webpage is developed by SVCE-MCA-2019 all copy rights in 2019 by the Google </marquee>
   </body>
</html>
 