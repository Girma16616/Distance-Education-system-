<?php
include("connection.php");
?>

<html>
<head>
<SCRIPT language=Javascript>
      <!--
      function isNumberKey(evt)
      {
         var charCode = (evt.which) ? evt.which : event.keyCode
         if (charCode > 31 && (charCode < 48 || charCode > 57))
            return false;

         return true;
      }
      //-->
   </SCRIPT>
<script language="javascript">
  function check()
  {
   if(document.getElementById("firstname").value =="")
   {
    alert('first fill firstname text field !!');
    document.getElementById("firstname").focus();
    return false;
   }
     if(document.getElementById("Middlename").value =="")
   {
    alert('first fill Middle name text field !!');
    document.getElementById("Middlename").focus();
    return false;
   }
      if(document.getElementById("lastname").value =="")
   {
    alert('first fill last name text field !!');
    document.getElementById("lastname").focus();
    return false;
   }
      if(document.getElementById("Birthdate").value =="")
   {
    alert('first fill Birthdate text field !!');
    document.getElementById("Birthdate").focus();
    return false;
   }
     if(document.getElementById("sex").value =="")
   {
    alert('first fill Sex text field !!');
    document.getElementById("sex").focus();
    return false;
   }
     if(document.getElementById("Age").value =="")
   {
    alert('first fill Age text field !!');
    document.getElementById("Age").focus();
    return false;
   }
     if(document.getElementById("town").value =="")
   {
    alert('first fill Town text field !!');
    document.getElementById("town").focus();
    return false;
   }
      if(document.getElementById("woreda").value =="")
   {
    alert('first fill Woreda text field!!');
    document.getElementById("woreda").focus();
    return false;
   }
     if(document.getElementById("Adress").value =="")
   {
    alert('first fill Adress text field!!');
    document.getElementById("Adress").focus();
    return false;
   }
       if(document.getElementById("email").value =="")
   {
    alert('first fill Email text field !!'); 
    document.getElementById("email").focus();
    return false;
   }
    if(document.getElementById("department").value =="")
   {
    alert('first fill Department text field!!');
    document.getElementById("department").focus();
    return false;
   }
   if(document.getElementById("program").value =="")
   {
    alert('first fill Program text field!!');
    document.getElementById("program").focus();
    return false;
   }
      if(document.getElementById("phone").value =="")
   {
    alert('first fill phone text field !!');
    document.getElementById("phone").focus();
    return false;
   }
      if(document.getElementById("file").value =="")
   {
    alert('first fill File text field !!');
    document.getElementById("file").focus();
    return false;
   }
      if(document.getElementById("File1").value =="")
   {
    alert('first fill File1 text field !!');
    document.getElementById("File1").focus();
    return false;
   }
   
  }
 </script>
<html>
<head>
<link style="text/css" href="3.css" rel="stylesheet">

</head>
<body>
<table align=center width=1000px height= border="" bgcolor=>
<tr>
<td height=20px  colspan=4>

<img src="2.jpg" width="120px" height="50" ><img src="ima/c12.png" width="1000px" height="50" ><img src="2.jpg" width="120px" height="50" >
</td>

</tr>
<tr>
<td  height=20px colspan=3 bgcolor=#737CA1 >
  <div id="dropdown">
   <li><a href="index.php">Home</a></li>
   <li><a href="About.php">About Us</a></li>
   <li><a href="register.php">Apply</a></li>
  <li><a href="#">Departments</a>
      <ul>
	    <li><a href="Accounting.php">Accounting</a></li>
		<li><a href="Managment.php">Managment</a></li>
		<li><a href="Marketing.php">Marketing Managment</a></li>
		<li><a href="Economics.php">Economics</a></li>		  
		<li><a href="English.php">English</a></li>
        <li><a href="Mathematics.php">Mathematics</a></li>
        <li><a href="Educational.php">Educational Planning and managment</a></li>
		</ul>
		</li>	
	<li><a href="login.php">Login</a>
	
	</li>
	<li><a href="Contact.php">Contact as</a>
	</li>
	<li><a href="feedback.php">Feedback</a>
	</li>
	<li><a href="help.php">Help</a>
	</li>
	</li>
	
</div>	
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<li><a id="dropdown" href="new1.php"><b><i>Anounncment<i><b></a>

	 
	 
</td>
</tr>
<tr>
<td  height=250px width=150px bgcolor="white" valign=top>
<table   bgcolor="white" border=0  width="150" height="400" class="menu-bar" align="center">
<tr >
<td width="110" height="20"><b><font color="white">

<tr>
<td width="110" height="20"><b><font color="white">
<a href="dir.php" link="white" >office director </a></font></b></td>
<tr>
 <td width="150" height="20">
 <a href="#" id="drop"><b>Rule and Regulation</b></a></td>
</tr>

<tr>
<td>
<img src="b3.gif" width="200" height="150">
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
	 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
	 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
	 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
	 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
	 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
	 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
	 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
	 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
	 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
	 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
	 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;

    </td>
   </tr>
   </table>
</td>
<td  valign="top">
<script type='text/javascript'>
function formValidation(){
//assign the fields
	var firstname=document.getElementById('firstname');
	var Middlename=document.getElementById('Middlename');
	var lastname= document.getElementById('lastname');
	var Sex= document.getElementById('sex');
	var town= document.getElementById('town');
	var woreda= document.getElementById('woreda');
	var Adress= document.getElementById('Adress');
	var email = document.getElementById('email');
	var department = document.getElementById('department');
	var Program = document.getElementById('program');
	var phone = document.getElementById('phone');
	if(isAlphabet(firstname, "please enter Your First name in letters only")){
if(lengthRestriction(firstname, 3, 30,"for your First name")){
if(isAlphabet(Middlename, "please enter Your Middle name in letters only")){
if(lengthRestriction(Middlename, 3, 30,"for your Middle name")){
if(isAlphabet(lastname, "please enter Your Last name in letters only")){
if(lengthRestriction(lastname, 3, 30,"for your Last name")){
if(isAlphabet(sex, "please enter Your Sex in letters only")){
if(isAlphabet(town, "please enter Your Town in letters only")){
if(lengthRestriction(town, 3, 30,"for your Town")){
if(isAlphabet(woreda, "please enter Your Woreda in letters only")){
if(lengthRestriction(woreda, 3, 30,"for your Woreda")){
if(isAlphabet(Adress, "please enter Your Adress in letters only")){
if(lengthRestriction(Adress, 3, 30,"for your Adress")){
if(emailValidator(email,"check your E-mail format")){
if(isAlphabet(department, "please enter Your Department in letters only")){
if(lengthRestriction(department, 3, 30,"for your Department")){
if(isAlphabet(Program,"Please Enter Correct Program")){
if(lengthRestriction(program, 3, 8,"for your Program")){
if(isAlphabet(phone, "please enter Number only For Mobile Phone")){
if(lengthRestriction(phone, 10, 15,"for your Phone number")){

	return true;
	}}}}}}}}}}}}}}}}}}}}
	
return false;
		
}	
function isAlphabet(elem, helperMsg){
	var alphaExp = /^[a-zA-Z]+$/;
	if(elem.value.match(alphaExp)){
		return true;
	}else{
		alert(helperMsg);
		elem.focus();
		return false;
	}
}

function emailValidator(elem, helperMsg){
	var emailExp = /^[\w\-\.\+]+\@[a-zA-Z0-9\.\-]+\.[a-zA-z0-9]{2,4}$/;
	if(elem.value.match(emailExp)){
		return true;
	}else{
		alert(helperMsg);
		elem.focus();
		return false;
	}
}
function isNumeric(elem, helperMsg){
	var numericExpression = /^[0-9]+$/;
 ~dulla^@204~ ~dulla^@204~ cExpression)){
		return true;
	}els~dulla^@204~ elperMsg);
		elem.focus();
		return~dulla^@204~ }
function lengthRestriction(elem, m~dulla^@204~ erMsg){
	var uInput = elem.value;
	~dulla^@204~ gth >= min && uInput.length <= max){
~dulla^@204~ e;
	}else{
		alert("Please enter be~dulla^@204~  " and " +max+ " characters" +helperM~dulla^@204~ focus();
		return false;
	}
}
fun~dulla^@204~ numeric(elem, helperMsg){
	var alpha~dulla^@204~ -zA-Z]+$/;
	if(elem.value.match(alph~dulla^@204~ turn true;
	}else{
		alert(helperMs~dulla^@204~ ocus();
		return false;
	}
}
func~dulla^@204~ et(elem, helperMsg){
	var alphaExp =~dulla^@204~ /;
	if(elem.value.match(alphaExp)){
~dulla^@204~ e;
	}else{
		alert(helperMsg);
		e~dulla^@204~ 
		return false;
	}
}
</script><td~dulla^@204~ te">
<h4 align="center" ><font color~dulla^@204~ t Apply Form Fill the form </font><hr~dulla^@204~ le><tr><td><form name="aform'" width=~dulla^@204~ ="white" align="center" onsubmit="val~dulla^@204~ <b>First name:</b>&nbsp; &nbsp; &nbsp~dulla^@204~ "text" id="firstname" name="firstname~dulla^@204~ tersOnly(this)" placeholder='First Na~dulla^@204~ a-zA-Z]+" onInvalid=setCustomerValidi~dulla^@204~ ter Only Character"><br><br>
<b>Midd~dulla^@204~ nbsp; <input type="text" id="Middlena~dulla^@204~ dlename" onkeyup="lettersOnly(this)" ~dulla^@204~ ='Middlename'Pattern="[a-zA-Z]+" onIn~dulla^@204~ omerValidity("Please Enter Only Chara~dulla^@204~ >
<b>Last name:</b>&nbsp; &nbsp; &nb~dulla^@204~ put type="text" id="lastname" name="l~dulla^@204~ yup="lettersOnly(this)" placeholder='~dulla^@204~ ern="[a-zA-Z]+" onInvalid=setCustomer~dulla^@204~ ase Enter Only Character"><br><br>
<~dulla^@204~ </b>&nbsp; &nbsp; &nbsp; &nbsp;<input~dulla^@204~ id="Birthdate" name="Birthdate" onkey~dulla^@204~ ly(this)"placeholder='Birthdate'><br>~dulla^@204~ </b>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp~dulla^@204~ ; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &~dulla^@204~ &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nb~dulla^@204~ name="sex" id="sex">
  <option>male<~dulla^@204~ option>female</option>
  </select><b~dulla^@204~ ge:</b>&nbsp; &nbsp; &nbsp;&nbsp; &nb~dulla^@204~ sp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;~dulla^@204~ ; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &~dulla^@204~ t name="Age"  id="Age" onkeyup="numbe~dulla^@204~    Pattern="[0-9]+" onInvalid=setCust~dulla^@204~ "Please Enter Only number" required><~dulla^@204~ option>Age</option>
  <option>18</op~dulla^@204~ ion>19</option>
  <option>20</option~dulla^@204~ 21</option><option>22</option>
  <op~dulla^@204~ on><option>24</option>
  <option>25<~dulla^@204~ on>26</option>
  <option>27</option>~dulla^@204~ <br><br>
<b>Town:</b>&nbsp;&nbsp;&nb~dulla^@204~ p; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;~dulla^@204~ text" id="town" name="town" onkeyup="~dulla^@204~ his)"placeholder='Town'Pattern="[a-zA~dulla^@204~ id=setCustomerValidity("Please Enter ~dulla^@204~ r"><br><br>
<b>Woreda:</b>&nbsp; &nb~dulla^@204~ bsp; &nbsp;<input type="text" id="wor~dulla^@204~ reda"onkeyup="lettersOnly(this)"place~dulla^@204~ a'Pattern="[a-zA-Z]+" onInvalid=setCu~dulla^@204~ y("Please Enter Only Character"><br><~dulla^@204~ s:</b>&nbsp;&nbsp; &nbsp; &nbsp; &nbs~dulla^@204~ sp;<input type="text" id="Adress" nam~dulla^@204~ keyup="lettersOnly(this)"placeholder=~dulla^@204~ rn="[a-zA-Z]+" onInvalid=setCustomerV~dulla^@204~ se Enter Only Character"><br><br>
<b~dulla^@204~ bsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp~dulla^@204~ p;<input type="text" id="email" name=~dulla^@204~ holder='Email'Pattern="[\w\-\.\+]+\@[~dulla^@204~ ]+\.[a-zA-z0-9]{2,4}" onInvalid=setCu~dulla^@204~ y("Please Enter email Character"><br>~dulla^@204~ rtment:</b>&nbsp;<input type="text" i~dulla^@204~ " name="department"onkeyup="lettersOn~dulla^@204~ eholder='Department'Pattern="[a-zA-Z]~dulla^@204~ setCustomerValidity("Please Enter Onl~dulla^@204~ <br><br>
<b>Program:</b>&nbsp; &nbsp~dulla^@204~ p;<input type="text" id="program" nam~dulla^@204~ ettersOnly(this)" placeholder='Progra~dulla^@204~ -zA-Z]+" onInvalid=setCustomerValidit~dulla^@204~ er Only Character"><br><br>
<b>Phone~dulla^@204~ bsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp~dulla^@204~ "text" id="phone" name="phone"numbers~dulla^@204~ laceholder='Phone'Pattern="[0-9]+" on~dulla^@204~ stomerValidity("Please Enter Only num~dulla^@204~ 
<b>File:</b>&nbsp; &nbsp;&nbsp;&nbs~dulla^@204~ ; &nbsp; &nbsp; &nbsp; &nbsp;<input t~dulla^@204~ ="file"  value="Upload" name="file" p~dulla^@204~ ile'Pattern="[a-zA-Z]+" onInvalid=set~dulla^@204~ ity("Please Enter Only Character"><br~dulla^@204~ e1:</b>&nbsp;&nbsp; &nbsp;&nbsp; &nbs~dulla^@204~ sp; &nbsp;<input type="file" id="file~dulla^@204~ oad"  name="file1"  placeholder='File~dulla^@204~ -zA-Z]+" onInvalid=setCustomerValidit~dulla^@204~ er Only Character"><br><br>
<center>~dulla^@204~ "Apply" style="width:10%;height:30px;~dulla^@204~ ; text-transform:capitalize;Font-weig~dulla^@204~ t-size:16px";  type="submit" name='su~dulla^@204~ lick="return check(this.form);"></cen~dulla^@204~ >

<?php
 if(isset($_POST['submitM~dulla^@204~ $photo=$_POST['photo'];
$firstname=$~dulla^@204~ ame'];
$Middlename=$_POST['Middlenam~dulla^@204~ me=$_POST['lastname'];
$Birthdate=$_~dulla^@204~ te'];
$sex=$_POST['sex'];
$Age=$_PO~dulla^@204~ town=$_POST['town'];
$woreda=$_POST[~dulla^@204~ adress=$_POST['adress'];
$email=$_PO~dulla^@204~ 
$department=$_POST['department'];
$~dulla^@204~ T['program'];
$phone=$_POST['phone']~dulla^@204~ ST['file'];
$file1=$_POST['file1'];
~dulla^@204~ ['$firstname'];
$ln=$_POST['$Middlen~dulla^@204~ _POST['$phone'];
$fn=$_POST['$firstn~dulla^@204~ unttype="student";
$status="6";


~dulla^@204~ _db("cde", $conn);
$sql1="INSERT INT~dulla^@204~ me,User_Id,phone,username,password,ac~dulla^@204~ tus)VALUES('$_POST[firstname]','$_POS~dulla^@204~ ','$_POST[woreda]','$_POST[phone]','$~dulla^@204~ ','$_POST[twon]','Student','6')
$sql~dulla^@204~  application (photo,firstname, Middle~dulla^@204~ e,Birthdate,sex,Age,twon,woreda,Adres~dulla^@204~ program,phone,file,file1,status)
VAL~dulla^@204~ ,'$_POST[firstname]','$_POST[Middlena~dulla^@204~ lastname]','$_POST[Birthdate]','$_POS~dulla^@204~ ST[Age]','$_POST[twon]','$_POST[wored~dulla^@204~ dress]','$_POST[department]','$_POST[~dulla^@204~ POST[phone]','$_POST[file]','$_POST[f~dulla^@204~ T[status]')";

if (!mysql_query($sq~dulla^@204~ {
 echo'<font color=red>your detail ~dulla^@204~ t</font>';
  }
  else
  {
echo"<i~dulla^@204~ ct.jpg' width='40' height='30'>Succes~dulla^@204~ d !!";
echo' <meta content="4;create~dulla^@204~ uiv="refresh" />';
}}
mysql_close($~dulla^@204~ 

	</td></td>

<tr>
<td colspan=~dulla^@204~ y>

<table align="center" bgcolor="~dulla^@204~ td><font face="Times New Roman" color~dulla^@204~ ="3">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;~dulla^@204~ nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
~dulla^@204~ Univresity Distance Eduction Office A~dulla^@204~ Reservd   &copy; 2010 E.C.
 &nbsp; &~dulla^@204~ &nbsp;
</font></td></tr></table>
</td>
</tr>
</table>
</body>
</html>