<?php
$dbhost= 'localhost';
$username= 'root';
$password = '';
$db='hotel';
$conn = mysqli_connect("$dbhost","$username","$password");

mysqli_select_db($conn,"$db");


$name=$_POST['name'];
$phone=$_POST['phone'];
$numtable=$_POST['numtable'];

$query=mysqli_query($conn,"select custid from booktable");

while($row=mysqli_fetch_array($query))
{
	$cusid=$row['custid'];
}

$cusid++;

$result=mysqli_query($conn,"insert into booktable(custid,Custname,phone,tableBooked)  values('$cusid','$name','$phone','$numtable')");

echo "Your ". "Table is Booked with Customerid: " . "$cusid<br/><br/>" . "Tell your Customerid at the Reception<br/><br/>Thank You!!!";


?>