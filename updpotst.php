<title>Update Form</title>
</head>

<body BACKGROUND="Penguins.gif">
<?php
include ("db.php");
$userid=$_POST['userid'];



$query="SELECT * FROM plus_signupst,contact_no_st,current_address_st WHERE plus_signupst.userid='$userid' and contact_no_st.userid='$userid' and current_address_st.userid='$userid'";
$result=mysql_query($query);

$rows=mysql_fetch_array($result);

?>


<table border='0' width='75%' cellspacing='0' cellpadding='0' 

align=center><form name=form15 method=post action=updateckbigst.php 

onsubmit='return validate(this)'><input type=hidden name=todo 

value=post>
<tr bgcolor='#9963FF'><td align=center colspan=4><font face='Verdana' 

size='4' COLOR='00CCFF'><b>Update a Record</b></td></tr>
<td align='center'><input type="hidden" name="id" id="id" value= <? echo $rows['id']; ?>></td>

<tr><td >&nbsp;<font face='Verdana' size='3' >Email</td><td 

><font face='Verdana' size='2'><input type="text" name="email" id="email" value=<? echo $rows['email']; ?>></td></tr>


<tr ><td >&nbsp;<font face='Verdana' size='3' >Age</td><td ><font 

face='Verdana' size='2'><input type="text" name="age" id="age" value=<? echo $rows['age']; ?>></td>
<tr ><td >&nbsp;<font face='Verdana' size='3' >Semester</td><td ><font face='Verdana' size='2'><input type="text" 

name="semester" id="semester" value=<? echo $rows['semester'];?>></td></tr>
<tr ><td >&nbsp;<font face='Verdana' size='3' >Holding No.(Current 

Address)</td><td ><font face='Verdana' size='2'><input type="text" 

name="hold_no" id="hold_no" value=<? echo $rows['hold_no'];?>></td>
<td >&nbsp;<font face='Verdana' size='3' >Road No.(Current 

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

><font face='Verdana' size='2'><input type="text" name="cpn" id="cpn" value=<? echo $rows['cpn'];?>></td></tr>



<tr ><td >&nbsp;<font face='Verdana' size='3' >T&T No.</td><td ><font 

face='Verdana' size='2'><input type="text" name="tnt" id="tnt" value=<? echo $rows['tnt'];?>></td></tr>

<tr ><td align="right" colspan=2><input type=submit 

value=Update></td></tr>

</table>
<center><input type='button' value='Back' onClick='history.go(-1)'></center>
<h2 align="center"><B><a href="welcome.html">Back to welcome page</B></h2>
</form>

</body>
</html>