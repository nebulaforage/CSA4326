<?php
$c=mysqli_connect("localhost","root","");
mysqli_query($c,"use signup");
$r=mysqli_query($c,"select username,password from sing");
while($row=mysqli_fetch_assoc($r)){
echo $row["username"];
echo $row["password"];
echo"<br>";
}
?>