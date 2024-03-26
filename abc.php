<!DOCTYPE html>
<?php   
 session_start();
  error_reporting(0);
include("connection.php");
//include("seassion.php");

?>

<?php
$pos = strpos($_SERVER['HTTP_REFERER'],getenv('HTTP_HOST'));
if($pos===false)
  die('Restricted access!! you should be Login first to access this page!!');

?>
 
 	<?php

 
$query = mysql_query("SELECT * FROM  announcement ");
 
if(!$query){
echo'no selected';

}
else{
		echo "<table  style='width:700px;border:1px solid #336699;border-radius:5px;' align='center'><font color=white>
<tr>
<th bgcolor='#336699'><font color='white' size='2'>Date</th>
<th bgcolor='#336699'><font color='white' size='2'>Job number</th>
<th bgcolor='#336699'><font color='white' size='2'>CGPA/4.0</th>
<th bgcolor='#336699'><font color=white size='2'>quantity</th>
<th bgcolor='#336699'><font color=white size='2'>start date</th>
<th bgcolor='#336699'><font color=white size='2'>Salary</th>
<th bgcolor='#336699'><font color=white size='2'>Term of emp</th>
<th bgcolor='#336699'><font color=white size='2'>Departement</th>
<th bgcolor='#336699'><font color=white size='2'>End date</th>
<th bgcolor='#336699'><font color=white size='2'>Remark</th>
<th bgcolor='#336699'><font color=white size='2'>Action</th>
</tr>";
	while($row= mysql_fetch_array($query)){
	
	$date = $row["anouncementdate"]; 
	$jobno= $row["jobNo"];
	$cgpa = $row["cgpa"];
	$quantity = $row["quantity"];
	$s_date = $row["s_date"];
	$salary = $row["salary"];
	$term = $row["termOfEmployee"];
	$dep = $row["Dep"];
	$endDate = $row["endDate"];
	$remeber = $row["remember"];
	//$endDate = $row["endDate"];
	echo"<tr>";
echo"<td>";echo $row["anouncementdate"]; echo"</td>";
echo"<td>";echo $row["jobNo"]; echo"</td>";
echo"<td>";echo $row["cgpa"]; echo"</td>";
echo"<td>";echo $row["quantity"]; echo"</td>";
echo"<td>";echo $row["s_date"]; echo"</td>";
echo"<td>";echo $row["salary"]; echo"</td>";
echo"<td>";echo $row["termOfEmployee"]; echo"</td>";
echo"<td>";echo $row["Dep"]; echo"</td>";
echo"<td>";echo $row["endDate"]; echo"</td>";
echo"<td>";echo $row["remember"]; echo"</td>";

?><form action ="Apply_for_vacancy.php" method ="post">
	<td>
	<input type="hidden" name="date"  value="<?php echo $date ;?>" title="date value is number only">
	<input type="hidden" name="jobno"  value="<?php echo $jobno;?>" title="date value is number only">
	<input type="hidden" name="cgpa"  value="<?php echo $cgpa;?>"title="date value is number only">
	<input type="hidden" name="quantity" value="<?php echo $quantity;?>" title="date value is number only">
	<input type="hidden" name="sdate" value="<?php echo $s_date;?>" title="date value is number only">
	<input type="hidden" name="salary"   value="<?php echo $salary;?>" title="date value is number only">
	<input type="hidden" name="term"   value="<?php echo $term;?>" title="date value is number only">
	<input type="hidden" name="dep"   value="<?php echo $dep;?>" title="date value is number only">
	<input type="hidden" name="edate"   value="<?php echo $endDate;?>" title="date value is number only">
	<input type="hidden" name="rember"   value="<?php echo $remeber ;?>" title="date value is number only">
 
	<input type="submit" name="apply" value="Apply"></td>
	</form>
<?php
	}
	echo"</tr>";
	echo "</table>";
}

?>
<html>

                
				 
						                      
											<form method="POST" action="check.php" target="aa" >
											
</form>
            
		
	</body>
</html>
<!--<footer>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;BAHIRDAR BLOOD BANK</footer>
