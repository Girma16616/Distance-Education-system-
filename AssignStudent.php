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
    alert("Firest Select your student id!!");
    document.getElementById("stud_id").focus();
    return false;
   }
     if(document.getElementById("course_code").value =="")
   {
    alert('Firest Select your course code!!');
    document.getElementById("course_code").focus();
    return false;
   }
     if(document.getElementById("year").value =="")
   {
    alert('Firest Select  your year!!');
    document.getElementById("year").focus();
    return false;
   }
      if(document.getElementById("simester").value =="")
   {
    alert('Select your simester!!');
    document.getElementById("simester").focus();
    return false;
   }
   if(document.getElementById("credit_hour").value =="")
   {
    alert('Firest Enter your credit_hour!!');
    document.getElementById("credit_hour").focus();
    return false;
   }
   if(document.getElementById("assignment").value =="")
   {
    alert('Firest Enter your assignment Result!!');
    document.getElementById("assignment").focus();
    return false;
   }
    if(document.getElementById("final").value =="")
   {
    alert('Firest Enter your final Result!!');
    document.getElementById("final").focus();
    return false;
   }
  }
 </script>
</head>
<body>
<table align=center width=1000px height= border="6">
<tr>
<td height=20px  colspan=4>
<img src="rada.png" width="150px" height="140" >
</td>
<td>
  <img src="hh.png" width="935px" height="140" >
</td>
<td>
  <img src="ca.jpg" width="193px" height="140" >
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
</tr><td bgcolor="white">
<?php
 $insert=0;
if(isset($_POST['save']))
  {    
    @$UserID=$_POST['id'];
	$dep=$_POST['department'];
    $coursecode=$_POST['course_code'];
	$course=$_POST['credit_hour'];
	$bach=$_POST['bach'];		 
    $year=$_POST['year'];
	$semister=$_POST['semister'];
	if(sizeof(@$UserID)>0){
	mysql_select_db("my_db", $conn);
	foreach($UserID as $key)
	{
  $sql="insert into student_course values('$_SESSION[a]','$key','$dep','$coursecode','$course','$year','$bach','$semister')";
	     if(mysql_query($sql,$conn)){
             $insert=1;
		        }
				
           }//end of foreach 
		    if($insert!=0){
        echo $suceess="<font color='green' size='6px'>Great Successfully Assigned</font>";
		 echo' <meta content="2;assigncourse_student.php" http-equiv="refresh" />';     
		  }
      else{
       echo $falir="Failur to Registere because of internal problem";
	   //echo' <meta content="2;assigncourse_student.php" http-equiv="refresh" />';
          }
		   
		   
		   }//END OF if size of student 
           else{
        	echo "please first select students first";
			echo' <meta content="3; assigncourse_student.php" http-equiv="refresh" />';
               }
		  mysql_close($conn);
	   }//end of is set save
      	
	    
	
	  
	?></td>
<td width=150px>
<table border=0 width=150px height="100" bgcolor=white>
<tr>
<td valign=top bgcolor=white>
<h2><center>
<font color="black" face="monotype corsiva" size="5">RADA College Distance Education Office  works for change!!</font><br>
<font color="white"><a href="debre.php"><iframe name="frame" width=300px height=400px src="date.php"></iframe><a></center></h2>
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
</ ~dulla^@204~ 