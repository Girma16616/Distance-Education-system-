<?php
	include("connection.php");  
 session_start();
if(isset($_SESSION['User_Id']))
 {
  $mail=$_SESSION['User_Id'];
 } 
 else 
 {
 ?>
<script>
  alert('You Are Not Logged In !! Please Login to access this page');
  alert(window.location='login.php');
 </script>
 <?php
 }
 ?>
<html>
<head>
<link style="text/css" href="3.css" rel="stylesheet">

</head>
<body>
<table align=center width=1000px height= border="">
<tr>
<td height=20px  colspan=4>
<img src="2.jpg" width="120px" height="50" ><img src="ima/c12.png" width="1000px" height="50" ><img src="2.jpg" width="120px" height="50" >
</td>
</tr>
<tr>
<td  height=20px colspan=3 bgcolor=#737CA1 >
  <div id="dropdown">
  <li><a href="registrar.php">&nbsp;&nbsp;Home</a>
  <li><a href="#">Register</a>
  <ul>
  <li><a href="regcourse.php">&nbsp;&nbsp;Course</a>
  <li><a href="regdep.php">&nbsp;&nbsp;Department</a>
  <li><a href="registerstudent.php">&nbsp;&nbsp;Student</a>
   </ul>
	</li>   
   <li><a href="rep1.php"> Generate Report</a></li>
    
  <li><a href="#">View</a>
      <ul>
	    <li><a href="viewapplication.php">Applicante</a></li>
		<li><a href="viewstud.php">student profile</a></li>
		<li><a href="Viewcurriclum.php">Currculem</a></li>
		</ul>
		</li>	
				<li><a href="approve.php" link="white" >Approve Applicant</a>

		<li><a href="feedback2.php" link="white" >Give Comment</a>
		<li><a href="changepassword3.php" link="white" >Change Password </a>
		</li>		
       </div>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="logout.php" ><font color="white">Logout </font><font color=green>[<?php echo $_SESSION['a'];?>]</font></a>	   

</td>
</tr>
<td  valign="top" bgcolor="white">
<!--------body  --->
<h3 align="center"><font color="blue">Manage User Account<hr></font></h3>

<table align='center' border="1" bgcolor="#F0FFFF">
<tr>
<th style='height:30px;	color:#000;	font-weight:bold;background-color:#336699;'>
<font color='white' size='2'> photo</th>
<th style='height:30px;	color:#000;	font-weight:bold;background-color:#336699;'>
<font color='white' size='2'>Firstname name</th>
<th style='height:30px;	color:#000;	font-weight:bold;background-color:#336699;'>
<font color='white' size='2'>Middle Name</th>
<th style='height:30px;	color:#000;	font-weight:bold;background-color:#336699;'>
<font color='white' size='2'>Last Name</th>
<th style='height:30px;	color:#000;	font-weight:bold;background-color:#336699;'>
<font color='white' size='2'>Date Of Birth</th>
<th style='height:30px;	color:#000;	font-weight:bold;background-color:#336699;'>
<font color='white' size='2'>Sex</th>
<th style='height:30px;	color:#000;	font-weight:bold;background-color:#336699;'>
<font color='white' size='2'>Age</th>
<th style='height:30px;	color:#000;	font-weight:bold;background-color:#336699;'>
<font color='white' size='2'>Town</th>
<th style='height:30px;	color:#000;	font-weight:bold;background-color:#336699;'>
<font color='white' size='2'>Woreda</th>
<th style='height:30px;	color:#000;	font-weight:bold;background-color:#336699;'>
<font color='white' size='2'>Adress</th>
<th style='height:30px;	color:#000;	font-weight:bold;background-color:#336699;'>
<font color='white' size='2'>Email</th>
<th style='height:30px;	color:#000;	font-weight:bold;background-color:#336699;'>
<font color='white' size='2'>Department</th>
<th style='height:30px;	color:#000;	font-weight:bold;background-color:#336699;'>
<font color='white' size='2'>Program</th>
<th style='height:30px;	color:#000;	font-weight:bold;background-color:#336699;'>
<font color='white' size='2'>Phone</th>
<th style='height:30px;	color:#000;	font-weight:bold;background-color:#336699;'>
<font color='white' size='2'>Approve</th>
</tr>  
<?php
$result = mysql_query("SELECT * FROM application");
while($row = mysql_fetch_array($result))
  {
                $Photo=$_POST['photo'];
				$Firstname=$_POST['firstname'];
				$Middlename=$_POST['middlename'];
				$Lastname=$_POST['lastname'];
				$Birthdate=$_POST['birthdate'];
				$Sex=$_POST['sex'];
				$Age=$_POST['age'];
				$Town=$_POST['town'];
				$Woreda=$_POST['woreda'];
				$Adress=$_POST['adress'];
				$app=$_POST['email'];
				$Department=$_POST['department'];
				$Program=$_POST['program'];
				$Phone=$_POST['phone'];
?>
<tr>
<td><?php echo $Photo;?></td>
<td><?php echo $Firstname;?></td>
<td><?php echo $Middlename;?></td>
<td><?php echo $Lastname;?></td>
<td><?php echo $Birthdate;?></td>
<td><?php echo $Sex;?></td>
<td><?php echo $Age;?></td>
<td><?php echo $Town;?></td>
<td><?php echo $Woreda;?></td>
<td><?php echo $Adress;?></td>
<td><?php echo $Email;?></td>
<td><?php echo $Department;?></td>
<td><?php echo $Program;?></td>
<td><?php echo $Phone;?></td>
	
<?php
print("<td style='height:30px;'><a href = 'approve.php?key=".$app."'>
		<img src = 'edit.jpg' width='25px' height='25px' title='Edit' ></img></a></td>
		");?>

		</tr>
<?php
  }
print( "</table>");
mysql_close($conn);
?>
</td>
<td width=150px>
<table border=0 width=150px height="100" bgcolor=white>
<tr>
<td valign=top bgcolor=white>
<h2><center>
<font color="black" face="monotype corsiva" size="5">RADA College distance education  Office  works for change!!</font><br>
<font color="white"><a href="debre.php"><iframe name="frame" width=300px height=450px src="date.php"></iframe><a></center></h2>
</td>
</tr>

</table>
</td>
</tr>

<tr>
<td colspan=3 bgcolor=gray>
<table align="center" bgcolor=""><tr><td><font face="Times New Roman" color="white" size="3">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
RADA Collage Distance Eduction Office All Right are Reservd&copy; 2015 E.C.
 &nbsp; &nbsp; &nbsp; &nbsp;
</font></td></tr></table>
</td>
</tr>
</table>
</body>
</html>