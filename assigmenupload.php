
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
   $ext_str="gif,jpg,jpeg,bmb,doc,docx,ppt,pptx,txt,pdf,png,mp4,mp3,mov";
   $canupload=false;
   $canupload1=false;
   $allowdexstation=explode(',',$ext_str);
  $maxfile_size=194857600;
  $errofileTYpe=" only ".$ext_str." files are allowed to upload";
  $errorLargeFileSize="only the file lessthan".$maxfile_size."mb allowed to upload";
  echo' <meta content="1;assigmenupload.php" http-equiv="refresh" />';
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
	//our work
         if($canupload&&$canupload1){
             $fileExtension=substr($fileName,strrpos($fileName, '.'));
			 $date=date('Ymdhis');
			 $destination="assignment/";   
			   $coursename=$_POST['insname'];	
			   $dept=$_POST['department'];
               $year=$_POST['year'];
               $course=$_POST['coursename'];			   
			   $term=$_POST['term'];
			   $ter=$_POST['sumbtiondate'];
			   $term1=$_POST['Deadlinedate'];							
				$tmpName=$_FILES['file']['tmp_name'];
				$fileSize=$_FILES['file']['size'];
			    $fileType=$_FILES['file']['type'];
				$newFileName=$course.$date.$fileExtension;
				move_uploaded_file($_FILES["file"]["tmp_name"],$destination.$newFileName);
				mysql_select_db("cde", $conn);
		 $in= "INSERT INTO insassignment values('$_SESSION[a]','$coursename','$dept','$year','$course','$term','$ter','$term1','$newFileName','$tmpName','$fileSize','$fileType')";
			if(mysql_query($in,$conn)){
			$result="Sucessfully Uploaded";
			echo' <meta content="6;assigmenupload.php" http-equiv="refresh" />';

			}
			else{
			echo "not inserted";
			echo' <meta content="6;assigmenupload.php" http-equiv="refresh" />';

			}
			mysql_close($conn);
			      }//end of $canupload
				  }//file not empty
				  else{
				   $emptyfile="please chosse the file first";
				   echo' <meta content="1;assigmenupload.php" http-equiv="refresh" />';

				  }
				  }//end is set upload file
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
<td  height=20px colspan=3 bgcolor=#737CA1 >
  <div id="dropdown">
 <li><a href="Instructor.php">&nbsp;&nbsp;Home</a></li>
 <li><a href="#">Download</a>
 <ul>
<li><a href="downloadModule.php"> Download Module</a></li>
<li><a href="download3.php"> download Assignment Answer</a></li>
</ul></li>
<li><a href="addresul.php"> Add Result</a></li>
<li><a href="updateresult.php"> Update Result</a></li>
<li><a href="assigmenupload.php"> Upload Assigment</a></li>
<li><a href="videoupload.php"> Upload Video</a></li>
<li><a href="changepassword2.php" >Change Password </a></li>
<li><a href="feedback4.php"> Give Feedback </a></li>

	</li>		
<li><a href="logout.php" id="login">Logout (<?php echo"Hi&nbsp;&nbsp;&nbsp; Instructor";?>)</a></li>	
</div>			 	


</td>
</tr>
<td  valign="top" bgcolor="white">

<h2 align="center"><b><font color="blue">Upload Assignment</font></b></h2>
<!--body  -->
<div style="position:absolute; widtht:230px;color:white; background-color:green; text-align:center; font-size:20px;">
<?php echo @$errorLargeFileSize;
echo @$errofileTYpe;
echo @$emptyfile;
echo 	@$result;
?>
</div>
<form action="assigmenupload.php" method="post" enctype="multipart/form-data">
<table bgcolor="white"  style="border:1px solid #336699;width:460px;height:250px;border-radius:15px;box-shadow:1px 10px 10px gray" align="center"><tr><td>
<tr><td><b>File Name:</b></td><td><input type="file" name="file" id="file" size=20mb style="width:245;height:30;" required /></td></tr>
 <tr><td><b>Instructor Name</b></td><td><input type="text" name="insname" id="insname" style="width:245;height:30;" required>
 
 <tr><td><b>Deprtment:<b></td><td><select name="department"id="department" style="width:245;height:30;" required>
<option > </option>
<option>Accounting</option>
<option>Management</option>
<option>Economics</option>
</select></td></tr>
<tr><td><b>year:</td><td><select name="year"id="year" style="width:245;height:30;" required/>
<option > </option>
<option value="1"> 1st Year</option>
<option value="2"> 2nd Year</option>
<option value="3"> 3rd Year</option>
</select></td></tr>
<tr><td><b>Course Name:</td><td><input  type="text" name="coursename" id="coursename" style="width:245;height:30;" required/>
 </td></tr>
<tr><td><b>Semester:</b></td><td><select name="term" id="term" style="width:245;height:30;" required/>
<option > </option>
<option value="1"> 1st Simester</option>
<option value="2"> 2nd Simeter</option>
</select></td></tr>
 <tr><td><b>Uploaded Date</b></td><td><input type="Date" name="sumbtiondate" id="sumbtiondate" style="width:245;height:30;" required>
 <tr><td><b>Deadline Date</b></td><td><input type="Date" name="Deadlinedate" id="Deadlinedate" style="width:245;height:30;" required>


<tr><td>&nbsp;</td><td><input type="submit" name="uploadFile" value="Upload" />&nbsp;&nbsp;&nbsp;<input type="reset" value="Reset" /></td></tr>
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
RADA Collage Distance Eduction Office All Right are Reservd &copy; 2015 E.C. 
&nbsp; &nbsp; &nbsp; &nbsp;
</font></td></tr></table>
</td>
</tr>
</table>
</body>