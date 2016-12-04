<html>
<head>
<title>Update panel</title>
<meta name="GENERATOR" content="Arachnophilia 4.0">
<meta name="FORMATTER" content="Arachnophilia 4.0">
</head>
<form action="updpot.php" method="post">
<body BACKGROUND="Penguins.gif" bgcolor="#ffffff" text="#000000" link="#0000ff" vlink="#800080" alink="#ff0000">

<table border='0' width='50%' cellspacing='0' cellpadding='0' align=center><form name=form12 method=post action=upsrch.php onsubmit='return validate(this)'><input type=hidden name=todo value=post>


<tr ><td >&nbsp;<font face='Verdana' size='5' >Enter the userid for Update</td>
<td><select name="userid">
    <option value="" selected>Select a userid</option>
    <?php
        mysql_connect("localhost","root","");
        mysql_select_db("signup");
        $category = "SELECT userid FROM plus_signup";
        $query_result = mysql_query($category);
        while($result = mysql_fetch_assoc($query_result))
        {
        ?>
            <option value = "<?php echo $result['userid']?>"><?php echo $result['userid']?></option>
        <?php
        }

    ?>  
</select></td></tr>
<tr ><td align=center colspan=2><input type=submit value=Search></td></tr>
</table>
<center><input type='button' value='Back' onClick='history.go(-1)'></center>
<h1 align="center"><a href="welcome.html">Back to welcome page</a></h1>

</body>

</html>