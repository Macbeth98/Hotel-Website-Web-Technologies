<?php

$dbhost= 'localhost';
$username= 'root';
$password = '';
$db='hotel';
$conn = mysqli_connect("$dbhost","$username","$password");

mysqli_select_db($conn,"$db");

$query=mysqli_query($conn,"select Available from roomcount where id='Std'");

while($row=mysqli_fetch_array($query))
{
	$avail=$row['Available'];
}
echo "Standard:"." $avail<br/>";




$query=mysqli_query($conn,"select Available from roomcount where id='Viw'");

while($row=mysqli_fetch_array($query))
{
	$avail=$row['Available'];
}
echo "View:"." $avail<br/>";



$query=mysqli_query($conn,"select Available from roomcount where id='Sut'");

while($row=mysqli_fetch_array($query))
{
	$avail=$row['Available'];
}
echo "Suite:"." $avail<br/>";


?>