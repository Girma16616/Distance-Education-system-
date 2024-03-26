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
<title>university of Gondar</title>
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
    <style type="text/css">
<!--
#Layer1 {
	position:absolute;
	width:53px;
	height:657px;
	z-index:1;
	left: 1004px;
	top: 144px;
}
-->
    </style>
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
			  echo "<li><a href='sthome.php?content=register'>Register</a></li>";
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
<body bgcolor="#336633">
<!-- CONTAINER OF DIV'S -->
<div class="container">&nbsp; </br><img src="e image/elearn.jpg" width="1199" height="92">
  <!-- HEADER -->
  <div class="header"> </div>
  <!-- NAVIGATOR -->
<div class="navigator" align="center">
  <?php include 'includes/mainNav2.txt'; ?>
  <!-- MARQUEE INFO -->
  <div class="marqueeInfo"></div>
  <!-- TEXT CONTAINER -->
  <div class="bodycontainer" style="background-image:url(images/bricks.jpg)">
    <div id="Layer1" style="background:#666666">
      <p>&nbsp;</p>
      <p>&nbsp;</p>
    </div>
    <!-- Another div here for info-->
    <!-- CONTENTS -->
    <div class="Contents" onMouseOver="#">
      <div style="width:690px; float:right;  background:#CCCCCC">
        
            <p><font color="#000000"><h3>New Post </h3>
            
            <?php
include 'connect.php';
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
header("location:adforum.php");
//echo "<a href='view_topic.php?id=".$id."'>View your answer</a>";
$sql3="UPDATE forum_question SET reply='$Max_id' WHERE id='$id'";
$result3=mysql_query($sql3);
}
else {
echo "ERROR";
}
mysql_close();
?>
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
  </div>
  <!-- FOOTER NAV-->
  <!-- FOOTER -->
</div>

</body>
</html>
