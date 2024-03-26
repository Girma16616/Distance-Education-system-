
<html>
<head>
<link style="text/css" href="3.css" rel="stylesheet">

</head>
<body>
<table align=center width=1000px height= border="6" bgcolor="#E5E4E2">
<tr>
<td height=20px  colspan=4>

<img src="2.jpg" width="120px" height="100" ><img src="1.jpg" width="1000px" height="100" ><img src="2.jpg" width="120px" height="100" >
</td>

</tr>
<tr>
<td  height=20px colspan=3 bgcolor=#737CA1 >
  <div id="dropdown">
   <li><a href="index.php">Home</a></li>
   <li><a href="About.php">About as</a></li>
   <li><a href="register.php">Apply to Register</a></li>
  <li><a href="#">Departments</a>
      <ul>
	    <li><a href="Accounting.php">Accounting</a></li>
		<li><a href="Managment.php">Managment</a></li>
		<li><a href="Marketing.php">Marketing Managment</a></li>
		<li><a href="Economics.php">Economics</a></li>		  
		<li><a href="English.php">English</a></li>
        <li><a href="Mathematics.php">Mathematics</a></li>
        <li><a href="Educational.php">Educational Planning and managment</a></li>
		</ul>
		</li>	
	<li><a href="#">Login</a>
	   <ul>
		<li><a href="login.php">&nbsp;&nbsp;Admin</a>
		<li><a href="login.php">&nbsp;&nbsp;Instructor</a>
		<li><a href="login.php">&nbsp;&nbsp;Registrar</a>
		<li><a href="login.php">&nbsp;&nbsp;Student</a></li>	
		<li><a href="login.php">&nbsp;&nbsp;Coordinator</a></li>
		<li><a href="login.php">&nbsp;&nbsp;DeP-Head</a></li>
 </ul>
	</li>
	<li><a href="Contact.php">Contact as</a>
	</li>
	<li><a href="feedback.php">Feedback</a>
	</li>
	<li><a href="help.php">Help</a>
	</li>
	</li>
	

</div>
<li><a style="font-size:15px"href="new.php">Anounncment</a>
	 <font size="2">Hi &nbsp;<a style="font-size:25px"href="logout.php" id="login">Logout</a> </font>
	 
	 </div>
</td>
</tr>
<tr>
<td  height="100%" width=250px bgcolor="#565051" valign=top>
<table   bgcolor="#565051" border="0"  width="200" height="110%" class="menu-bar" align="center">
<tr>
 <td width="150" height="20">
 <a href="assignmentsubmit1.php" id="drop"><b>Upload Assigment</b></a></td>
</tr>
<tr></br><br>
 <td width="150" height="20">
 <a href="assignmentdownload.php" id="drop"><b>Download Assigment</b></a></td></tr>
</tr></br><br>
<tr>
 <td width="150" height="20">
 <a href="result.php" id="drop"><b>ADD Result</b></a></td></tr>
 <tr><td width="150" height="20">
 <a href="update.php" id="drop"><b>Update Student Result</b></a></td>
</tr>
 <tr><td width="150" height="20">
 <a href="exam.php" id="drop"><b>prepare exam quation</b></a></td>
</tr> 
<tr >
<td width="110" height="20"><b><font color="white">
 <a href="changepassword1.php" id="drop"><b>Change Password</b></a></td>
</tr>

  
<tr>
<td>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
	 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
	 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
	 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
	 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
	 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
	 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
	 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
	 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
	 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
	 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
	 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;

    </td>
   </tr>
   </table>
</td>
<td  valign="top">
<!--------body  --->
<br><br>
<h2 align="center">Department Registation page</h2>
<br>
<script type='text/javascript'>
function formValidation(){
//assign the fields
       var courseId=document.getElementById('courseId');
	    var courseId=document.getElementById('semister');
		 var courseId=document.getElementById('year');
		  var courseId=document.getElementById('courseId');
		   var courseId=document.getElementById('courseId');
	
	
if(isAlphabet(fname, "please enter Your Department name in letters only")){
if(lengthRestriction(fname, 3, 30,"for your First name")){
if(isAlphabet(lname, "please enter Your Department ID")){
if(lengthRestriction(lname, 3, 30,"for your Department ID")){
{
	return true;
	}}
	}
	}
	}
	
return false;
		
}	
function isAlphabet(elem, helperMsg){
	var alphaExp = /^[a-zA-Z]+$/;
	if(elem.value.match(alphaExp)){
		return true;
	}else{
		alert(helperMsg);
		elem.focus();
		return false;
	}
}

function emailValidator(elem, helperMsg){
	var emailExp = /^[\w\-\.\+]+\@[a-zA-Z0-9\.\-]+\.[a-zA-z0-9]{2,4}$/;
	if(elem.value.match(emailExp)){
		return true;
	}else{
		alert(helperMsg);
		elem.focus();
		return false;
	}
}
function isNumeric(elem, helperMsg){
	var numericExpression = /^[0-9]+$/;
	if(elem.value.match(numericExpression)){
		return true;
	}else{
		alert(helperMsg);
		elem.focus();
		return false;
	}
}
function lengthRestriction(elem, min, max, helperMsg){
	var uInput = elem.value;
	if(uInput.length >= min && uInput.length <= max){
		return true;
	}else{
		alert("Please enter between " +min+ " and " +max+ " characters" +helperMsg);
		elem.focus();
		return false;
	}
}
function isAlphanumeric(elem, helperMsg){
	var alphaExp = /^[0-9a-zA-Z]+$/;
	if(elem.value.match(alphaExp)){
		return true;
	}else{
		alert(helperMsg);
		elem.focus();
		return false;
	}
}
function isAlphabet(elem, helperMsg){
	var alphaExp = /^[a-zA-Z]+$/;
	if(elem.value.match(alphaExp)){
		return true;
	}else{
		alert(helperMsg);
		elem.focus();
		return false;
	}
}
	</script>




<?php
include('$con.php');

$sem= $_POST['course_id'];
$course= $_POST['sem_id'];
$year= $_POST['examtype'];
$seat= $_POST['duration'];
$set= $_POST['declard'];
$cours= $_POST['status_tt'];
mysql_query("INSERT INTO exam_master (course_id, sem_id, examtype, duration, declard, status_tt)
VALUES ('$sem', '$course', '$year', '$seat', '$set', '$cours')")or die(mysql_error());
header('location:addexam.php');                                  
?>
<form action="addexam.php" method="POST" onsubmit='return formValidation()'>
<table style="border:1px solid #336699;width:450px;height:250px;border-radius:15px;box-shadow:1px 10px 10px gray" align="center">
<tr><td><font color="red"></font>course ID</td><td><input type="text" name="courseID" required id="CourseID"/></td></tr>
<tr><td><font color="red"></font>Simster</td><td><input type="text" name="sem_id" required id="semister"/></td></tr>
<tr><td><font color="red"></font>Year</td><td><input type="text" name="year" required id="year"/></td></tr>
<tr><td><font color="red"></font>Duration</td><td><input type="text" name="Duration" required id="Dration"/></td></tr>
<tr><td><font color="red"></font>declared</td><td><input type="text" name="declared" required id="semister"/></td></tr>
<tr><td>&nbsp;</td><td><input type="submit" name="save" value="Register"/> <input type='reset' value='Reset'></td>

</table>
</form>

</td>