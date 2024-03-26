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

<body>
<table align=center width=1000px bgcolor="white"border="white">
<tr>
<td height=20px  colspan=4>
<img src="2.jpg" width="120px" height="50" ><img src="ima/c12.png" width="1000px" height="50" ><img src="2.jpg" width="120px" height="50" >
</td>
</tr>
<tr>
<td  height=20px colspan=3 bgcolor=#737CA1 >
  <div id="dropdown">
<li><a href="admin.php" id="drop"><b>Admin Home</b></a></li>
<li><a href="manageuser.php" id="drop"><b>Manage User Account</b></a></li>	
<li><a href="create.php" id="drop"><b>Create User account</b></a></li>
<li><a href="changepassword.php" id="drop"><b>Change Password</b></a></li>	
<li><a href="logout.php" id="login">Logout (<?php echo"Hi&nbsp;&nbsp;&nbsp;";?><?php echo $_SESSION['b'];?>)</a></li>	
</div>
</td>
</tr>
<td  valign="top" bgcolor="white">
<!--------body  --->
<center><h3><font color="blue"><b>Active or Deactive User Account</b><font></h3><center>
<form action="account.php" method="post">
<table cellpadding="4" cellspacing="0" border=1 bgcolor="white" align="center">
<tr bgcolor="gray">
<th>First Name</th>
<th>last Name</th>
<th>User Id</th>
<th>Phone Number</th>
<th> UserName </th>						
<th> Acccoun_type</th>								
<th color=green><b>Action</b> </th>
<hr>
</tr>
<?php					
$result = mysql_query("SELECT * FROM account");
while($row = mysql_fetch_array($result))
  { 
$isActive=$row['isActive'];
$status=$row['status'];								
$name=$row['fname'];								
$lname=$row['lname'];
$User_Id= $row['User_Id'];
$ge=$row['phone'];
$mail=$row['username'];
$acount=$row['accounttype'];									
?> 
<tr>
<td><?php echo $name?></td>
<td><?php echo $lname;?></td>
<td><?php echo $User_Id;?></td>
<td><?php echo $ge;?></td>
<td><?php echo $mail;?></td>
<td><?php echo $acount;?></td>	
		<td><?php
		if(($isActive)=='1')
		{
		?>
<a href="status.php?status=<?php echo $row['username'];?>" 
onclick="return confirm('Really you De-activate (<?php echo $email?>)');"> 
<img src="activate.png" width="25 id="view" height="25" alt=""  />Activated</a>
                        <?php
						}
		if(($isActive)=='0')
						{
						?>
   <a href="status.php?status=<?php echo $row['username'];?>" onclick='isConfirmlog()'>
   <img src="deactivate.png" id="view" width="35" height="35" alt="" onclick='isConfirmlog()'/>Deactivated </a>
                        <?php
						}
		
                        ?>
						
						</td>
		
		
		</tr>
<?php
  }
 
print( "</table>");

?>
						</form>


						</td>

<td width=150px>
<table border=0 width=150px height="100" bgcolor=white>
<tr>
<td valign=top bgcolor=white>
<h2><center>
<font color="black" face="monotype corsiva" size="5">RADA College Distance Education Office  works for change!!</font><br>
<font color="white"><a href="debre.php"><iframe name="frame" width=300px height=407px src="date.php"></iframe><a></center></h2>
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
</html>