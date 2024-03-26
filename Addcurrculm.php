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
 <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  <script src="JS/jquery-3.3.1.js" type="text/javascript"></script>
 <script type="text/JavaScript" src="js/addcurriclum.js"></script>
  <script language="javascript">
  function check()
  {
   if(document.getElementById("department").value == "")
   {
    alert("Select your department !!");
    document.getElementById("department").focus();
    return false;
   }
     if(document.getElementById("course_name").value =="")
   {
    alert('First Enter your course_name!');
    document.getElementById("course_name").focus();
    return false;
   }
      if(document.getElementById("course_code").value =="")
   {
    alert('First Enter your course_code!');
    document.getElementById("course_code").focus();
    return false;
   }
     if(document.getElementById("crdite_houre").value =="")
   {
    alert('First Enter crdite_houre im numbers only!');
    document.getElementById("crdite_houre").focus();
    return false;
   }
      if(document.getElementById("Pre_requst").value =="")
   {
    alert('First enter Pre_requst!!');
    document.getElementById("Pre_requst").focus();
    return false;
   }
       if(document.getElementById("semister").value =="")
   {
    alert('First enter semister!!');
    document.getElementById("semister").focus();
    return false;
   }
       if(document.getElementById("year").value =="")
   {
    alert('First enter year!!');
    document.getElementById("year").focus();
    return false;
   }
  }
 </script>
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
<h2 align="center"><b><hr color=green><font color="blue"> Add Curriculum </font></b></h2>

<?php
if(isset($_POST['save']))
 {
$department=$_POST['department'];
$course_name=$_POST['course_name'];
$course_code=$_POST['course_code'];
$Crdite_houre=$_POST['crdite_houre'];
$Pre_requst=$_POST['Pre_requst'];
$Semister=$_POST['semister'];
$year=$_POST['year'];
mysql_select_db("cde", $conn);
						
$sql="INSERT INTO  curriculem VALUES('$_SESSION[a]','$department','$course_name','$course_code','$Crdite_houre','$Pre_requst','$Semister','$year')";

if (!mysql_query($sql,$conn))
  {
  
     echo'<p class="wrong">your detail is not correct</p>';
     echo' <meta content="4;Addcurrculm.php" http-equiv="refresh" />';

  }
  
  else
  {
  echo'<p class="success">Successfully Registerd!!</p>';
echo'<meta content="4;Addcurrculm.php" http-equiv="refresh" />';
}}
mysql_close($conn)


?>

<form action="Addcurrculm.php" method="POST"name="forms"id="adform" onsubmit='return formValidation()'>
<table style="border:1px solid #336699;width:500px;height:250px;border-radius:15px;box-shadow:1px 10px 10px gray" align="center">
<tr><td><font color=""><b>Department:&nbsp; &nbsp; &nbsp;</b></td >
<td><select name="department" id="dep"color="red" style="width:210;height:30;" >
<option>Select department</option>
<option>Accounting</option>
<option>Managment</option>
<option>Economices</option>
 <td><span id="dep_error_message"></span></td></tr>
<tr><td><font color="red">*</font><b>Course Name</b></td><td><input type="text" name="course_name"  id="course_name" style="width:210; height:30;"/>
<i ><span id="Course_error_message"></span></i ></td></tr>
<tr><td><font color="red">*</font><b>Course Code</b></td><td><input type="text" name="course_code"  id="course_code" style="width:210; height:30;"/>
<i ><span id="Code_error_message"></span></i ></td></tr>
<tr><td><font color="red">*</font><b>Credite Houre</b></td><td><input type="text" name="crdite_houre" id="crdite_houre" style="width:210; height:30;"title='Enter Beteewn 1 and 10 for credit hour' min="1" max='10' >
<i ><span id="crdite_error_message"></span></i ></td></tr>
<tr><td><font color="red">*</font><b>Pre Requst</b></td><td><input type="text" name="Pre_requst"  id="Pre_requst" style="width:210; height:30;"/>
<i ><span id="requst_error_message"></span></i ></td></tr>
<td><font color="red">*</font><b>semester:</b></td><td><select name="semister" id="semister" style="width:210; height:30;">
<option>select semester</option>
<option value="1">I</option>
<option value="2">II</option>
</select><i><span id="semis_error_message"></span></i></td></tr>
 <td><font color="red">*</font><font color=""><b>year:</b></td><td><select name="year" id="year" style="width:210; height:30;">
<option>select year</option>
<option value="1">1st</option>
<option value="2">2nd</option>
<option value="3">3rd</option>
</select><i><span id="yea_error_message"></span></i></select></td></tr><br>
  </tr> <tr><td>&nbsp;</td><td><input type="submit" name="save" value="Add Here" Onclick="return check(this.forms);"/><input type="reset" name="save" value="Reset"/></td>
</table>
</form>

</td>

<td width=150px>
<table border=0 width=150px height="100" bgcolor=white>
<tr>
<td valign=top bgcolor=white>
<h2><center>
<font color="black" face="monotype corsiva" size="5">RADA College Distance Education Office  works for change!!</font><br>
<font color="white"><iframe name="frame" width=350px height=150px src="date.php"></iframe><a></center></h2>
<font color="white"><iframe name="frame" width=350px height=220px src="a.jpg"></iframe><a></center></h2>
</td>
</tr>

</table>
</td>
</tr>

<tr>
<td colspan=3 bgcolor=gray>

<table align="center" bgcolor=""><tr><td><font face="Times New Roman" color="white" size="3">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
RADA College Distance Eduction Office All Right are Reserved &copy; 2015 E.C. 
&nbsp; &nbsp; &nbsp; &nbsp;
</font></td></tr></table>
</td>
</tr>
</table>
</body>
</html>