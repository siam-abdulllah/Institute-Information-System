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
$query="SELECT * FROM plus_signupst,current_address_st,permanent_address_st,contact_no_st,photo_st WHERE plus_signupst.id='$id' and current_address_st.id=plus_signupst.id and permanent_address_st.id=plus_signupst.id and contact_no_st.id=plus_signupst.id and photo_st.id=plus_signupst.id";
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
<td ><? echo $rows['email']; ?></td>
</tr>
<tr><td><strong>Date of Birth (YYYY-MM-DD)</strong></td>
<td ><? echo $rows['birthdate']; ?></td>
</tr>
<tr><td><strong>Age</strong></td>
<td ><? echo $rows['age']; ?></td>
</tr>
<tr><td><strong>Sex</strong></td>
<td ><? echo $rows['sex']; ?></td>
</tr>
<tr><td><strong>Dept</strong></td>
<td ><? echo $rows['dept']; ?></td>
</tr>
<tr><td><strong>Semester</strong></td>
<td ><? echo $rows['semester']; ?></td>
</tr>
<tr><td><strong>Current Address</strong></td>
<td ><? echo "Hold-"; echo $rows['hold_no']; echo ".Road-"; echo $rows['road_no']; echo ".Area-"; echo $rows['area']; echo ".Thana-"; echo $rows['thana']; echo ".District-"; echo $rows['district'];?></td>
</tr>
<tr><td><strong>Permanent Address</strong></td>
<td ><? echo "Village: "; echo $rows['village']; echo ".Post: "; echo $rows['ppost']; echo ".Thana: "; echo $rows['pthana']; echo ".District:"; echo $rows['pdistrict'];?></td>
</tr>
<tr><td><strong>T&T no.</strong></td>
<td ><? echo $rows['tnt']; ?></td>
</tr>
</table>
<center><input type='button' value='Back' onClick='history.go(-1)'></center>
<h2 align="center"><B><a href="welcome.html">Back to welcome page</B></h2>
   </body>
</html>   
	