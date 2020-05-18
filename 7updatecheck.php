<?php
include("7conn.php");

$No=$_POST["No"];
$Name=$_POST["Name"];
$Price=$_POST["Price"];
$Description=$_POST["Description"];
$Photo=$_POST["Photo"];


if($Photo==""){
	//不更新Photo
	$SQL="UPDATE product SET Name='$Name', Price='$Price', Description='$Description' WHERE No='$No'";
}else{
	//更新Photo
	$SQL="UPDATE product SET Name='$Name', Price='$Price', Description='$Description', PhotoPath='PHOTO/$Photo' WHERE No='$No'";
}
if($result = mysqli_query($con, $SQL)){
	header('Location: 7show.php');
}else{
	echo "Update Failed";
}
?>