<?php
include("7conn.php");

$No=$_GET["No"];

$SQL="SELECT * FROM product WHERE No='$No'";
$result = mysqli_query($con, $SQL);

while($row = mysqli_fetch_assoc($result)){ 
$Name=$row["Name"];
$Price=$row["Price"];
$Photo=$row["PhotoPath"];
$Description=$row["Description"];
}

echo "<h1>Update Your Data</h1>";
echo "Product No:".$No."<br/>";
echo "<form action='7updatecheck.php' method='post'>";
echo "<input type='hidden' name='No' value='".$No."'>";
echo "Product Name:<input type='text' name='Name' value='".$Name."'><br/>";
echo "Product Price:<input type='text' name='Price' value='".$Price."'><br/>";
echo "Product Description:<input type='text' name='Description' value='".$Description."'><br/>";
echo "Product Photo:<img width='200' src='".$Photo."'><br/>";
echo "Select New File if you like: <input type='file' name='Photo' value=''><br/>";
echo "<input type='submit'><br/>";
echo "</form>";
?>