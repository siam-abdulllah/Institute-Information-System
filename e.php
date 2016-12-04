<?php


 $name=$_POST['name'];
 $pic=($_FILES['photo']['name']); 
 include ("sam1.php");
 
 
if ((($_FILES["photo"]["type"] == "image/gif")
|| ($_FILES["photo"]["type"] == "image/jpeg")
|| ($_FILES["photo"]["type"] == "image/png")
|| ($_FILES["photo"]["type"] == "image/pjpeg")))
  {
  if ($_FILES["photo"]["error"] > 0)
    {
    echo "Return Code: " . $_FILES["file"]["error"] . "<br>";
    }
  else
    {
    echo "Upload: " . $_FILES["photo"]["name"] . "<br>";
    echo "Type: " . $_FILES["photo"]["type"] . "<br>";
    echo "Size: " . ($_FILES["photo"]["size"] / 1024) . " kB<br>";
    echo "Temp file: " . $_FILES["photo"]["tmp_name"] . "<br>";

    if (file_exists("images/" . $_FILES["photo"]["name"]))
      {
      echo $_FILES["photo"]["name"] . " already exists.";
      }
    else
      {
      move_uploaded_file($_FILES["photo"]["tmp_name"],
      "images/" . $_FILES["photo"]["name"]);
      echo "Stored in: " . "images/" . $_FILES["photo"]["name"];
	  $sql="INSERT INTO `try` 
 (`name`,`photo`) 
VALUES
('$name','$pic')";
$qury=mysql_query($sql);
$pic=($_FILES['photo']['name']); 
      }
    }
  }
else
  {
  echo "Invalid file";
  }
?> 