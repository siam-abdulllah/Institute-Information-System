<?php 
$res1=$_POST['res1'];
 mysql_connect("localhost") or die(mysql_error()) ; 
 mysql_select_db("signup") or die(mysql_error()) ; 
 
 $query ="SELECT * FROM plus_signup,responsibility WHERE (responsibility.res1='$res1' or responsibility.res2='$res1' or responsibility.res3='$res1') and responsibility.id=plus_signup.id ORDER BY plus_signup.jobjoindate"; 
$result=mysql_query($query);
$num=mysql_numrows($result);
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
	    <tr><th colspan='14' align='center'>Report</th></tr>
	    <tr><th>Full Name</th><th>Email</th><th>Dept.</th><th>Current Designation</th><th> res1</th><th>res2</th><th>res3</th><th>Picture</th></tr>
	     	    <?php while($row = mysql_fetch_array($result)) {
 
echo "<tr><td>$row[fname] $row[mname] $row[lname]</td>";
	    echo "<td>$row[email1]</td>";
	    echo "<td>$row[dept]</td>";
	    echo "<td>$row[current_designation]</td>";
	    echo "<td>$row[res1]</td>";
		echo "<td>$row[res2]</td>";
		echo "<td>$row[res3]</td>";
	    echo "<td><img src=images/".$row['photo']." width='90'></td>";
		echo "</tr>";
	    }
	    echo "</table>";
	    ?>
		<center><input type='button' value='Back' onClick='history.go(-1)'></center>
		<center><input type='button' value='Print this Page' onClick='window.print()'></center>
		
<h2 align="center"><B><a href="welcome.html">Back to welcome page</B></h2>
</body>
</html>
