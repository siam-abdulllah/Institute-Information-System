<?php
$database="signup";
mysql_connect("localhost");
@mysql_select_db($database);
$aname=$_POST['aname'];
$dept=$_POST['dept'];
$semester=$_POST['semester'];
if(strlen($aname)<1 and strlen($dept)<1 and strlen($semester)<1){
$query="SELECT * FROM plus_signupst,current_address_st,permanent_address_st,contact_no_st,photo_st 
WHERE ((plus_signupst.fname='$aname' or plus_signupst.mname='$aname' or plus_signupst.lname='$aname' or plus_signupst.nname='$aname') 
and (plus_signupst.dept='$dept') and (plus_signupst.semester='$semester')) and 
current_address_st.id=plus_signupst.id 
and permanent_address_st.id=plus_signupst.id and contact_no_st.id=plus_signupst.id and photo_st.id=plus_signupst.id";

$result=mysql_query($query);

$num=mysql_numrows($result);



}
else if(strlen($aname)<1 and strlen($dept)<1){	
$query="SELECT * FROM plus_signupst,current_address_st,permanent_address_st,contact_no_st,photo_st WHERE plus_signupst.semester='$semester' and plus_signupst.id=current_address_st.id and plus_signupst.id=permanent_address_st.id and plus_signupst.id=contact_no_st.id and plus_signupst.id=photo_st.id";
$result=mysql_query($query);

$num=mysql_numrows($result);
}
else if(strlen($aname)<1 and strlen($semester)<1){
$query="SELECT * FROM plus_signupst,current_address_st,permanent_address_st,contact_no_st,photo_st WHERE plus_signupst.dept='$dept' 
and plus_signupst.id=current_address_st.id and plus_signupst.id=permanent_address_st.id
 and plus_signupst.id=contact_no_st.id and plus_signupst.id=photo_st.id";
$result=mysql_query($query);

$num=mysql_numrows($result);
}
else if(strlen($semester)<1 and strlen($dept)<1){
$query="SELECT * FROM 
plus_signupst,current_address_st,permanent_address_st,contact_no_st,photo_st 
WHERE 
(plus_signupst.fname='$aname' or plus_signupst.mname='$aname' or plus_signupst.lname='$aname' or plus_signupst.nname='$aname')
and current_address_st.id=plus_signupst.id
and permanent_address_st.id=plus_signupst.id 
and contact_no_st.id=plus_signupst.id 
and photo_st.id=plus_signupst.id";
$result=mysql_query($query);
$num=mysql_numrows($result);
}
else if(strlen($aname)<1){
$query="SELECT * FROM plus_signupst,current_address_st,permanent_address_st,contact_no_st,photo_st WHERE (plus_signupst.dept='$dept') and (plus_signupst.semester='$semester') 
and plus_signupst.id=current_address_st.id and plus_signupst.id=permanent_address_st.id and plus_signupst.id=contact_no_st.id and plus_signupst.id=photo_st.id";
$result=mysql_query($query);

$num=mysql_numrows($result);
}
else if(strlen($dept)<1){
$query="SELECT * FROM plus_signupst,current_address_st,permanent_address_st,contact_no_st,photo_st WHERE (plus_signupst.fname='$aname' or plus_signupst.mname='$aname' or plus_signupst.lname='$aname' or plus_signupst.nname='$aname') and (plus_signupst.semester='$semester') and current_address_st.id=plus_signupst.id and permanent_address_st.id=plus_signupst.id and contact_no_st.id=plus_signupst.id and photo_st.id=plus_signupst.id";
$result=mysql_query($query);

$num=mysql_numrows($result);
}
else if(strlen($semester)<1){
$query="SELECT * FROM plus_signupst,current_address_st,permanent_address_st,contact_no_st,photo_st 
WHERE (plus_signupst.fname='$aname' or plus_signupst.mname='$aname' or plus_signupst.lname='$aname' or plus_signupst.nname='$aname') 
and (plus_signupst.dept='$dept') and 
current_address_st.id=plus_signupst.id and permanent_address_st.id=plus_signupst.id and contact_no_st.id=plus_signupst.id and photo_st.id=plus_signupst.id";
 $result=mysql_query($query);
$num=mysql_numrows($result);
}
else{
$query="SELECT * FROM plus_signupst,current_address_st,permanent_address_st,contact_no_st,photo_st 
WHERE (plus_signupst.fname='$aname' or plus_signupst.mname='$aname' or plus_signupst.lname='$aname' or plus_signupst.nname='$aname') 
and (plus_signupst.dept='$dept') and (plus_signupst.semester='$semester') and 
current_address_st.id=plus_signupst.id and permanent_address_st.id=plus_signupst.id and contact_no_st.id=plus_signupst.id and photo_st.id=plus_signupst.id";
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
<tr><th colspan='14' align='center'>Results</th></tr>

<tr>
<td align="center"><strong>First Name</strong></td>
<td align="center"><strong>Middle Name</strong></td>
<td align="center"><strong>Last Name</strong></td>
<td align="center"><strong>Nick Name</strong></td>
<td align="center"><strong>Email</strong></td>
<td align="center"><strong>Dept</strong></td>
<td align="center"><strong>Semester</strong></td>
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
<td><? echo $rows['email']; ?></td>
<td><? echo $rows['dept']; ?></td>
<td><? echo $rows['semester']; ?></td>
<td><? echo "0"; echo $rows['cpn']; ?></td>
<td><? echo "Hold-";echo $rows['hold_no'];echo ", ";echo "Road- ";echo $rows['road_no'];echo ", "; echo "Area-";echo $rows['area'];echo ", "; echo "Thana-";echo $rows['thana'];echo ", "; echo "District-";echo $rows['district'];?></td>

<td align="center"><a href="detst.php?id=<? echo $rows['id']; ?>">Detail</a></td>

</tr>

	<?php


	}
	echo "<font face='Verdana' size='2' ><br><center><input type='button' value='Back' onClick='history.go(-1)'></center>";
	?>
	
	   
	<h2 align="center"><B><a href="welcome.html">Back to welcome page</B></h2>
	</body>

</html>