<?php
$conn=mysql_connect("localhost","root","") or die(mysql_error());
	$sdb=mysql_select_db("cde",$conn) or die(mysql_error()); 
	if(isset($_REQUEST['id']))
	{
	$update=mysql_query("update result set status='1' where status='0'");
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