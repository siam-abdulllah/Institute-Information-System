<html>
<head>
<title>Detailed Info</title>
</head>
<body BACKGROUND="Penguins.gif">
<?php
$database="signup";
mysql_connect("localhost");
@mysql_select_db($database);
$id=$_GET['id'];
$query="SELECT * FROM plus_signup,current_address,permanent_address,contact_no,responsibility WHERE plus_signup.id='$id' and current_address.id=plus_signup.id and permanent_address.id=plus_signup.id and contact_no.id=plus_signup.id and responsibility.id=plus_signup.id";
$result=mysql_query($query);

$rows=mysql_fetch_array($result);
?>

<h3 align='center'><strong><FONT COLOR='#FF6633'>Detailed Information</FONT></strong></h3>
<tr><table width="390" border="1" align='center' Bordercolor="CCCCCC" BGcolor="CCCC99">

</tr>
<tr><th colspan='14' align='center'>Description</th></tr>
<td align='center'><input type="hidden" name="id" id="id" value= <? echo $rows['id']; ?>></td>
<tr>
      <td  width="82"><strong>Picture</strong></td>
      <td  width="292"><label for="photo"></label>
      <?echo "<center><img src=images/".$rows['photo']." width='180'><br>" ?></td>
    </tr>; 
	<tr>
      <td ><strong>Name</strong></td>
      <td ><label for="fname"></label>
      <? echo $rows['fname']; echo " "; echo $rows['mname']; echo " "; echo $rows['lname']; echo " "; echo $rows['nname']; ?></td> 
    </tr>
	<tr><td><strong>Email</strong></td>
<td ><? echo $rows['email1']; ?></td>
</tr>
<tr><td><strong>Age</strong></td>
<td ><? echo $rows['age']; ?></td>
</tr>
<tr><td><strong>Sex</strong></td>
<td ><? echo $rows['sex']; ?></td>
</tr>
<tr><td><strong>Maritul Status</strong></td>
<td ><? echo $rows['ms']; ?></td>
</tr>
<tr><td><strong>Dept</strong></td>
<td ><? echo $rows['dept']; ?></td>
</tr>
<tr><td><strong>Current Designation</strong></td>
<td ><? echo $rows['current_designation']; ?></td>
</tr>
<tr><td><strong>Job Join Date(Y-M-D)</strong></td>
<td><? echo $rows['jobjoindate']; ?></td></tr>
<tr><td><strong>Curr Des. Join Date(Y-M-D)</strong></td>
<td><? echo $rows['curr_des_joindate']; ?></td></tr>

<tr><td><strong>Current Address</strong></td>
<td ><? echo "Hold-"; echo $rows['hold_no']; echo ".Road-"; echo $rows['road_no']; echo ".Area-"; echo $rows['area']; echo ".Thana-"; echo $rows['thana']; echo ".District-"; echo $rows['district'];?></td>
</tr>
<tr><td><strong>Permanent Address</strong></td>
<td ><? echo "Village: "; echo $rows['village']; echo ".Post: "; echo $rows['ppost']; echo ".Thana: "; echo $rows['pthana']; echo ".District:"; echo $rows['pdistrict'];?></td>
</tr>
<tr><td><strong>Office Phone No.</strong></td>
<td ><? echo $rows['tnt']; ?></td>
</tr>
<tr><td><strong>T&T no.</strong></td>
<td ><? echo $rows['tnt']; ?></td>
</tr>
</table>
<center><input type='button' value='Back' onClick='history.go(-1)'></center>
<h2 align="center"><B><a href="welcome.html">Back to welcome page</B></h2>
   </body>
</html>   
	