<?php
$hl = (isset($_POST["hl"])) ? $_POST["hl"] : false;
if(!defined("L_LANG") || L_LANG == "L_LANG")
{
	if($hl) define("L_LANG", $hl);
	else define("L_LANG", "en_US"); 
}
$mydate = isset($_POST["date1"]) ? $_POST["date1"] : "";
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>

	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
	<title> university of Gondar</title>
	<link href="css/css.css" rel="stylesheet" type="text/css">
	
    <script type="text/JavaScript">
<!--
function MM_controlSound(x, _sndObj, sndFile) { //v3.0
  var i, method = "", sndObj = eval(_sndObj);
  if (sndObj != null) {
    if (navigator.appName == 'Netscape') method = "play";
    else {
      if (window.MM_WMP == null) {
        window.MM_WMP = false;
        for(i in sndObj) if (i == "ActiveMovie") {
          window.MM_WMP = true; break;
      } }
      if (window.MM_WMP) method = "play";
      else if (sndObj.FileName) method = "run";
  } }
  if (method) eval(_sndObj+"."+method+"()");
  else window.location = sndFile;
}
    </script>
</head>
<font style="background-image:url(../slickred1/images/main_top.png)"
<!--<?php-->
	<!--//	include 'connect.php';
		//if(isset($_COOKIE['uname']))
		  //{
		   //$uname = $_COOKIE['uname'];
			//$pass = $_COOKIE['pass'];
			//$res1 = mysql_query("SELECT u.username,s.firstName,u.userID FROM users u,students s,role r
			  //      WHERE u.username='$uname' AND u.password='$pass' AND u.userID=s.userID AND r.userID=u.userID
				//	AND r.usertype='stud'",$link);
			    //while($frow=mysql_fetch_array($res1,MYSQL_NUM))
			      //        {
			        //    $fname = $frow[1];
			          //  $userID = $frow[2];
			           //        }
			      //$c = mysql_num_rows($res1);
                   //if($c > 0)
		             // {
			  echo "<li><a href='Student.php?content=register'>Register</a></li>";
			 echo "<li><a href='logout.php'>Log Out</a></li>";
			 //}
			//else
			 //{
			 
               //header("Location: index.php");
		     //}
		  //}
		 //else
		   //  {
             //  header("Location: index.php");
		    //}
		<!--?>-->
<body>
    <div class="Contents" onMouseOver="#">
      <div style="width:690px; float:right;  background:#CCCCCC">
        
            <p><font color="#000000"><h3>New Post </h3>
            
            <?php
include 'connection.php';
$id=$_POST['id'];
$sql="SELECT MAX(a_id) AS Maxa_id FROM forum_answer WHERE question_id='$id'";
$result=mysql_query($sql);
$rows=mysql_fetch_array($result);
if ($rows) {
$Max_id = $rows['Maxa_id']+1;
}
else {
$Max_id = 1;
}
// get values that sent from form 
$a_name=$_POST['a_name'];
$a_email=$_POST['a_email'];
$a_answer=$_POST['a_answer']; 

$datetime=date("d/m/y H:i:s"); // create date and time 
// Insert answer 
$sql2="INSERT INTO forum_answer(question_id, a_id, a_name, a_email, a_answer, a_datetime)VALUES('$id', '$Max_id', '$a_name', '$a_email', '$a_answer', '$datetime')";
$result2=mysql_query($sql2);
if($result2){
echo "Successful<BR>";
header("location:forum.php");
//echo "<a href='view_topic.php?id=".$id."'>View your answer</a>";
$sql3="UPDATE forum_question SET reply='$Max_id' WHERE id='$id'";
$result3=mysql_query($sql3);
}
else {
echo "ERROR";
}
mysql_close();
?>
</h5>
       <p>&nbsp;</p>
       <p>&nbsp;</p>
       <p>&nbsp;</p>
       <p>&nbsp;</p>
       <p>&nbsp;</p>
       <p>&nbsp;</p>
       <p>&nbsp;</p>
       <p>&nbsp;</p>
       <p>&nbsp;</p>
       <p>&nbsp;</p>
       <p>&nbsp;</p>
       <p>&nbsp;</p>
       <p>&nbsp;</p>
       <p>&nbsp;</p>
       <p>&nbsp;</p>
       <p>&nbsp;</p>
       <p>&nbsp;</p>
       <p>&nbsp;</p>
       <p>&nbsp;</p>
       <p>&nbsp;</p>
       <p>&nbsp;</p>
       <p>&nbsp;</p>
       <p>&nbsp;</p>
       <p>&nbsp;</p>
       <p>&nbsp;</p>
       <p>&nbsp;</p>
       <p>&nbsp;</p>
       <p>&nbsp;</p>
       <p>&nbsp;</p>
       <p>&nbsp;</p>
       </font>
        <p></p>
      </div>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
    </div>
    <!-- PERSONAL INFO -->
    <div class="PersonInfo" align="center" style="">
      <p><?php
include 'connection.php';
if(isset($_GET['id']))
{
$id=$_GET['id'];
}
else
{
$nameframecookie=$_COOKIE['uname'];
$passframecookie=$_COOKIE['pass'];
$query="SELECT * FROM users WHERE username='$nameframecookie' AND password='$passframecookie'";
$res=mysql_query($query,$link);
while($row = mysql_fetch_array($res,MYSQL_NUM))
{
$id=$row[0];
}
}
 $res=mysql_query("select * from pic where userID=$id",$link)or die("error".mysql_error());
  while ($User=mysql_fetch_array($res,MYSQL_NUM))
  $pic=$User[2];
  echo"<p align='left'><img src='$pic' align='right' width='203' height='197' ></p></br>";
 $res=mysql_query("select * from students where userID=$id",$link)or die("error".mysql_error());
  while ($row=mysql_fetch_array($res,MYSQL_NUM))
  {
  $userID=$row[0];
  $firstName=$row[1];
  echo"<font color='#FF0000'>&nbsp;&nbsp;&nbsp;Welcome &nbsp;$firstName</font>";
  echo"<a href='logout.php'><font color='green'>Logout</font></a>";
  }
  ?>
	    </br>
  
	    </br>
      </p>
	  <div class="inName"> INFORMATION SCIENCE </div>
      <br>
        <div class="inOccupation" a ~dulla^@204~ ~dulla^@204~ 
            <?php include 'includes~dulla^@204~ txt'; ?>
          </p>
          <~dulla^@204~ 
          <p>&nbsp;</p>
          <~dulla^@204~ 
          <p>&nbsp;</p>
          <~dulla^@204~ 
          <p>&nbsp;</p>
          <~dulla^@204~ 
          <p>&nbsp;</p>
          <~dulla^@204~ 
          <p>&nbsp;</p>
          <~dulla^@204~ 
          <p>&nbsp;</p>
          <~dulla^@204~ 
      </div>
		
		
		 <p>&nbsp;</~dulla^@204~ sp;</p>
		 <p>&nbsp;</p>
		 <p>&nbs~dulla^@204~ >&nbsp;</p>
		 <p>&nbsp;</p>
		 <p>~dulla^@204~ 	 <p>&nbsp;</p>
		 <p>&nbsp;</p>
		~dulla^@204~ p>
    </div>
  </div>
  <!-- FOOT~dulla^@204~ <!-- FOOTER -->
</div>

</body>
</html>
