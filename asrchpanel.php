<html>
<head>
<title>Searching</title>
<meta name="GENERATOR" content="Arachnophilia 4.0">
<meta name="FORMATTER" content="Arachnophilia 4.0">
</head>
<form action="asrch.php" method="post">
<body BACKGROUND="Penguins.gif" bgcolor="#ffffff" text="#000000" link="#0000ff" vlink="#800080" alink="#ff0000">

<table border='0' width='50%' cellspacing='0' cellpadding='0' align=center><form name=form5 method=post action=asrch.php onsubmit='return validate(this)'><input type=hidden name=todo value=post>

<tr bgcolor='#CCFFFF'><td align=center colspan=2><font face='Verdana' size='6' ><b>Searching</b></td></tr>
<tr ><td >&nbsp;<font face='Verdana' size='5' >Enter Name</td><td ><font face='Verdana' size='2'><input type=text name=aname></td></tr>

<tr ><td >&nbsp;<font face='Verdana' size='5' >Enter Dept</td><td><select name="userid">
    <option value="" selected>Select</option>
    <?php
        mysql_connect("localhost","root","");
        mysql_select_db("signup");
        $category = "SELECT distinct dept FROM plus_signup";
        $query_result = mysql_query($category);
        while($result = mysql_fetch_assoc($query_result))
        {
        ?>
            <option value = "<?php echo $result['dept']?>"><?php echo $result['dept']?></option>
        <?php
        }

    ?>  
</select></td></tr>
<tr ><td >&nbsp;<font face='Verdana' size='5' >Enter Curr_Designation.</td><td><select name="current_designation">
    <option value="" selected>Select</option>
    <?php
        mysql_connect("localhost","root","");
        mysql_select_db("signup");
        $category = "SELECT distinct current_designation FROM plus_signup";
        $query_result = mysql_query($category);
        while($result = mysql_fetch_assoc($query_result))
        {
        ?>
            <option value = "<?php echo $result['current_designation']?>"><?php echo $result['current_designation']?></option>
        <?php
        }

    ?>  
</select></td></tr>
<tr ><td >&nbsp;<font face='Verdana' size='5' >Enter Responsibility</td><td>
       
       <select name="res1" > 
        <option value="N/A"> N/A </option> 
        <option value="Assistant Programmer"> Assistant Programmer </option> 
        <option value="Proctor"> Proctor </option> 
        <option value="Provost"> Provost </option> 
        <option value="Student Advisor"> Student Advisor </option> 


        </select> 
      </td></tr>
<tr ><td align=center colspan=2><input type=submit value=Search></td></tr>
</table>
<center><input type='button' value='Back' onClick='history.go(-1)'></center>
<h1 align="center"><a href="welcome.html">Back to welcome page</a></h1>

</body>

</html>