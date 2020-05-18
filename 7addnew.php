<?php

include("7conn.php");
$Name=$_POST["Name"];
$Price=$_POST["Price"];
$Description=$_POST["Description"];
$Photo=$_FILES["Photo"]["name"];
$Path=pathinfo($Photo);
$NewName="PHOTO/".$Name.".".$Path["extension"];
copy($_FILES["Photo"]["tmp_name"],$NewName);


$SQL="INSERT INTO product (Name, Price, Description, PhotoPath) 
      VALUES ('$Name','$Price','$Description','$NewName')";

if($result = mysqli_query($con, $SQL)){
	header('Location:../7show.php');
}else{
	echo "Add Failed";
}

?>