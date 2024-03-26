
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
 if(isset($_POST['uploadFile'])){
    $fileName= $_FILES["file"]["name"];
    if($fileName!=""){
   $ext_str="gif,jpg,jpeg,bmb,doc,docx,ppt,pptx,txt,pdf,png";
   $canupload=false;
   $canupload1=false;
   $allowdexstation=explode(',',$ext_str);
  $maxfile_size=10485760;
  $errofileTYpe=" only ".$ext_str." files are allowed to upload";
  $errorLargeFileSize="only the file lessthan".$maxfile_size."mb allowed to upload";
  echo' <meta content="2;assignmentsubmit.php" http-equiv="refresh" />';
  $_FILES["file"]['size'];
  $ext=substr($fileName,strrpos($fileName,'.'));
  if($ext==".gif"||$ext==".jpg"||$ext==".jpeg"||$ext==".bmb"||$ext==".pptx"||$ext==".ppt"||$ext==".pdf"||$ext==".docx"||$ext==".doc"||$ext==".txt"||$ext==".png")
    {
   $canupload=true;
   $errofileTYpe="";
     }
    if($_FILES["file"]['size']<=$maxfile_size){
    $canupload1=true;
	$errorLargeFileSize="";
     }
   $select="select sumbtiondate,Deadlinedate from insassignment";
   $ttt=mysql_query($select)or die (mysql_error());
    while($row = mysql_fetch_array($ttt))
	{
	@$date1 = $row['sumbtiondate'];
	@$date2= $row['Deadlinedate'];
    }
      $current_date = date('Y-m-d');
	  
      if ($current_date >= @$date1&& @$date2>=$current_date)
        {
	//our work
         if($canupload&&$canupload1){
             $fileExtension=substr($fileName,strrpos($fileName, '.'));
			 $date=date('Ymdhis');
			 $destination="assignment/";   
			   //$coursename=$_POST['stName'];	
			   $dept=$_POST['department'];
               $year=$_POST['year'];
               $course=$_POST['coursename'];			   
			   $term=$_POST['term'];
			   $Sumbtiondate=$_POST['Sumbtiondate'];							
				$tmpName=$_FILES['file']['tmp_name'];
				$fileSize=$_FILES['file']['size'];
			    $fileType=$_FILES['file']['type'];
				$newFileName=@$coursename.$date.$fileExtension;
		 move_uploaded_file($_FILES["file"]["tmp_name"],$destination.$newFileName);
		 mysql_select_db("cde", $conn);
		 $in= "INSERT INTO studentassignment values('$_SESSION[a]','$dept','$year','$course','$term','$Sumbtiondate','$newFileName','$tmpName','$fileSize','$fileType')";
			if(mysql_query($in,$conn)){
			$result="Sucessfully Uploaded";
			echo' <meta content="10;assignmentsubmit.php" http-equiv="refresh" />';
			}
			else{
			echo "not inserted";
			echo' <meta content="4;assignmentsubmit.php" http-equiv="refresh" />';
			}
			mysql_close($conn);
			      }//end of $canupload
				  //file not empty
				  else{
				   $emptyfile="please chosse the file first";
				   echo' <meta content="4;assignmentsubmit.php" http-equiv="refresh" />';
				  }
				  }
				  else{
				  $emptyfil='Sorry uploded date is passed';
				  echo' <meta content="4;assignmentsubmit.php" http-equiv="refresh" />';

}
}


				  }//end is set upload file
?>

<html>
<head>
<link style="text/css" href="3.css" rel="stylesheet">
 <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
 <script src="JS/jquery-3.3.1.js" type="text/javascript"></script>
 <script type="text/JavaScript" src="JS/assignmentsubmit.js"></script>
</head>
<body bgcolor="white">
<table align=center width=1000px bgcolor="white">
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
<li><a href="student.php" >&nbsp;&nbsp;Home</a></li>
<li><a href="#">Download</a><ul>
<li><a href="download.php">Download Module</a></li>
<li><a href="download2.php">Download Assigment</a></li></ul>
<li><a href="assignmentsubmit.php">Upload Assignment</a></li>
<!--<li><a href="exam_index.php" target='frame1' >Take exam</a></li>-->
<li><a href="#">View Basic </a>
<ul>
<li><a href="info.php"> View Anuonncment</a></li>
<li><a href="gpa.php"> View Grade</a></li> 
<li><a href="Viewcurriclum1.php"> View Curriculem</a></li>
</ul></li>
<!--
<li><a href="#"> Send Requst</a>
<ul>
<li><a href="Course_Add.php">Course_Add</a></li>
<li><a href="dropcourse.php">Drop Course</a></li>
</ul></li>-->
<li><a href="feedback3.php">Give Comment</a></li>
<li><a href="changepassword4.php" link="white" >Change Password </a></li>
<li><a href="logout.php" id="login">Logout (<?php echo"Hi&nbsp;&nbsp;&nbsp;";?><?php echo $_SESSION['b'];?>)</a></li>	
    </div>
</td>
</tr>
<td  valign="top" bgcolor="white">

<h2><center><p style='text-shadow: 4px 4px 4px blue;'size=4px color=pink><b><font color="blue">Upload File</font></b></center></h2>
<!--body  -->
<div style="position:absolute; widtht:230px;color:white; background-color:green; text-align:center; font-size:20px;">
<?php echo @$errorLargeFileSize;
echo @$errofileTYpe;
echo @$emptyfile;
echo @$emptyfil;
echo 	@$result;
?>
</div>
<form action="assignmentsubmit.php" id="submassform" method="post" enctype="multipart/form-data">
<table bgcolor="#E5E4E2"  style="border:1px solid #336699;width:460px;height:250px;border-radius:15px;box-shadow:1px 10px 10px gray" align="center"><tr><td>
<tr><td><b>File Name:</b></td><td><input type="file" name="file" id="file" size=20mb style="width:245;height:30;" required />
<i><span class="error_file" id="file_error_message"></span></i></td></tr>
<tr><td><font color=""><b>Department:&nbsp; &nbsp; &nbsp;</b></td>
<td><select name="department" style="width:245;height:25;" id="dep"color="red" required>
<option>Select department</option>
<option>Accounting</option>
<option>Managment</option>
<option>Economices</option>
</select><i><span class="error_dep" id="dep_error_message"></span></i></td></tr>
<tr><td><b>Batch</b></td><td><select class="textbox" name="year" id="year" style="width:245; height:34;" required>
                              <option>Select year</option>
                              <option>1st</option>
                              <option>2nd</option>
							  <option>3rd</option>
                              </select></td>
 <td><span class="error_yname"id="yname_error_message"></span></td></tr><br>
 <tr><td><b>Course Name</b></td><td><input name="coursename" id="coursename" style="width:245;height:30;" required>
<i><span class="error_coursename" id="coursename_error_message"></span></i></select></td></tr>
 <tr><td><b>semester</b></td><td><select class="textbox" name="term" id="term" style="width:245; height:34;" required>
                              <option>Select semester</option>
                              <option value='1'>1st</option>
                              <option value='2'>2nd</option>							  
                              </select></td>
 <td><span class="error_sename" id="sename_error_message"></span></td></tr>
<tr><td><b>Upload Dtae:<b></td><td><input type="date" name="Sumbtiondate" id "Sumbtiondate" style="width:245" size="20" required /></td></tr>



<tr><td>&nbsp;</td><td><input type="submit" name="uploadFile" value="Upload" />&nbsp;&nbsp;&nbsp;<input type="reset" value="Reset" /></td></tr>
</table>
</form>
<!--<a href="student.php" align=right><font size="6px" color=gray><image src="ima/back1.png"></font></a>-->

</td>
<td width=150px>
<table border=0 width=150px height="100" bgcolor=white>
<tr>
<td valign=top bgcolor=white>
<h2><center>
<font color="black" face="monotype corsiva" size="5">RADA College Distance Education  Office  works for change!!</font><br>
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