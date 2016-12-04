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
$email1=$_POST['email1'];
$email2=$_POST['email2'];
$sex=$_POST['sex'];
$ms=$_POST['ms'];
$age=$_POST['age'];
$dept=$_POST['dept'];
$jobjoindate=$_POST['jobjoindate'];
$current_designation=$_POST['current_designation'];
$curr_des_joindate=$_POST['curr_des_joindate'];
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
$opn=$_POST['opn'];
$tnt=$_POST['tnt'];
$res1=$_POST['res1'];
$res2=$_POST['res2'];
$res3=$_POST['res3'];
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
if(mysql_num_rows(mysql_query("SELECT userid FROM plus_signup WHERE 

userid 

= '$userid'"))){

$msg=$msg."<center>User Id already exists. Please try another 

one</center>";
$status= "NOTOK";
}					
if(!isset($email1) or strlen($email1)<3){
$msg=$msg."<center>Email1 should be =3 or more than 3 char 

length</center>";
$status="NOTOK";}
if(mysql_num_rows(mysql_query("SELECT email1 FROM plus_signup WHERE 

email1 

= '$email1'"))){

$msg=$msg."<center>Email1 already exists. Please try another 

one</center>";
$status= "NOTOK";
}	
if(!isset($email2) or strlen($email2)<3){

$msg=$msg."<center>Email2 should be =3 or more than 3 char 

length</center>";
$status="NOTOK";}

if(mysql_num_rows(mysql_query("SELECT email2 FROM plus_signup WHERE 

email2 

= '$email2'"))){

$msg=$msg."<center>Email 2 already exists. Please try another 

one</center>";
$status= "NOTOK";
}			
if (!is_numeric($age)){

$msg=$msg."<center>Age must be numeric</center></center>";
$status= "NOTOK";
} 
if ($age<24 or $age>60){

$msg=$msg."<center>Age must be between 25 to 59.</center>";
$status= "NOTOK";
}
if(!isset($dept) or strlen($dept)<3){

$msg=$msg."<center>Dept. name should be =3 or more than 3 char 

length</center>";
$status="NOTOK";}
if(!isset($jobjoindate) or strlen($jobjoindate)<6){

$msg=$msg."<center>Job joining date should be =6 or more than 6 char 

length</center>";
$status="NOTOK";}

if(!isset($current_designation) or strlen($current_designation)<3){

$msg=$msg."<center>Designation name should be =3 or more than 3 char 

length</center>";
$status="NOTOK";}
if(!isset($curr_des_joindate) or strlen($curr_des_joindate)<6){

$msg=$msg."<center>Current designation joining date should be =6 or 

more than 6 char 

length</center>";
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
if(mysql_num_rows(mysql_query("SELECT cpn FROM contact_no WHERE cpn 

= '$cpn'"))){

$msg=$msg."<center>Cell Phone No already exists. Please try another 

one</center>";
$status= "NOTOK";
}	
if(!is_numeric($opn)){

$msg=$msg."<center>Office phone no must be numeric.</center>";
$status= "NOTOK";
}
if(mysql_num_rows(mysql_query("SELECT opn FROM contact_no WHERE opn = 

'$opn'"))){

$msg=$msg."<center>Office Phone No already exists. Please try another 

one</center>";
$status= "NOTOK";
}
if(!is_numeric($tnt)){

$msg=$msg."<center>tnt no must be numeric.</center>";
$status= "NOTOK";
}
if(mysql_num_rows(mysql_query("SELECT tnt FROM contact_no WHERE tnt = 

'$tnt'"))){
$msg=$msg."<center>tnt No already exists. Please try another 

one</center>";
$status= "NOTOK";
}
if($status<>"OK"){ 
echo "<font face='Verdana' size='2' color=red>

$msg</font><br><center><input 

type='button' value='Retry' onClick='history.go(-1)'></center>";
}else{
$sql1="INSERT INTO `plus_signup`
(`fname`,`mname`,`lname`,`nname`,`userid`,`email1`,`email2`,`sex`,`ms`,
`age`,`dept`,`jobjoindate`,`current_designation`,`curr_des_joindate`) 
VALUES
('$fname', '$mname', '$lname', '$nname', '$userid', '$email1', 
'$email2', '$sex', '$ms', '$age', '$dept', '$jobjoindate', 
'$current_designation', '$curr_des_joindate')";
$qury1=mysql_query($sql1);
$sql2="INSERT INTO `contact_no` (`userid`, `cpn`, `opn`, `tnt`) VALUES
('$userid','$cpn','$opn','$tnt')";
$qury2=mysql_query($sql2);
$sql3="INSERT INTO `current_address` (`userid`, `hold_no`, `road_no`, 
`area`, `thana`, `district`) VALUES 
('$userid','$hold_no','$road_no','$area','$thana','$district')";
$qury3=mysql_query($sql3);
$sql4="INSERT INTO `permanent_address` (`userid`, `village`, `ppost`, 
`pthana`, `pdistrict`) VALUES
('$userid','$village','$ppost','$pthana','$pdistrict')";
$qury4=mysql_query($sql4);
$sql5="INSERT INTO `responsibility` (`userid`, `res1`, `res2`, `res3`, 
`photo`) VALUES 
('$userid','$res1','$res2','$res3','$pic')";
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
color='#33CC66'><b><blink>Successful</blink></b><font></center>";
echo "<p class=data><center><FONT SIZE=4><B><a href='tcr.php'> Teacher's Option </a></B></FONT></center>
<br><center><FONT SIZE=4><B>
<a href='stdnt.php'>Student's Option</a></B></FONT></center>";

}
?>
<h4 align="center"><a href="welcome.html">Back To welcome Page</a></h4>
</body>
</html>
