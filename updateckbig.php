<html>
<head>
<title>(Type a title for your page here)</title>
<meta name="GENERATOR" content="Arachnophilia 4.0">
<meta name="FORMATTER" content="Arachnophilia 4.0">
</head>
<body BACKGROUND="Penguins.gif">
<?php
$id=$_POST['id'];
$todo=$_POST['todo'];
$email1=$_POST['email1'];
$email2=$_POST['email2'];
$ms=$_POST['ms'];
$age=$_POST['age'];
$dept=$_POST['dept'];
$current_designation=$_POST['current_designation'];
$curr_des_joindate=$_POST['curr_des_joindate'];
$hold_no=$_POST['hold_no'];
$Road=$_POST['road_no'];
$area=$_POST['area'];
$thana=$_POST['thana'];
$district=$_POST['district'];
$cpn=$_POST['cpn'];
$opn=$_POST['opn'];
$tnt=$_POST['tnt'];
$res1=$_POST['res1'];
$res2=$_POST['res2'];
$res3=$_POST['res3'];
include ("db.php");

if(isset($todo) and $todo=="post"){
$status = "OK";
$msg="";
}
if(!isset($email1) or strlen($email1) <3){
$msg=$msg."<center>First name should be =3 or more than 3 char 

length</center><BR>";
$status= "NOTOK";}	
if(!isset($email2) or strlen($email2) <3){
$msg=$msg."<center>Middle name should be =3 or more than 3 char 

length<BR></center>";
$status= "NOTOK";}
	
if (!is_numeric($age)){

$msg=$msg."<center>Age must be numeric</center><BR></center>";
$status= "NOTOK";
} 
if ($age<24 or $age>60){

$msg=$msg."<center>Age must be between 25 to 59.<BR></center>";
$status= "NOTOK";
}
if(!isset($dept) or strlen($dept)<3){

$msg=$msg."<center>Dept. name should be =3 or more than 3 char 

length<BR></center>";
$status="NOTOK";}
if(!isset($current_designation) or strlen($current_designation)<3){

$msg=$msg."<center>Designation name should be =3 or more than 3 char 

length<BR></center>";
$status="NOTOK";}
if(!isset($curr_des_joindate) or strlen($curr_des_joindate)<6){

$msg=$msg."<center>Current designation joining date should be =6 or 

more than 6 char 

length<BR></center>";
$status="NOTOK";}
if (!is_numeric($hold_no)){

$msg=$msg."<center>Holding No must be numeric</center></center>";
$status= "NOTOK";
}
if (!is_numeric($road_no)){

$msg=$msg."<center>Road No must be numeric</center></center>";
$status= "NOTOK";
}
if (!isset($area) or strlen($area)<3){

$msg=$msg."<center>Area should be =3 or more than 3 char 

length</center></center>";
$status= "NOTOK";
}
if (!isset($thana) or strlen($thana)<2){

$msg=$msg."<center>Thana should be =2 or more than 2 char 

length</center></center>";
$status= "NOTOK";
}
if (!is_numeric($cpn)){
$msg=$msg."<center>cell no. must be numeric</center>";
$status= "NOTOK";
} 
	
if(!is_numeric($opn)){

$msg=$msg."<center>Office phone no must be numeric.</center>";
$status= "NOTOK";
}

if(!is_numeric($tnt)){

$msg=$msg."<center>tnt no must be numeric.</center>";
$status= "NOTOK";
}


if($status<>"OK"){ 
echo "<font face='Verdana' size='2' color=red>

$msg</font><br><center><input type='button' value='Retry' 

onClick='history.go(-1)'></center>";
}else{
$sql1="UPDATE plus_signup 
SET email1='$email1',
email2='$email2',
ms='$ms',
age='$age',
dept='$dept',
current_designation='$current_designation',
curr_des_joindate='$curr_des_joindate' WHERE id='$id' LIMIT 1";
$qury1=mysql_query($sql1);

$sql2="UPDATE current_address 
SET hold_no='$hold_no',
 road_no='$road_no',
 area='$area',
 thana='$thana', 
district='$district' WHERE id='$id' LIMIT 1";
$qury2=mysql_query($sql2);

$sql3="UPDATE contact_no
SET cpn='$cpn',
opn='$opn', 
tnt='$tnt'
 WHERE id='$id' LIMIT 1";
$qury3=mysql_query($sql3);
$sql4="UPDATE responsibility 
SET res1='$res1' ,
res2='$res2',
res3='$res3'
WHERE id='$id' LIMIT 1";
$qury4=mysql_query($sql4);

}

if($qury1){
echo "";
}
else{
echo "<center><font size='6' color='#33CC66'>error</font></center>";
}
if($qury2){
echo "";
}
else{
echo "<center><font size='6' color='#33CC66'>error</font></center>";
}
if($qury3){
echo "";
}
else {
echo "<center><font size='6' color='#33CC66'>error</font></center>";
}
if($qury4){
echo "<center><font size='6' color='#33CC66'>Successfully Updated.</font></center>";
echo "<p class=data><center><FONT SIZE=4><B><a href='tcr.php'> Teacher's Option </a></B></FONT></center>
<br><center><FONT SIZE=4><B>
<a href='stdnt.php'>Student's Option</a></B></FONT></center>";}
else {
echo "<center><font size='6' color='#33CC66'>error</font></center>";
}
?>
<h3 align="center"><a href="adlog.php">Log Out</a></h3>
</body>
</html>
