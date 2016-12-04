<?php
$database="signup";
mysql_connect("localhost");
@mysql_select_db($database);
$aname=$_POST['aname'];
$dept=$_POST['dept'];
$current_designation=$_POST['current_designation'];
$res1=$_POST['res1'];
if(strlen($aname)<1 and strlen($dept)<1 and strlen($current_designation)<1 and strlen($res1)<1){
$query="SELECT * FROM plus_signup,current_address,permanent_address,contact_no,responsibility 
WHERE ((plus_signup.fname='$aname' or plus_signup.mname='$aname' or plus_signup.lname='$aname' or plus_signup.nname='$aname') 
and (plus_signup.dept='$dept') and (plus_signup.current_designation='$current_designation') and 
(responsibility.res1='$res1' or responsibility.res2='$res1' or responsibility.res3='$res1')) and 
current_address.id=plus_signup.id 
and permanent_address.id=plus_signup.id and contact_no.id=plus_signup.id and responsibility.id=plus_signup.id";

$result=mysql_query($query);

$num=mysql_numrows($result);



}
else if(strlen($aname)<1 and strlen($dept)<1 and strlen($current_designation)<1){	
$query="SELECT * FROM plus_signup,current_address,permanent_address,contact_no,responsibility WHERE (responsibility.res1='$res1' or responsibility.res2='$res1' or responsibility.res3='$res1') and responsibility.id=plus_signup.id and current_address.id=responsibility.id and permanent_address.id=responsibility.id and contact_no.id=responsibility.id";
$result=mysql_query($query);

$num=mysql_numrows($result);
}
else if(strlen($aname)<1 and strlen($dept)<1 and strlen($res1)<1){
$query="SELECT * FROM plus_signup,current_address,permanent_address,contact_no,responsibility WHERE plus_signup.current_designation='$current_designation' and current_address.id=plus_signup.id and permanent_address.id=plus_signup.id and contact_no.id=plus_signup.id and responsibility.id=plus_signup.id";
$result=mysql_query($query);

$num=mysql_numrows($result);
}
else if(strlen($aname)<1 and strlen($dept)<1){
$query="SELECT * FROM 
plus_signup,current_address,permanent_address,contact_no,responsibility 
WHERE 
((plus_signup.current_designation='$current_designation') and (responsibility.res1='$res1' or responsibility.res2='$res1' or responsibility.res3='$res1')) 
and current_address.id=plus_signup.id 
and permanent_address.id=plus_signup.id 
and contact_no.id=plus_signup.id 
and responsibility.id=plus_signup.id";
$result=mysql_query($query);

$num=mysql_numrows($result);
}
else if(strlen($aname)<1 and strlen($current_designation)<1 and strlen($res1)<1){
$query="SELECT * FROM plus_signup,current_address,permanent_address,contact_no,responsibility WHERE plus_signup.dept='$dept' and current_address.id=plus_signup.id and permanent_address.id=plus_signup.id and contact_no.id=plus_signup.id and responsibility.id=plus_signup.id";
$result=mysql_query($query);

$num=mysql_numrows($result);
}
else if(strlen($aname)<1 and strlen($current_designation)<1){
$query="SELECT * FROM 
plus_signup,current_address,permanent_address,contact_no,responsibility 
WHERE 
((plus_signup.dept='$dept') and (responsibility.res1='$res1' or responsibility.res2='$res1' or responsibility.res3='$res1')) 
and current_address.id=plus_signup.id 
and permanent_address.id=plus_signup.id 
and contact_no.id=plus_signup.id 
and responsibility.id=plus_signup.id";
$result=mysql_query($query);

$num=mysql_numrows($result);
}
else if(strlen($aname)<1 and strlen($res1)<1){
$query="SELECT * FROM 
plus_signup,current_address,permanent_address,contact_no,responsibility 
WHERE 
((plus_signup.dept='$dept') and (plus_signup.current_designation='$current_designation')) 
and current_address.id=plus_signup.id 
and permanent_address.id=plus_signup.id 
and contact_no.id=plus_signup.id 
and responsibility.id=plus_signup.id";
$result=mysql_query($query);

$num=mysql_numrows($result);
}
else if(strlen($aname)<1){
$query="SELECT * FROM plus_signup,current_address,permanent_address,contact_no,responsibility WHERE ((plus_signup.dept='$dept') and (plus_signup.current_designation='$current_designation')
and (responsibility.res1='$res1' or responsibility.res2='$res1' or responsibility.res3='$res1')) 
and current_address.id=plus_signup.id and permanent_address.id=plus_signup.id and contact_no.id=plus_signup.id and responsibility.id=plus_signup.id";
$result=mysql_query($query);

$num=mysql_numrows($result);
}
else if(strlen($dept)<1 and strlen($current_designation)<1 and strlen($res1)<1){
$query="SELECT * FROM plus_signup,current_address,permanent_address,contact_no,responsibility WHERE (plus_signup.fname='$aname' or plus_signup.mname='$aname' or plus_signup.lname='$aname' or plus_signup.nname='$aname') and current_address.id=plus_signup.id and permanent_address.id=plus_signup.id and contact_no.id=plus_signup.id and responsibility.id=plus_signup.id";
$result=mysql_query($query);

$num=mysql_numrows($result);
}
else if(strlen($dept)<1 and strlen($current_designation)<1){
$query="SELECT * FROM plus_signup,current_address,permanent_address,contact_no,responsibility 
WHERE ((plus_signup.fname='$aname' or plus_signup.mname='$aname' or plus_signup.lname='$aname' or plus_signup.nname='$aname') 
and (responsibility.res1='$res1' or responsibility.res2='$res1' or responsibility.res3='$res1')) and 
current_address.id=plus_signup.id and permanent_address.id=plus_signup.id and contact_no.id=plus_signup.id and responsibility.id=plus_signup.id";
 $result=mysql_query($query);

$num=mysql_numrows($result);
}
else if(strlen($dept)<1 and strlen($res1)<1){
$query="SELECT * FROM plus_signup,current_address,permanent_address,contact_no,responsibility 
WHERE ((plus_signup.fname='$aname' or plus_signup.mname='$aname' or plus_signup.lname='$aname' or plus_signup.nname='$aname') 
and plus_signup.current_designation='$current_designation') and 
current_address.id=plus_signup.id and permanent_address.id=plus_signup.id and contact_no.id=plus_signup.id and responsibility.id=plus_signup.id";
 $result=mysql_query($query);

$num=mysql_numrows($result);
}
else if(strlen($dept)<1){
$query="SELECT * FROM plus_signup,current_address,permanent_address,contact_no,responsibility 
WHERE ((plus_signup.fname='$aname' or plus_signup.mname='$aname' or plus_signup.lname='$aname' or plus_signup.nname='$aname') 
and (plus_signup.current_designation='$current_designation') and (responsibility.res1='$res1' or responsibility.res2='$res1' or responsibility.res3='$res1')) and 
current_address.id=plus_signup.id and permanent_address.id=plus_signup.id and contact_no.id=plus_signup.id and responsibility.id=plus_signup.id";
 $result=mysql_query($query);

$num=mysql_numrows($result);
}
else if(strlen($current_designation)<1 and strlen($res1)<1){
$query="SELECT * FROM plus_signup,current_address,permanent_address,contact_no,responsibility 
WHERE ((plus_signup.fname='$aname' or plus_signup.mname='$aname' or plus_signup.lname='$aname' or plus_signup.nname='$aname') 
and plus_signup.dept='$dept') and 
current_address.id=plus_signup.id and permanent_address.id=plus_signup.id and contact_no.id=plus_signup.id and responsibility.id=plus_signup.id";
  $result=mysql_query($query);

$num=mysql_numrows($result);
}
else if(strlen($current_designation)<1){
$query="SELECT * FROM plus_signup,current_address,permanent_address,contact_no,responsibility 
WHERE ((plus_signup.fname='$aname' or plus_signup.mname='$aname' or plus_signup.lname='$aname' or plus_signup.nname='$aname') 
and (plus_signup.dept='$dept') and (responsibility.res1='$res1' or responsibility.res2='$res1' or responsibility.res3='$res1')) and 
current_address.id=plus_signup.id and permanent_address.id=plus_signup.id and contact_no.id=plus_signup.id and responsibility.id=plus_signup.id";
   $result=mysql_query($query);

$num=mysql_numrows($result);
}
else if(strlen($res1)<1){
 $query="SELECT * FROM plus_signup,current_address,permanent_address,contact_no,responsibility 
WHERE ((plus_signup.fname='$aname' or plus_signup.mname='$aname' or plus_signup.lname='$aname' or plus_signup.nname='$aname') 
and (plus_signup.dept='$dept') and (plus_signup.current_designation='$current_designation')) and 
current_address.id=plus_signup.id and permanent_address.id=plus_signup.id and contact_no.id=plus_signup.id and responsibility.id=plus_signup.id";
   $result=mysql_query($query);

$num=mysql_numrows($result);
}

else{
$query="SELECT * FROM plus_signup,current_address,permanent_address,contact_no,responsibility 
WHERE ((plus_signup.fname='$aname' or plus_signup.mname='$aname' or plus_signup.lname='$aname' or plus_signup.nname='$aname') 
and (plus_signup.dept='$dept') and (plus_signup.current_designation='$current_designation') and (responsibility.res1='$res1' or responsibility.res2='$res1' or responsibility.res3='$res1')) and 
current_address.id=plus_signup.id and permanent_address.id=plus_signup.id and contact_no.id=plus_signup.id and responsibility.id=plus_signup.id";
   $result=mysql_query($query);

$num=mysql_numrows($result);
}

mysql_close();
	?>
	<html>
	<head>
	</head>
	<body BACKGROUND="Penguins.gif">
<H2 align="center"><FONT COLOR="#CCCCFF"><B>Result</B></FONT></H2> 
<?php
echo "<center><font size=6 color='#FFFFFF'><B>$num records found</B></font></center>";
?>
<table border=1 align='center' Bordercolor="CCCCCC" BGcolor="CCCC99">
<tr><th colspan='14' align='center'>Employees</th></tr>

<tr>
<td align="center"><strong>First Name</strong></td>
<td align="center"><strong>Middle Name</strong></td>
<td align="center"><strong>Last Name</strong></td>
<td align="center"><strong>Nick Name</strong></td>
<td align="center"><strong>Email</strong></td>
<td align="center"><strong>Dept</strong></td>
<td align="center"><strong>Designation</strong></td>
<td align="center"><strong>Cell No.</strong></td>
<td align="center"><strong>Current Address</strong></td>
<td align="center"><strong>Detail</strong></td>
</tr>
<?php
while($rows=mysql_fetch_array($result)){
?>

<tr>
<td><? echo $rows['fname']; ?></td>
<td><? echo $rows['mname']; ?></td>
<td><? echo $rows['lname']; ?></td>
<td><? echo $rows['nname']; ?></td>
<td><? echo $rows['email1']; ?></td>
<td><? echo $rows['dept']; ?></td>
<td><? echo $rows['current_designation']; ?></td>
<td><? echo $rows['cpn']; ?></td>
<td><? echo "Hold-";echo $rows['hold_no'];echo ", ";echo "Road- ";echo $rows['road_no'];echo ", "; echo "Area-";echo $rows['area'];echo ", "; echo "Thana-";echo $rows['thana'];echo ", "; echo "District-";echo $rows['district'];?></td>

<td align="center"><a href="det.php?id=<? echo $rows['id']; ?>">Detail</a></td>

</tr>

	<?php


	}
	echo "<font face='Verdana' size='2' ><br><center><input type='button' value='Back' onClick='history.go(-1)'></center>";
	?>
	
	   
	<h2 align="center"><B><a href="welcome.html">Back to welcome page</B></h2>
	</body>

</html>