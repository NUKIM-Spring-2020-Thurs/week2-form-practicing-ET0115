<?php

$No=$_GET["No"];
echo $No;

include("7conn.php");
$SQL="DELETE FROM product WHERE No=$No";

if( $result=mysqli_query($con, $SQL) ){
  echo "Delete Successful";
  header('Location: ../7show.php');
}
else{
  echo "Delete Failed";
}

$SQL2="SELECT * FROM product";
$result2=mysqli_query($con, $SQL2);
echo "<table style = border='1'#000000>";

while($row=mysqli_fetch_assoc($result2)){
  echo "<tr align=center bgcolor=#555555>";
  echo "<td>".$row["No"]."</td>
        <td>".$row["Name"]."</td>
        <td>".$row["Price"]."</td>
        <td>".$row["Description"]."</td>
        <td>"."<img width='100'src='".$row["PhotoPath"]."'>"."</td>
        <td><a href=7update.php?No=".$row["No"].">Renew Data</a></td>
        <td><a href=7del.php?No=".$row["No"].">Delete Data</a></td>";
  echo "</tr>";
  }
  echo "</table>";
?>