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
$email=$_POST['email'];
$age=$_POST['age'];
$semester=$_POST['semester'];
$hold_no=$_POST['hold_no'];
$Road=$_POST['road_no'];
$area=$_POST['area'];
$thana=$_POST['thana'];
$district=$_POST['district'];
$cpn=$_POST['cpn'];
$tnt=$_POST['tnt'];
include ("db.php");
if(isset($todo) and $todo=="post"){
$status = "OK";
$msg="";
}
if(!isset($email) or strlen($email) <3){
$msg=$msg."<center>emailid should be =3 or more than 3 char 

length</center><BR>";
$status= "NOTOK";}	
if (!is_numeric($age)){

$msg=$msg."<center>Age must be numeric</center><BR></center>";
$status= "NOTOK";
} 
if ($age<17 or $age>29){

$msg=$msg."<center>Age must be between 17 to 27.<BR></center>";
$status= "NOTOK";
}
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
if (!isset($district) or strlen($district)<2){

$msg=$msg."<center>District should be =2 or more than 2 char 

length</center></center>";
$status= "NOTOK";
}
if (!is_numeric($cpn)){
$msg=$msg."<center>cell no. must be numeric</center>";
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
$sql1="UPDATE plus_signupst 
SET email='$email',
age='$age',
semester='$semester' WHERE id='$id' LIMIT 1";
$qury1=mysql_query($sql1);

$sql2="UPDATE current_address_st 
SET hold_no='$hold_no',
 road_no='$road_no',
 area='$area',
 thana='$thana', 
district='$district' WHERE id='$id' LIMIT 1";
$qury2=mysql_query($sql2);

$sql3="UPDATE contact_no_st
SET cpn='$cpn',
tnt='$tnt'
 WHERE id='$id' LIMIT 1";
$qury3=mysql_query($sql3);
}

if($qury1){
echo "";
}
else{
echo "<center><font size='6' color='#33CC66'>error1</font></center>";
}
if($qury2){
echo "";
}
else{
echo "<center><font size='6' color='#33CC66'>error2</font></center>";
}
if($qury3){
echo "<center><font size='6' color='#33CC66'>Successfully Updated.</font></center>";
echo "<p class=data><center><FONT SIZE=4><B><a href='tcr.php'> Teacher's Option </a></B></FONT></center>
<br><center><FONT SIZE=4><B>
<a href='stdnt.php'>Student's Option</a></B></FONT></center>";}
else {
echo "<center><font size='6' color='#33CC66'>error3</font></center>";
}
?>
<h3 align="center"><a href="adlog.php">Log Out</a></h3>
</body>
</html>
