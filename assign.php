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
   if(document.getElementById("depid").value == "")
   {
    alert("Firest Select your department id!!");
    document.getElementById("depid").focus();
    return false;
   }
     if(document.getElementById("ins_id").value =="")
   {
    alert('Firest Select your instructor id!!');
    document.getElementById("ins_id").focus();
    return false;
   }
     if(document.getElementById("course_code").value =="")
   {
    alert('Firest Select  your course code!!');
    document.getElementById("course_code").focus();
    return false;
   }
      if(document.getElementById("credit_houre").value =="")
   {
    alert('Enter your credit_houre!!');
    document.getElementById("credit_houre").focus();
    return false;
   }
   if(document.getElementById("semister").value =="")
   {
    alert('Firest Select your semister!!');
    document.getElementById("semister").focus();
    return false;
   }
   if(document.getElementById("year").value =="")
   {
    alert('Firest Select your year!!');
    document.getElementById("year").focus();
    return false;
   }
  }
 </script>
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
<!--------body  --->
<td  valign="top" bgcolor="white">
<h2 align="center"><b><hr color=green><font color="blue">Assign course to Instructor</font></b></h2>
<form method="post" action="assign.php"name="form" onsubmit='return formValidation()' >
 <table bgcolor=gray valign="top" style="border:1px solid #336699;width:500px;height:350px;border-radius:15px;box-shadow:1px 10px 10px gray" align="center">
<tr><td><b>Department </b></td><td><select name="depname" id="depname" style="width:210; height:30;" required>
 <option></option>
 <?php 
 $query="select depname from department";
 $result=mysql_query($query);
 while($row=mysql_fetch_array($result)){
 $depname=$row['depname'];
 echo"<option>$depname</option>";
  }
 ?></select></td></tr> 
    <tr><td><b>Insturactor </b></td><td><select name="ins_id" id="ins_id" style="width:210; height:30;" required>
 <option></option>
 <?php 
 $query="select * from account where accounttype='Instructor'";
 $result=mysql_query($query);
 while($row=mysql_fetch_array($result)){
 $ins_id=$row['User_Id'];
 $fname=$row['fname'];
 echo"<option value='$ins_id'>$fname</option>";
 } 
 ?></select></td></tr>
   <tr><td><b>Course_code</b></td><td><input type=""text" name="course_code" id="course_code" style="width:210; height:30;" required>
</td></tr>
<tr><td><b>Credit_houre:</b></td><td><input name="credit_houre" id="credit_houre" type="number" max='10' min='1' style="width:210; height:30;"></td></tr>
<tr><td><b>Semester:</b></td><td><select name="semister" id="semister" style="width:210; height:30;">
 <option value="1">1st</option > 
 <option value="2">2nd</option>
</select>
</td></tr>
<tr><td><font size="4px"><b>Batch:</b></font></td><td><select name="year" id="year" style="width:210; height:30;">
<?PHP 

for($i=1;$i<=3;$i++){?>
  <option><?php echo$i; ?> </option > 
  <?php }?>
  
    </td></tr>    
<tr><td colspan="2"><center><input value="Assign" name="Asigin" type="Submit" Onclick="return check(this.form);" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input value="Reset" type="Reset">
</center></td></tr></table></form>
<?php 
if(isset($_POST['Asigin'])){
$p2=$_POST['depname'];
$ps=$_POST['ins_id'];
$p1=$_POST['course_code'];
$p3=$_POST['credit_houre'];
$semister=$_POST['semister'];
$year=$_POST['year'];
mysql_select_db("cde", $conn);      
$sql="INSERT INTO assign_instrctur_course VALUES('$_SESSION[a]','$p2','$ps','$p1','$p3','$year','$semister')";
if(!mysql_query($sql))
  {
 echo'<p class="wrong">your detail is not correct</p>';
 echo' <meta content="4;assign.php" http-equiv="refresh" />';
  }
  else
  {
echo'<center><p class="success">Successfully Assigned!!</p>';
echo' <meta content="4;assign.php" http-equiv="refresh" />';
}
 mysql_close($conn);
    
}
?>  
</td>
<td width=150px>
<table border=0 width=150px height="100" bgcolor=white>
<tr>
<td valign=top bgcolor=white>
<h2><center>
<font color="black" face="monotype corsiva" size="5">RADA College distance Office  works for change!!</font><br>
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
</body>
</html>
