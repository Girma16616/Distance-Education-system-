<html >
<head>
<title> RADA College Distance Education Program</title>
<link style="text/css" href="3.css" rel="stylesheet">

<script type="text/javascript">
function validate()
  {
 var testaccount =/^([a-z]|[A-Z]| )*$/;
 var testaccount1 = /^\d*[0-9](|.\d*[0-9]|,\d*[0-9])?$/;
 var fname  = document.check.FirstName.value;
 var mname  = document.check.MiddleName.value;
 var lname  = document.check.LastName.value;
var moname  = document.check.MotherName.value;
var town1  = document.check.town.value; 
 var words22  = document.check.woreda.value; 
var Dbirth = document.check.Birthdate.value;
var Pnumber = document.check.mobilenumber.value;  
 var Fulname = document.check.fullname.value;
 var Email = document.check.Emailaddress.value;
 var relation = document.check.relationship.value;
 var addres = document.check.address.value;
 var phone = document.check.phonenunber.value;
 var grade12 = document.check.grade12point.value;
 var poin10 = document.check.grade10point.value;
  if(!testaccount.test(fname)){
    alert('fname Must be Letter Value');
	return false;
  }
   if(!testaccount.test(mname)){
    alert('MiddleName Must be Letter Value');
	return false;
  }
  if(!testaccount.test(lname)){
    alert('Lastname Must be Letter Value');
	return false;
  }
  if(!testaccount.test(moname)){
    alert('MotherName Must be Letter Value');
	return false;
  }
   if(!testaccount.test(town1)){
    alert('Town Must be Letter Value');
	return false;
  }
    if(!testaccount.test(words22)){
    alert('woreda Must be Letter Value');
	return false;
  }
      if(!testaccount1.test(phone)){
    alert('phone Must be Number Value');
	return false;
  }
   if(Dbirth<=1000000000 || Dbirth>=10000000000){
	     alert("Invalid birth date! it should be between 10 digits");
		 return false;
	  }
   if(phone<=100000000 || phone>=100000000000000){
	     alert("Invalid Telphone Number! it should be at least 10 to 15 digits");
		 return false;
	  } 
var emailExp = /^[\w\-\.\+]+\@[a-zA-Z0-9\.\-]+\.[a-zA-z0-9]{2,4}$/;
if(!emailExp.test(Email))
  {
    alert("Please Enter A Valid Email Address  ");
     return false; 
 } 
 if(!testaccount.test(Fulname)){
    alert('Full Name Must be Letter Value');
	return false;
  }	 
   if(!testaccount.test(relation)){
    alert('Relationship Must be Letter Value');
	return false;
  }	 
  if(!testaccount.test(addres)){
    alert('Address Must be Letter Value');
	return false;
  }	 
  if(Pnumber<=100000000 || Pnumber>=100000000000000){
	     alert("Invalid mobile Number! it should be at least 10 to 15 digits");
		 return false;
	  }
    if(!testaccount1.test(grade12)){
    alert('your Grade 12 point Must be Number Value');
	return false;
  }	 
   if(grade12<=250 || grade12>=700){
	     alert("Invalid grade! it should be between 250 to 700 digits");
		 return false;
	  }
	 if(!testaccount1.test(poin10)){
    alert('your Grade 10 point Must be Number Value');
	return false;
  }	 
  if(poin10<=2 || poin10>=4){
	     alert("Invalid grade! it should be between 2.00 and 4.00 ");
		 return false;
	  }
 if(testaccount.test(fname))
  	 {
		return true;
		}  
if(testaccount.test(mname))
  	 {
		return true;
		}
if(testaccount.test(lname))
  	 {
		return true;
		}
  	if(testaccount.test(moname))
  	 {
		return true;
		}
  if(testaccount.test(town1))
  
  	 {
		return true;
		}
     if(testaccount.test(words22))
  
  	 {
		return true;
		}
     if(testaccount.test(Dbirth))
  	 {
		return true;
		}
	 if(emailExp.test(Email))
  
  	 {
		return true;
		}
		  if(testaccount.test(Fulname))
  	 {
		return true;
		}	
	if(testaccount.test(relation))
  
  	 {
		return true;
		}
	 if(testaccount.test(addres))
  
  	 {
		return true;
		}
		
		 if(testaccount.test(grade12))
  
  	 {
		return true;
		}		
     }
    </script>
	   <form  action="applicant.php" method="post" enctype="multipart/form-data" name="check" onsubmit="return validate();">

	    <h2><center><strong>APPLICATION FORM</strong> </center></h2>

<h1><center>Personal informaton<center></h1>

<!--<td> IDNO</td><td><input  type="text" name="IDNO" maxlength="50" size="30"></td></tr>-->
<center><tr>
<td> <strong>FirstName</strong></td><td><input  type="text" required name="FirstName" maxlength="50" size="30"></td>

<td><strong>MiddleName</strong></td><td><input  type="text" required name="MiddleName" maxlength="50" size="30">
 </td>
<td><strong>LastName</strong></td><td><input  type="text" required name="LastName" maxlength="50" size="30"></td></tr>
<tr><td>
  <strong>Mothers'Full name</strong>
 </td><td ><input  type="text" required name="MotherName" maxlength="50" size="30"></td>
<td>
 <label for="age"><strong>Age</strong></label></td>
<td>
<select name="Age">
<option selected="selected">19</option>
<option selected="selected">20</option>
<option selected="selected">21</option>
<option  selected="selected">22</option>
<option  selected="selected">23</option>
<option  selected="selected">24</option>
<option  selected="selected">25</option>
<option  selected="selected">26</option>
<option selected="selected">27</option>
<option  selected="selected">28</option>
<option  selected="selected">29</option>
<option selected="selected">30</option>
<option selected="selected">31</option>
<option  selected="selected">32</option>
<option  selected="selected">33</option>
<option  selected="selected">34</option>
<option  selected="selected">35</option>
<option  selected="selected">36</option>
<option  selected="selected">37</option>
<option  selected="selected">38</option>
<option selected="selected">39</option>
<option selected="selected">40</option>
<option  selected="selected">select your age</option>
</select></td>
<tr><td><strong>Gender</strong></td>
 <td><select name="Sex">
 <option>male</option>
 <option>female</option></select></td></tr>
<tr>
 <td > <strong>country</strong>
 <select name=" country">

            <option  selected="selected">Ethiopia</option>
			 </select></td></tr>
<tr><td><strong>Region</strong>
<select name=" Region">
<option selected="selected">Oromia</option>
<option  selected="selected">Amara</option>
<option  selected="selected">Tigray</option>
<option  selected="selected">Somalia</option>
<option  selected="selected">Affar</option>
<option  selected="selected">Gambella</option>
<option  selected="selected">nation and nationality of ethiopia</option>
<option  selected="selected">Harar</option>
<option  selected="selected">B.Gumuz</option></select></td></tr>
 <tr><td > <strong>Town </strong>
<input  type="text" required name="town" maxlength="50" size="30"></td></tr>
 <tr><td><strong>Worada</strong>
<input  type="text" required name="woreda" maxlength="50" size="30">
</td></tr>	
<tr><td > <strong>Kebale</strong>
 <input  type="text" required name="kebale" maxlength="50" size="30">
</td></tr>
<tr><td>
<strong>Date of Birth</strong>
<input  type="date"  placeholder="01/01/2000" required name="Birthdate" maxlength="80" size="30">
</td><td></tr>	 
  <strong><font color="red">permanent Address </strong>
<tr>
 <tr><td > <strong>Mobile No</strong></td>
 <td> <input  type="text" required name="mobilenumber" maxlength="80" size="30"></td></tr>
 <tr> <td ><strong> Email Address </strong></td><td >
  <input  type="text" required name="Emailaddress" maxlength="80" size="30">
 </td></tr>
 <tr><td><strong>P.O.Box</strong> </td><td >
<input  type="text" required name="pobox" maxlength="80" size="30"></td></tr>
  <strong><font color="red">person to be contacted incase of needed</strong>
<tr>
<tr><td ><strong>Full  name</strong>
<input  type="text" required name="fullname" maxlength="50" size="30"></td></tr>
<tr><td> <strong>Relationship</strong>
<input  type="text" required name="relationship" maxlength="50" size="30"></td></tr> 
  <tr><td><strong>Address </strong>
  <input  type="text" required name="address" maxlength="80" size="30"> </td></tr> 
  <tr><td><strong>Telephone Number</strong>
  <input  type="text" required name="phonenunber" maxlength="30" size="30">
 </td></tr>
Educational background
<tr><td><strong>your Grade 10th point : </strong>
<input type="file" name="file"size="20"></td><tr>
 <tr><td><strong>year of taken matric exam</strong>
 <input type="date" name="year ~dulla^@204~ ~dulla^@204~ <td><strong>your  12th grade point : ~dulla^@204~ put type="file" required name="file1"~dulla^@204~ tr><td><strong>year of taken the intr~dulla^@204~ trong>
 <strong><input type="date" na~dulla^@204~ e="20"> </strong></tr></td>
<tr><td><~dulla^@204~ m of Choice</strong>
<select name="Pr~dulla^@204~ on  selected="selected">Distance</opt~dulla^@204~   </select></td></tr>
<tr><td><strong~dulla^@204~ f Choice</strong>
<select name="Depar~dulla^@204~ on selected="selected">Accounting</op~dulla^@204~   selected="selected">Managment</opti~dulla^@204~ selected="selected">Economics</option~dulla^@204~   </td></tr>
<tr><td><strong>Centers<~dulla^@204~ ect name="centers" >
<option  selecte~dulla^@204~ Bahir Dar</option>
</select></td></tr~dulla^@204~ r><tr>
 <td colspan="2" style="text-a~dulla^@204~ 
  <input type="submit" value="Applay~dulla^@204~  type="reset" value="cancel">
 </td></tr>
</form>   
  </body>
</html>
