<html>
<head>
<title>Deletion Form</title>
</head>

<body BACKGROUND="Penguins.gif">
<?php
include ("db.php");
$userid=$_POST['userid'];

$query="SELECT * FROM plus_signup WHERE userid='$userid'";
$result=mysql_query($query);

$rows=mysql_fetch_array($result);

?>


<form id="delete" name="delete" method="post" action="act.php">
<h3 align='center'><strong><FONT COLOR='#FF6633'>Are you sure to delete this data?</FONT></strong></h3>
<tr><table width="390" border="1" align='center' Bordercolor="CCCCCC" BGcolor="CCCC99">

</tr>
<tr><th colspan='14' align='center'>Hint</th></tr>
<td align='center'><input type="hidden" name="id" id="id" value= <? echo $rows['id']; ?>></td>
    </tr>
</tr>
    <tr>
      <td  width="82"><strong>First Name</strong></td>
      <td  width="292"><label for="fname"></label>
      <?echo $rows['fname']; ?></td>
    </tr>
    <tr>
      <td ><strong>Middle Name</strong></td>
      <td ><label for="mname"></label>
      <? echo $rows['mname']; ?></td>
    </tr>
    <tr>
      <td ><strong>Last Name:</strong></td>
      <td><? echo $rows['lname']; ?></td>
    </tr>
<tr>
      <td ><strong>Nick Name:</strong></td>
      <td><? echo $rows['nname']; ?></td>
    </tr>
    
<tr>
      <td ><strong>User ID:</strong></td>
      <td><? echo $rows['userid']; ?></td>
    </tr>
    <tr><td><strong>Email</strong></td>
<td ><? echo $rows['email1']; ?></td>
</tr>


<tr><td><strong>Sex</strong></td>
<td ><? echo $rows['sex']; ?></td>

</tr>

    <tr><td><strong>Marital Status</strong></td>
<td ><? echo $rows['ms']; ?></td>
    </tr>

<tr><td ><strong>Dept. Name</strong></td>
<td ><? echo $rows['dept']; ?></td>
    </tr>
<tr><td ><strong>Current Designation Name</strong></td>
<td ><? echo $rows['current_designation']; ?></td>
    </tr>
<tr><td>
<input type="submit" name="delete" id="delete" value="delete"></td>
    </tr>      

</table>
<h3 align='center'><strong><a href="dltfrm.php">Don't delete this</a></strong></h2>
<h2 align="center"><B><a href="welcome.html">Back to welcome page</B></h2>
</form>

</body>
</html>