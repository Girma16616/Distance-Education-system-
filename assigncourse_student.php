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
<li><a href="Addcurrculm.php" id="drop">Add Curriclum</a></li>
<li> <a href="Upload.php" id="drop">Upload Module</a></li>
<li><a href="#" link="white" >Assign </a>

<ul>
<li><a href="assign.php" link="white" >Assign Insturacor</a></li>
<li><a href="assigncourse_student.php" link="white" >Assign student</a></li>
</ul></li>
<li><a href="#" link="white" >Announcment</a>
      <ul>
<li><a href="new.php" link="white" >Post Announcment</a></li>
<li><a href="notice.php" link="white" >Post notice </a></li>
<li><a href="new2.php" link="white" >Delet Announcment</a></li>
		</ul>
		</li>
				<li><a href="#">View</a>
      <ul>
<!--<li><a href="rep11.php" >View Report</a></li>-->
<li><a href="viewcomment.php" >View Comments</a></li>
<li><a href="assigncourse.php" >View Assigned course</a></li>
<!---<li><a href="assign.php" link="white" >Assign Insturacor</a></li>-->

</ul>
</li>
<li><a href="changepassword5.php" >Change Password</a></li>   
<li><a href="logout.php" id="login">Logout (<?php echo"Hi&nbsp;&nbsp;&nbsp;";?><?php echo $_SESSION['b'];?>)</a></li>	
    </div>
</td>
</tr>
<td  valign="top" bgcolor="white">
<!--------body  --->
<h1><center>Assign Course to Student</center></h1>

<form method="post" action="AssignList.php" name="form" onsubmit='return formValidation()' >
<table bgcolor=gray valign="top" style="border:1px solid #336699;width:500px;height:350px;border-radius:15px;box-shadow:1px 10px 10px gray" align="center">

<tr><td><font size="4px"><b>Department:</b></font></td><td><select name="department"id="depid" style="width:210; height:30;">
 <?php 
 $query="select * from department";
 $result=mysql_query($query);
 while($row=mysql_fetch_array($result)){
 //$depid=$row['depid'];
  $depname=$row['depname'];
 echo"<option value='$depname'>$depname</option>";
 
 }
 
 
 ?></select></td></tr>
 
<tr><td><font size="4px"><b> Course Name:</b></font></td><td><select name="course_name"id="course_name" style="width:210; height:30;">
 <?php 
 
$query="select course_code,course_name from  curriculem";
$result=mysql_query($query);
while($row=mysql_fetch_array($result)){
 //$depid=$row['depid'];
$depname=$row['course_name'];
$courseCode=$row['course_code'];
 echo"<option value='$courseCode'>$depname</option>";
 
 }
 
 
 ?></select></td></tr>
<tr><td><font size="4px"><b>Credit Hour:</b></font></td><td><input type="number" name="credit_hour" id="credit_hour" style="width:210; height:30;" max='7' min='1' required></td></tr>
<tr><td><font size="4px"><b>Semister:</b></font></td><td><select name="semister" id="semister" style="width:210; height:30;">
    <option value="1">1st</option > 
    <option value="2">2nd</option>
    <option value="3">3rd</option>
</select></td></tr>
<tr><td><font size="4px"><b>Bach:</b></font></td><td><select name="bach" id="bach" style="width:210; height:30;">
  <option value="1">1st</option > 
  <option value="2">2nd</option>
  <option value="3">3rd</option>
    </td></tr> 
<tr><td><font size="4px"><b>Year:</b></font></td><td><select name="year" id="year" style="width:210; height:30;">
<?PHP 
$thiYear=date('Y');
for($i=2022;$i<=$thiYear;$i++){?>
  <option><?php echo$i; ?> </option > 
  <?php }?>
  
    </td></tr> 
 <tr><td colspan="2"><center><input value="Assign" name="save" type="Submit" Onclick="return check(this.form);"/><input value="Reset" type="Reset"></center></td></tr>
     </table>
     </form>   
<?php 
if(isset($_POST['save'])){
$studentid=$_POST['stud_id'];
$department=$_POST['department'];
//$dep=$_POST['department'];
$course1=$_POST['course_name'];
$coruse=$_POST['course_code'];
$c=$_POST['crdite_houre'];
$semister=$_POST['semister'];
$year=$_POST['year'];
mysql_select_db("cde", $conn);						
$sql="INSERT INTO  student_course VALUES('$_SESSION[a]','$studentid','$p2','$coruse','$semister','$year','$c')";

if (!mysql_query($sql,$conn))
  {
 echo'<p class="wrong">your detail is not correct</p>';
 echo' <meta content="2;assigncourse_student.php" http-equiv="refresh" />';
  }
  else
  {
echo'<p class="success">Successfully Registerd!!</p>';
echo' <meta content="2;assigncourse_student.php" http-equiv="refresh" />';
}}

?>
</td>
<td width=150px>
<table border=0 width=150px height="100" bgcolor=white>
<tr>
<td valign=top bgcolor=white>
<h2><center>
<font color="black" face="monotype corsiva" size="5">RADA distance Office  works for change!!</font><br>
<font color="white"><a href="debre.php"><iframe name="frame" width=300px height=405px src="date.php"></iframe><a></center></h2>
</td>
</tr>

</table>
</td>
</tr>

<tr>
<td colspan=3 bgcolor=gray>
<table align="center" bgcolor=""><tr><td><font face="Times New Roman" color="white" size="3">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
RADA College Distance Eduction Office All Right are Reservd &copy; 2015 E.C. 
 &nbsp; &nbsp; &nbsp; &nbsp;
</font></td></tr></table>
</td>
</tr>
</table>
</body>
</html>
