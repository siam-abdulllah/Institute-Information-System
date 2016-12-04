<?php 
$dept=$_POST['dept'];
 mysql_connect("localhost") or die(mysql_error()) ; 
 mysql_select_db("signup") or die(mysql_error()) ; 
 
 $query ="SELECT * FROM plus_signupst,contact_no_st,photo_st WHERE plus_signupst.dept='$dept' and contact_no_st.id=plus_signupst.id and photo_st.id=plus_signupst.id ORDER BY plus_signupst.semester"; 
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
	    <tr><th>Full Name</th><th>Email</th><th>Dept.</th><th>Semester</th><th>Cell Phone No.</th><th>Picture</th></tr>
	     	    <?php while($row = mysql_fetch_array($result)) {
 
echo "<tr><td>$row[fname] $row[mname] $row[lname]</td>";
	    echo "<td>$row[email]</td>";
	    echo "<td>$row[dept]</td>";
	    echo "<td>$row[semester]</td>";
	    echo "<td>$row[cpn]</td>";
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
