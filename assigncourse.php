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
<!--------body  --->
<td  valign="top" bgcolor="white">
<br><br>
<table bgcolor="#F0F8FF"  style="border:1px solid #336699;width:450px;height:15px;border-radius:15px;box-shadow:1px 10px 10px gray" align="center">
<tr>
<td>
<h3><center>View Assigned course<center></h3>
<form action="assigncourse.php" method="post"  onsubmit="return Form1_Validator(this)" name="Form1">
<label><font size="4px">Department</font></label>
 <select name="department" id="department">
  <option>Accounting</option>
  <option>Managment</option>
  <option>Economices</option>
  </select>
 <input type="submit" value="Search" name="save" style="font-size:16px" align="center"><br>

</form>
</tr></td></table>

<?php
/* header("Content-Type:application/msword");
    header("Expires: 0");
    header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
    header("content-disposition: attachment;filename=report.docx");
//include("rep1.php");*/
$con=mysql_connect("localhost","root","") or die ("unable to connect");
$db=mysql_select_db("cde",$con);
if(isset($_POST['save'])){
@$dept=$_POST['department']; 
$rs = mysql_query("SELECT  course_name,course_code,crdite_houre,Pre_requst,semister,year From curriculem where department='{$dept}'  ");

echo"<table border='0' align='center'><tr><td><br><br>";
print "In  ".$dept." Department  the following Course are Assigend  : ".'<br><br>';
$r = mysql_query("SELECT  course_name,course_code,crdite_houre,Pre_requst,semister,year FRom curriculem where department='{$dept}' ");

print"<table border='2' width='655'  bgcolor='' align='center' >";
print"<tr color='green'>";
print"<th>course_name</th>";
print"<th>course_code</th>";
print"<th>crdite_houre</th>";
print"<th>Pre_requst </th>";
print"<th>semister</th>";
print"<th>year </th>";

print"</tr>";
$num=1;
while($row = mysql_fetch_array($r))
  {
  $even="#ccc";
 $odd="#f5f5f5";
  $bg=$odd;
if($num%2==0){
$bg=$even;
  }
    print ("<tr>");
 print ("<td>" . $row['course_name'] . "</td>"); 
 print ("<td>" . $row['course_code'] . "</td>"); 
 print ("<td>" . $row['crdite_houre'] . "</td>");
 print ("<td>" . $row['Pre_requst'] . "</td>");
 print ("<td>" . $row['semister'] . "</td>");
 print ("<td>" . $row['year'] . "</td>");
  print ("</tr>");
  }
print( "</table>");

mysql_close($conn);
echo"</tr>";
echo"</td>";
echo"</table>";
}
?>
</td>

<td width=150px>
<table border=0 width=150px height="100" bgcolor=white>
<tr>
<td valign=top bgcolor=white>
<h2><center>
<font color="black" face="monotype corsiva" size="5">RADA College  Distance Education Office  works for change!!</font><br>
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
