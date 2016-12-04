<html>
	<head>
	</head>
	<body BACKGROUND="Penguins.gif">
<?php


include ("db.php");

$id=$_POST['id'];

if(isset($_POST['delete']))
{
if(! $conn )
{
echo "sry.";  
die('Could not connect: ' . mysql_error());
}
$sql1 = "DELETE FROM plus_signupst WHERE id='$id'";
mysql_select_db('test_db');
$retval1 = mysql_query( $sql1, $conn );
if(! $retval1 )
{
  die('Could not delete data: ' . mysql_error());
}
echo "";
$sql2 = "DELETE FROM contact_no_st WHERE id='$id'";
mysql_select_db('test_db');
$retval2 = mysql_query( $sql2, $conn );
if(! $retval2 )
{
  die('Could not delete data: ' . mysql_error());
}
echo "";
$sql3 = "DELETE FROM current_address_st WHERE id='$id'";
mysql_select_db('test_db');
$retval3 = mysql_query( $sql3, $conn );
if(! $retval3 )
{
  die('Could not delete data: ' . mysql_error());
}
echo "";
$sql4 = "DELETE FROM permanent_address_st WHERE id='$id'";
mysql_select_db('test_db');
$retval4 = mysql_query( $sql4, $conn );
if(! $retval4 )
{
  die('Could not delete data: ' . mysql_error());
}
echo "";
$sql5 = "DELETE FROM photo_st WHERE id='$id'";
mysql_select_db('test_db');
$retval5 = mysql_query( $sql5, $conn );
if(! $retval5 )
{
  die('Could not delete data: ' . mysql_error());
}
echo "<center><FONT SIZE='6' COLOR='#00FFCC'>Deleted data successfully.</FONT></center>";



mysql_close($conn);
}

?><?php
echo "<p class=data><center><FONT SIZE=4><B><a href='tcr.php'> Teacher's Option </a></B></FONT></center>
<br><center><FONT SIZE=4><B>
<a href='stdnt.php'>Student's Option</a></B></FONT></center>";?>
<h3 align="center"><a href="adlog.php">Log Out</a></h3>
</body>
</html>