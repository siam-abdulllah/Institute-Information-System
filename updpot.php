<title>Update Form</title>
</head>

<body BACKGROUND="Penguins.gif">
<?php
include ("db.php");
$userid=$_POST['userid'];



$query="SELECT * FROM plus_signup,contact_no,current_address,responsibility WHERE plus_signup.userid='$userid' and contact_no.userid='$userid' and current_address.userid='$userid' and responsibility.userid='$userid'";
$result=mysql_query($query);

$rows=mysql_fetch_array($result);

?>


<table border='0' width='75%' cellspacing='0' cellpadding='0' 

align=center><form name=form15 method=post action=updateckbig.php 

onsubmit='return validate(this)'><input type=hidden name=todo 

value=post>
  <h2 align='center'><strong><FONT COLOR='#FF6633'>Update Form</FONT></strong></h2>


  <table border='0' width='75%' cellspacing='0' cellpadding='0' 

align=center><form name=form10 method=post action=signupck.php 

onsubmit='return validate(this)'><input type=hidden name=todo 

value=post>

<tr bgcolor='#9963FF'><td align=center colspan=4><font face='Verdana' 

size='4' COLOR='00CCFF'><b>Update a Record</b></td></tr>
<td align='center'><input type="hidden" name="id" id="id" value= <? echo $rows['id']; ?>></td>

<tr><td >&nbsp;<font face='Verdana' size='3' >Email1</td><td 

><font face='Verdana' size='2'><input type="text" name="email1" id="email1" value=<? echo $rows['email1']; ?>></td><td>&nbsp;
<font face='Verdana' size='3' >Email2</td><td ><font face='Verdana' 

size='2'>
<input type="text" name="email2" id="email2" value=<? echo $rows['email2']; ?>></td></tr>

<tr ><td >&nbsp;<font face='Verdana' size='3' >Maritul Status</td><td 

><font face='Verdana' size='2'>  <input type="text" name="ms" id="ms" value=<? echo $rows['ms']; ?>></td></tr>

<tr ><td >&nbsp;<font face='Verdana' size='3' >Age</td><td ><font 

face='Verdana' size='2'><input type="text" name="age" id="age" value=<? echo $rows['age']; ?>></td><td >&nbsp;<font 

face='Verdana' size='3' >Dept. Name</td><td 

><font face='Verdana' size='2'><input type="text" name="dept" id="dept" value=<? echo $rows['dept']; ?>></td></tr>


<tr ><td >&nbsp;<font face='Verdana' size='3' >Current Designation 

Name</td><td ><font face='Verdana' size='2'><input type="text" 

name="current_designation" id="current_designation" value=<? echo $rows['current_designation']; ?>></td><td >&nbsp;<font face='Verdana' size='3' 

>Curr. Designation 

Join Date(YYYY-MM-DD)</td><td ><font face='Verdana' size='2'><input 

type="text" name="curr_des_joindate" id="curr_des_joindate" value=<? echo $rows['curr_des_joindate'];?>></td></tr>



<tr ><td >&nbsp;<font face='Verdana' size='3' >Holding No.(Current 

Address)</td><td ><font face='Verdana' size='2'><input type="text" 

name="hold_no" id="hold_no" value=<? echo $rows['hold_no'];?>></td><td >&nbsp;<font face='Verdana' size='3' >Road No.(Current 

Address)</td><td ><font face='Verdana' size='2'><input type="text" 

name="road_no" id="road_no" value=<? echo $rows['road_no'];?>></td></tr>



<tr ><td >&nbsp;<font face='Verdana' size='3' >Area(Current Address)

</td><td ><font face='Verdana' size='2'><input type="text" 

name="area" id="area" value=<? echo $rows['area'];?>></td><td >&nbsp;<font face='Verdana' size='3' >Thana(Current Address)

</td><td ><font face='Verdana' size='2'><input type="text" 

name="thana" id="thana" value=<? echo $rows['thana'];?>></td></tr>


<tr ><td >&nbsp;<font face='Verdana' size='3' >District(Current 

Address)</td><td ><font face='Verdana' size='2'><input type="text" 

name="district" id="district" value=<? echo $rows['district'];?>></td></tr>

<tr ><td >&nbsp;<font face='Verdana' size='3' >Cell Phone No.</td><td 

><font face='Verdana' size='2'><input type="text" name="cpn" id="cpn" value=<? echo $rows['cpn'];?>></td><td >&nbsp;<font face='Verdana' size='3' >Office Phone No.</td><td 

><font face='Verdana' size='2'><input type="text" name="opn" id="opn" value=<? echo $rows['opn'];?>></td></tr>



<tr ><td >&nbsp;<font face='Verdana' size='3' >T&T No.</td><td ><font 

face='Verdana' size='2'><input type="text" name="tnt" id="tnt" value=<? echo $rows['tnt'];?>></td></tr>

<tr ><td >&nbsp;<font face='Verdana' size='3' >Responsibility 1</td><td 

><font face='Verdana' size='2'><input type="text" name="res1" id="res1" value=<? echo $rows['res1'];?>></td></tr>

<tr ><td >&nbsp;<font face='Verdana' size='3' >Responsibility 2</td><td 

><font face='Verdana' size='2'><input type="text" name="res2" id="res2" value=<? echo $rows['res2'];?>></td></tr>

<tr ><td >&nbsp;<font face='Verdana' size='3' >Responsibility 3</td><td 

><font face='Verdana' size='2'><input type="text" name="res3" id="res3" value=<? echo $rows['res3'];?>></td></tr>
<tr ><td align="right" colspan=2><input type=submit 

value=Update></td></tr>

</table>
<center><input type='button' value='Back' onClick='history.go(-1)'></center>
<h2 align="center"><B><a href="welcome.html">Back to welcome page</B></h2>
</form>

</body>
</html>