<center><h1> Product Information </h1></center>
<?php
include("7conn.php");
$SQL="SELECT * FROM product";
$result=mysqli_query($con, $SQL);
echo "<body bgcolor=#000000 text=#ffffff>";
echo "<center>";
echo "<table style = border='1'#000000>";

while($row=mysqli_fetch_assoc($result)){
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
echo "</center>";
?>
<center>
</br>
<input type=buttom onClick="parent.location='../7add.php'" value='Add New'>
</br></br>
</center>