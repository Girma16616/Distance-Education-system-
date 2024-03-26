<?php
	include("connection.php");
if(!isset($_GET['id'])){?>
       <?php
}	
$applicant = $_GET['id'];	
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
<?php


$r123 = mysql_query("SELECT * FROM application where RegId ='{$applicant}'and status='0' ");

while($row = mysql_fetch_array($r123))
  {
  $rID=$row['RegId'];
  $User_id = $_SESSION['a'];
  $stud_id = $row['email'];  
  $firstname =$row['firstname']; 
  $Middlename =$row['middlename'] ; 
  $lastname=$row['lastname'] ; 
  $Birthedate = $row['birthdate'] ; 
  $sex = $row['sex'] ; 
  //$Age =$row['age'] ; 
  $town = $row['town'] ; 
  $woreda =$row['woreda'];  
  $Adress = $row['adress']; 
  $Email = $row['email'] ; 
  $department =$row['department'];  
  $phone =$row['phone'] ;
  $phone1=$phone;
  $userName=$firstname;
  $e_password=base64_encode($lastname);
  $semister =$row['semister'];
  $year  = $row['year']; 
  $account=mysql_query("INSERT INTO account(fname,lname,User_Id,phone,username,password,accounttype,status,isActive) 
										values('$firstname','$Middlename','$rID','$phone1','$userName','$e_password'
                                        ,'Student','6','1')"); 
			if($account){
  $r122 = mysql_query("INSERT INTO student(User_Id,stud_id,firstname,Middlename,lastname,birthdate,sex,town,
                                        woreda,adress,email,department,phone,simester,year) 
										values('$User_id','$rID','$firstname','$Middlename',
                                        '$lastname','$Birthedate','$sex','$town',
                                        '$woreda','$Adress','$Email','$department','$phone'
										,'$semister','$year')"); 
										if($r122){										
                                        $r1222 = mysql_query("DELETE FROM application where RegId='{$applicant}'");  
										if($r1222){
									echo'<center><p class="success" align="center"><font size=14px color=green>Successfully approved</font></p></center>';
									echo' <meta content="2;viewapplication.php" http-equiv="refresh" />';
                                          }
										  else{
										echo"role back";
										  }										
								}
								else{
								echo"Their internal connection problem";
								}
								}//end of account
								else{
								echo"Their is internal connection problem please contact the administrator ";
								}

}