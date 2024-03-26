<?php
include("connection.php");  
?>
<html>
<head>
<link style="text/css" href="3.css" rel="stylesheet">
 <script src="js/jquery.js"></script>
  <script src="js/jquery-3.3.1.js" type="text/javascript"></script>
 <script type="text/JavaScript" src="js/register.js"></script>
</head>
<body>
<table align=center width=1000px height= border="6">
<tr>
<td height=20px  colspan=4>
<table align =center width=10px height= border="" bgcolor=#737Cff>
		<tr>
<td height=20px  colspan=3>

<img src="rada.png" width="150px" height="140" >
</td>
<td>
	<img src="hh.png" width="935px" height="140" >
</td>
<td>
	<img src="ca.jpg" width="193px" height="140" >

</td>

</tr>
</table>
</td>
</tr>
<tr>
<td  height=20px colspan=3 bgcolor=#737CA1 >
  <div id="dropdown">
   <li><a href="index.php">Home</a></li>
   <li><a href="About.php">About Us</a></li>
   <li><a href="register.php">Apply</a></li>
  <li><a href="#">Departments</a>
      <ul>
	    <li><a href="Accounting.php">Accounting</a></li>
		<li><a href="Managment.php">Managment</a></li>
		<li><a href="Economics.php">Economics</a></li>		  
		</ul>
	
	<li><a href="Contact.php">Contact us</a>
	</li>
	<li><a href="feedback.php">Feedback</a>
	</li>
	<li><a href="help.php">Help</a>
	</li>
	</li>
	<li><a href="new1.php">Announcement</a></li>
	<li><a href="login.php">Login</a></li>

	 </div>
	 
</td>
</tr>
<tr>
<td  height=250px width=100px bgcolor="#E5E4E2" valign=top>
<table   bgcolor="#E5E4E2" border=0  width="150" height="400" class="menu-bar" align="center">
<tr >
<td width="110" height="20"><b><font color="white">

<tr>
 <td width="150" height="20">
 <a href="regulation.php" id="drop"><b>Rule and Regulation</b></a></td>
</tr>

<tr>
<td>
<img src="b3.gif" width="200" height="150">
<img src="reg.jpg" width="200" height="150">

    </td>
   </tr>
   </table>
</td>
<!--Body-->
<td bgcolor="white" valign="top" height="520">
<?php

if(isset($_POST['register'])){
$photo=$_POST['photo'];
$grad10=$_POST['grade'];
$firstname=$_POST['firstname'];
$middlename=$_POST['middlename'];
$lastname=$_POST['lastname'];
$dateofbirthe=$_POST['birthdate'];
$sex=$_POST['sex'];
//$age=$_POST['age'];
$town=$_POST['town'];
$woreda=$_POST['woreda'];
$address=$_POST['adress'];
$email=$_POST['email'];
$department=$_POST['department'];
$phone=$_POST['phone'];
$status='0';
$semister=$_POST['semister'];
$year=$_POST['year'];
$select="select start_date ,end_date from date";
$ttt=mysql_query($select)or die (mysql_error());
    while($row = mysql_fetch_array($ttt))
	{
	@$date1 = $row['start_date'];
	@$date2= $row['end_date'];
    }
      $current_date = date('Y-m-d');
	  
      if ($current_date >= @$date1 && @$date2>=$current_date)
        {	  

$reg=mysql_query("insert into application  values('','$photo','$grad10','$firstname','$middlename','$lastname','$dateofbirthe','$sex','$town','$woreda','$address','$email','$department','$phone','','$semister','$year')");
if($reg){	
echo "<b>'<CENTER><font color='green' size=4px> successfully Apllied for registration !!</center></b>";
echo'<meta content="3;register.php" http-equiv="refresh"/>';

}
else
{
echo "information not correct pleas try again!!";
echo'<meta content="3;register.php" http-equiv="refresh"/>';
			}
			}
			else{
echo"<font size='5px' color='red'>Sorry the Registeration date was already passed</font>";
echo' <meta content="10;register.php" http-equiv="refresh" />';
         }
		 
		 
mysql_close($conn);

}
?>
<h3> <center>Current student registration form</center></h3>
<li>Click here for <a href="register.php">New Student Apply form</a></li>
<table style="border:2px solid #336699;width:710px;height:415px;border-radius:15px;" align="center" bgcolor="#E5E4E2">
<form action="register.php" method="post" id="rform" name="aform" onsubmit='return formValidation()'>
<i ><span class="error_grade" id="grade_error_message"></span></i ></td></tr>
<tr><td><b>First Name:</b></td><td><input type="text" name="firstname"   id="firstname" placeholder="First Name" style="width:245; height:34;" pattern="[a-z,A-Z]{1,15}">
<i ><span class="error_fname" id="fname_error_message"></span></i ></td></tr>
 <tr><td><b>Middle Name:</b></td><td><input type="text" name="middlename" id="middlename" style="width:245; height:34;" pattern="[a-z,A-Z]{1,15}">
<i ><span class="error_mname" id="mname_error_message"></span></i ></td>
<tr><td><b>Last Name:</b></td><td><input type="text" name="lastname"id="lastname" size="20%" style="width:245; height:34;"  pattern="[a-z,A-Z]{1,15}">
<i ><span class="error_lname" id="lname_error_message"></span></i ></td></tr>
<tr><td><b>Birth date:</b></td><td><input type="date" name="birthdate"   id="birthdate" size="20%" max="2005-01-01" style="width:245; height:34;">
<i ><span class="error_birthdate" id="birthdate_error_message"></span></i ></td></tr>
<tr><td><font color=""><b>Sex:&nbsp;</b></td><td><select name="sex" id="sex" style="width:245; height:34;">
<option>select Gender</option>
<option>male</option>
<option>female</option>
</select><i><span class="error_sex" id="sex_error_message"></span></i></td></tr>
<tr><td><b>Town:</b></td><td><input type="text" name="town" id="town" size="20%" style="width:245; height:34;" pattern="[a-z,A-Z]{1,15}">
<i ><span class="error_tname" id="tname_error_message"></span></i ></td></tr>
<tr><td><b>Woreda:</b></td><td><input type="text" name="woreda"  id="woreda" size="20%" style="width:245; height:34;">
<i ><span class="error_wname" id="wname_error_message"></span></i ></td></tr>
<tr><td><b>Address:</b></td><td><input type="text" name="adress" id="adress" size="20%" style="width:245; height:34;">
<i ><span class="error_aname" id="aname_error_message"></span></i ></id></tr>
<tr><td><b>Email:</b></td><td><input type="text" name="email"    id="email" size="20%" style="width:245; height:34;">
<i ><span class="error_ename" id="ename_error_message"></span></i ></td></tr>
<tr><td><font color=""><b>Department:&nbsp; &nbsp; &nbsp;</b></td>
<td><select name="department" id="dep"color="red" style="width:245;height:34;" >
<option>Select department</option>
<option>Accounting</option>
<option>Managment</option>
<option>Economices</option>
</select><i><span class="error_dep" id="dep_error_message"></span></i></td></tr>
<tr><td><b>Phone No:</b></td><td><input type="text" name="phone" value="+251"  id="phone" size="20%" onkeyup="numbersOnly(this)" style="width:245; height:34;">
<i ><span class="error_phone" id="phone_error_message"></span></i ></td></tr>
<tr><td><font color=""><b>semester:</b></td><td><select name="semister" id="semister" style="width:245; height:34;">
<option>select semester</option>
<option value="1">1st</option>
<option value="2">2nd</option>

</select><i><span class="error_sename" id="sename_error_message"></span></i></td></tr>
<tr><td><font color=""><b>year:</b></td><td><select name="year" id="year" style="width:245; height:34;">
<option>select year</option>
<?PHP 
for($i=1;$i<=4;$i++){?>
  <option><?php echo$i; ?> </option > 
  <?php }?>
</select><i><span class="error_yname" id="yname_error_message"></span></i></select></td></tr><br>
</td></tr>
<tr><td>&nbsp;</td><td><br><br><input type="submit" name="register" value="Apply"  style="width:180; height:34;" Onclick="return check(this.form);" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="RESET" name="rest" value="Reset" bgcolor="RED" style="width:180; height:34;"></td></tr>
</form>
</table>
</td>
<td width=150px>
<table border=0 width=150px height="100" bgcolor=white>
<tr>
<td valign=top bgcolor=white>
<h2><center>
<font color="black" face="monotype corsiva" size="5">RADA College distance education Office  works for change!!</font><br>
<font color="white"><iframe name="frame" width=350px height=100px src="date.php"></iframe><a></center></h2>
	<b>Please register before the deadline !!</b>
<font color="white"><iframe name="frame" width=390px height=300px src="dll.jpg"></iframe><a>

</center></h2>

</td>
</tr>

</table>
</td>
</tr>
<tr>
<td colspan=3 bgcolor=gray>

<table align="center" bgcolor=""><tr><td><font face="Times New Roman" color="white" size="3">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
RADA College Collage Distance Eduction Office All Right are Reservd &copy; 2015 E.C. 
&nbsp; &nbsp; &nbsp; &nbsp;
</font></td></tr></table>
</td>
</tr>
</table>
</body>
</html>
</html
