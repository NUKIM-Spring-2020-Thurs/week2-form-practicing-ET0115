<?php

$name=$_POST["Name"];
$gender=$_POST["gender"];
$email=$_POST["email"];
$phone=$_POST["phone"];
$id=$_POST["id"];
$bd=$_POST["birthday"];
$ad=$_POST["address"];
$hs=$_POST["school"];
$Pname=$_POST["PName"];
$Pphone=$_POST["Pphone"];
$size=$_POST["size"];
$comment=$_POST["comment"];

echo "Name:".$name."<br/>";
echo "Gender:".$gender."<br/>";
echo "Mail".$email."<br/>";
echo "Phone:".$phone."<br/>";
echo "ID:".$id."<br/>";
echo "Birthday:".$bd."<br/>";
echo "Address:".$ad."<br/>";
echo "School:".$hs."<br/>";
echo "Parent name:".$Pname."<br/>";
echo "Parent phone:".$Pphone."<br/>";
echo "Size:".$size."<br/>";
if(isset($_POST["$comment"])){
	echo nl2br($comment);
	echo n12br(htmlspecialchars($comment));
}

?>