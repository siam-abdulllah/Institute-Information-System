<html>
<head>
<title>(Type a title for your page here)</title>
<meta name="GENERATOR" content="Arachnophilia 4.0">
<meta name="FORMATTER" content="Arachnophilia 4.0">
</head>
<body BACKGROUND="Penguins.gif">
<?php
 $target = "images/"; 
 $target = $target . basename( $_FILES['photo']['name']); 
$todo=$_POST['todo'];
$fname=$_POST['fname'];
$mname=$_POST['mname'];
$lname=$_POST['lname'];
$nname=$_POST['nname'];
$userid=$_POST['userid'];
$email=$_POST['email'];
$sex=$_POST['sex'];
$birthdate=$_POST['birthdate'];
$age=$_POST['age'];
$dept=$_POST['dept'];
$session=$_POST['session'];

$semester=$_POST['semester'];
$hold_no=$_POST['hold_no'];
$road_no=$_POST['road_no'];
$area=$_POST['area'];
$thana=$_POST['thana'];
$district=$_POST['district'];
$village=$_POST['village'];
$ppost=$_POST['ppost'];
$pthana=$_POST['pthana'];
$pdistrict=$_POST['pdistrict'];
$cpn=$_POST['cpn'];
$tnt=$_POST['tnt'];
$pic=($_FILES['photo']['name']); 

include ("db.php");
if(isset($todo) and $todo=="post"){
$status = "OK";
$msg="";
}
if(!isset($fname) or strlen($fname) <3){
$msg=$msg."<center>First name should be =3 or more than 3 char 

length</center>";
$status= "NOTOK";}	
if(!isset($mname) or strlen($mname) <3){
$msg=$msg."<center>Middle name should be =3 or more than 3 char 

length</center>";
$status= "NOTOK";}
if(!isset($lname) or strlen($lname) <3){
$msg=$msg."<center>Last name should be =3 or more than 3 char 

length</center>";
$status= "NOTOK";}		
if(!isset($nname) or strlen($nname) <2){
$msg=$msg."<center>Nick name should be =2 or more than 2 char 

length</center>";
$status= "NOTOK";}	
if(!isset($userid) or strlen($userid) <3){

$msg=$msg."<center>User id should be =3 or more than 3 char 

length</center>";
$status= "NOTOK";}	
if(mysql_num_rows(mysql_query("SELECT userid FROM plus_signupst WHERE 

userid 

= '$userid'"))){

$msg=$msg."<center>User Id already exists. Please try another 

one</center>";
$status= "NOTOK";
}					
if(!isset($email) or strlen($email)<3){
$msg=$msg."<center>Email should be =3 or more than 3 char 

length</center>";
$status="NOTOK";}
if(mysql_num_rows(mysql_query("SELECT email FROM plus_signupst WHERE 

email 

= '$email'"))){

$msg=$msg."<center>Email already exists. Please try another 

one</center>";
$status= "NOTOK";
}	
if(!isset($birthdate) or strlen($birthdate)<6){

$msg=$msg."<center>birthdate should be =6 or more than 6 char 

length</center>";
$status="NOTOK";}
if (!is_numeric($age)){

$msg=$msg."<center>Age must be numeric</center></center>";
$status= "NOTOK";
} 



if ($age<17 or $age>29){

$msg=$msg."<center>Age must be between 18 to 28.</center>";
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

if (!isset($village) or strlen($village)<3){

$msg=$msg."<center>Village should be =3 or more than 3 char 

length</center></center>";
$status= "NOTOK";
}
if (!isset($ppost) or strlen($ppost)<3){

$msg=$msg."<center>Post should be =3 or more than 3 char 

length</center></center>";
$status= "NOTOK";
}
if (!isset($pthana) or strlen($pthana)<2){

$msg=$msg."<center>Thana p. should be =2 or more than 2 char 

length</center></center>";
$status= "NOTOK";
}
if (!isset($pdistrict) or strlen($pdistrict)<2){

$msg=$msg."<center>District p. should be =2 or more than 2 char 

length</center></center>";
$status= "NOTOK";
}

if (!is_numeric($cpn)){
$msg=$msg."<center>cell no. must be numeric</center>";
$status= "NOTOK";
} 
if(mysql_num_rows(mysql_query("SELECT cpn FROM contact_no_st WHERE cpn 

= '$cpn'"))){

$msg=$msg."<center>Cell Phone No already exists. Please try another 

one</center>";
$status= "NOTOK";
}	
if(!is_numeric($tnt)){

$msg=$msg."<center>tnt no must be numeric.</center>";
$status= "NOTOK";
}

if($status<>"OK"){ 
echo "<font face='Verdana' size='2' color=red>

$msg</font><br><center><input 

type='button' value='Retry' onClick='history.go(-1)'></center>";
}else{
$sql1="INSERT INTO `plus_signupst`
(`fname`,`mname`,`lname`,`nname`,`userid`,`email`,`sex`,`birthdate`,
`age`,`dept`,`session`,`semester`) 
VALUES
('$fname', '$mname', '$lname', '$nname', '$userid', '$email', '$sex', '$birthdate', '$age',
 '$dept', '$session','$semester')";
$qury1=mysql_query($sql1);
$sql2="INSERT INTO `contact_no_st` (`userid`, `cpn`,  `tnt`) VALUES
('$userid','$cpn','$tnt')";
$qury2=mysql_query($sql2);
$sql3="INSERT INTO `current_address_st` (`userid`, `hold_no`, `road_no`, 
`area`, `thana`, `district`) VALUES 
('$userid','$hold_no','$road_no','$area','$thana','$district')";
$qury3=mysql_query($sql3);
$sql4="INSERT INTO `permanent_address_st` (`userid`, `village`, `ppost`, 
`pthana`, `pdistrict`) VALUES
('$userid','$village','$ppost','$pthana','$pdistrict')";
$qury4=mysql_query($sql4);
$sql5="INSERT INTO `photo_st` (`userid`,`photo`) VALUES 
('$userid','$pic')";
$qury5=mysql_query($sql5);
if(move_uploaded_file($_FILES['photo']['tmp_name'], $target)) 
{ 
echo "<center><font color='#33CC66'>The file ". basename( $_FILES
['uploadedfile']['name']). " has 
been uploaded, and your information has been added to the 
directory</font></center>"; 
} 
else { 
echo ""; 
}
}
if(!$qury1){
echo "<center><br><font size='4' 
color=red><b>Error1</b></font></center>";
if(!$qury2){
echo "<center><br><font size='4' 
color=red><b>Error2</b></font></center>";
if(!$qury3){
echo "<center><br><font size='4' 
color=red><b>Error3</b></font></center>";
if(!qury4){
echo "<center><br><font size='4' 
color=red><b>Error4</b></font></center>";
if(!qury5){
echo "<center><br><font size='4' 
color=red><b>Error5</b></font></center>";
}
}
}
}
}
else{
echo "<center><font size='6' 
color='#33CC66'><b><blink>Successful Entry of the student</blink></b><font></center>";
echo "<p class=data><center><FONT SIZE=4><B><a href='tcr.php'> Teacher's Option </a></B></FONT></center>
<br><center><FONT SIZE=4><B>
<a href='stdnt.php'>Student's Option</a></B></FONT></center>";
}
?>
<h4 align="center"><a href="welcome.html">Back To welcome Page</a></h4>
</body>
</html>
