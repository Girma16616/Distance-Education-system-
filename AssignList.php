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
  <script language="javascript">
  function check()
  {
   if(document.getElementById("stud_id").value == "")
   {
    alert("Firest Select  student id!!");
    document.getElementById("stud_id").focus();
    return false;
   }
     if(document.getElementById("depid").value =="")
   {
    alert('Firest Select your department id!!');
    document.getElementById("depid").focus();
    return false;
   }
     if(document.getElementById("course_code").value =="")
   {
    alert('Firest Select  your course code!!');
    document.getElementById("course_code").focus();
    return false;
   }
      if(document.getElementById("year").value =="")
   {
    alert('Enter your year!!');
    document.getElementById("year").focus();
    return false;
   }
   if(document.getElementById("semister").value =="")
   {
    alert('Firest Select your semister!!');
    document.getElementById("semister").focus();
    return false;
   }
   if(document.getElementById("credit_hour").value =="")
   {
    alert('Firest Select your credit_hour!!');
    document.getElementById("credit_hour").focus();
    return false;
   }
  }
 </script>
</head>
<body>
<table align=center width=1000px height= border="6">
<tr>
<td height=20px  colspan=4>
<img src="gt.png" width="140px" height="50" ><img src="gtc.png" width="1000px" height="50" ><img src="gt.png" width="140px" height="50" >
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
<h3><center>Assign Course to Student</center></h3>
<?php
 if(isset($_POST['save']))

  { 
	 @$depa=$_POST['department'];
     $coursecode=$_POST['course_name'];
	 $cour=$_POST['credit_hour'];
	 $bach=$_POST['bach'];	 
	 $semister=$_POST['semister'];
	 $year=$_POST['year'];
	 $even="#ccc";
	 $odd="#f5f5f5";
	 ?>
<center><form action="AssignStudent.php" method="post"  name="aform" onsubmit='return formValidation()'>
<table style="border:1px solid #336699;border-radius:0px;box-shadow:1px 5px 5px gray " width="690">
<input type="hidden" name="department" value="<?php echo $depa?>">
<input type="hidden" name="course_code" value="<?php echo $coursecode?>">
<input type="hidden" name="credit_hour" value="<?php echo $cour?>">
<input type="hidden" name="bach" value="<?php echo $bach?>">
<input type="hidden" name="year" value="<?php echo $year?>">
<input type="hidden" name="semister" value="<?php echo $semister?>">
<tr bgcolor="#F0FFFF"><th>StudentID</th><th>First Name</th><th>Father Name</th><th>Grand Father Name</th> </tr>
 <?php
      
 
//$qurey = "select * from  curriculem INNER JOIN student where  student.department=curriculem.department and  student.year=curriculem.year && student.simester=curriculem.semister and student.department='$depa'and student.simester='$semister' and student.year='$year'"; 
$qurey = "select * from  curriculem INNER JOIN student where  student.department=curriculem.department and  student.year=curriculem.year && student.simester=curriculem.semister and student.department='$depa'and student.simester='$semister' and student.year='$bach' group by student.stud_id"; 
$result=mysql_query($qurey);
$num=1;
while($row = mysql_fetch_array($result)) 
{
$exist=false;
  $assignedStudentList = "select stud_id from  student_course where depid='$depa' and semister='$semister' and year='$bach' and course_code='$coursecode'"; 
  $AssignedLists=mysql_query($assignedStudentList);
$bg=$odd;
if($num%2==0){
$bg=$even;
  }
$user_id = $row['stud_id'];
$c1=$row['course_code'];
$c2=$row['crdite_houre'];
$c3=$row['semister'];
$c4=$row['year'];
while($val=mysql_fetch_array($AssignedLists)) 
      {
 if($val['stud_id']==$user_id){
   $exist=true;
   break;
   }
 }
 if($exist){
 continue;}
 
?>
<tr style="background:<?php echo $bg;?>"><td>
<input type='checkbox' size='15px'  name="id[]" value="<?php echo $row['stud_id']; ?>"> <?php echo $row['stud_id']; ?></td>
<td><input type="hidden" size='15px' name="firstname" value="<?php echo $row['firstname'] ?>">
<?php echo $row['firstname'] ?>
</td>
<td><input type="hidden"     size='15px'> <?php echo $row['Middlename'] ?></td>
<td><input type="hidden"     size='15px'> <?php echo $row['lastname'] ?></td>
<?php
$num++;
 }//end of while loop
}//
?> 
<tr><td>&nbsp;</td><td>&nbsp;</td><td><input type="submit" name="save" value="Assign" Onclick="return check(this.form);" />&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;
<input type="reset" name="rest" value="Reset"></td></tr></table>
</form></center>
</td>
<td width=150px>
<table border=0 width=150px height="100" bgcolor=white>
<tr>
<td valign=top bgcolor=white>
<h2><center>
<font color="black" face="monotype corsiva" size="5">RADA College distance education Office  works for change!!</font><br>
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
RADA Collage Distance Eduction Office All Right are Reservd &copy; 2015 E.C. 
 &nbsp; &nbsp; &nbsp; &nbsp;
</font></td></tr></table>
</td>
</tr>
</table>
</bo ~dulla^@204~ 