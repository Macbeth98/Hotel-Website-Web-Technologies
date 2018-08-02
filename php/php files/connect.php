<?php
$dbhost= 'localhost';
$username= 'root';
$password = '';
$db='hotel';

$conn = mysqli_connect("$dbhost","$username","$password");

mysqli_select_db($conn,"$db");
echo "Connected to DB<br/>";

$query=mysqli_query($conn,"Select * from roomcount");
while($row=mysqli_fetch_array($query))
{
	$id=$row['id'];
	$avail=$row['Available'];
	
	echo "$id". ':' . "$avail". '<br/>';
}


?>