<?php
include "include/session.php";
include "db.php";
$adminid=$_POST['adminid'];
$password=$_POST['password'];
?>
<html>

<head>
<title>(Type a title for your page here)</title>
<meta name="GENERATOR" content="Arachnophilia 4.0">
<meta name="FORMATTER" content="Arachnophilia 4.0">
</head>

<body BACKGROUND="Penguins.gif" bgcolor="#ffffff" text="#000000" link="#0000ff" vlink="#800080" alink="#ff0000">
<?php
if(isset($todo) and $todo=="post"){
$status = "OK";
$msg="";
}
if($rec=mysql_fetch_array(mysql_query("SELECT * FROM adlog WHERE adminid='$adminid' AND password = '$password'"))){
	if(($rec['adminid']==$adminid)&&($rec['password']==$password)){
include "include/newsession.php";
	 
echo "<p class=data><FONT SIZE=6 COLOR='#336699'><B> <center>Successfully,Logged in</b></FONT><br><br><FONT SIZE=4><BLINK><B>Please Choose any of the following</B></BLINK></FONT></br><br><FONT SIZE=4><B><a href='tcr.php'>Teacher Editing</a></B></FONT>
<br><br><FONT SIZE=4><B>
<a href='stdnt.php'>Student editing</a></B></FONT></center>";
echo "<font face='Verdana' size='2' ><br><center><input type='button' value='Log Out' onClick='history.go(-1)'></center>";
}
}
else {

		session_unset();
echo "<font face='Verdana' size='4' color=red><center>Wrong Login. Use your correct  Admin Id and Password and Try </center><br><center><input type='button' value='Retry' onClick='history.go(-1)'></center>";
		
	}
?>
<h2 align="center"><B><a href="welcome.html">Back to welcome page</a></B></h2>
<center>
</body>

</html>
