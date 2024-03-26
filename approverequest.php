
<?php
		include('connection.php');
		session_start();
if(isset($_GET['status'])){
			$status1=$_GET['status'];
$select=mysql_query("select * from result where id='$status1'");
while($row=mysql_fetch_object($select))
{
$status_var=$row->status;
if($status_var=='Approved')
{
$status_state='Not Approved';
}
else
{
$status_state='Approved';
}
$update=mysql_query("update result set status='$status_state' where id='$status1' ");
if($update)
{
header("Location:resultapp.php");
}
else
{
echo mysql_error();
}
}
?>
<?php
}
?>
