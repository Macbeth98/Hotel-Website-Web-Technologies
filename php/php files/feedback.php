<?php
$dbhost= 'localhost';
$username= 'root';
$password = '';
$db='hotel';
$conn = mysqli_connect("$dbhost","$username","$password");

mysqli_select_db($conn,"$db");


$name=$_POST['Name'];
$phone=$_POST['Telephone'];
$email=$_POST['Email'];
$msg=$_POST['Message'];

$query=mysqli_query($conn,"select Formid from feedback");

while($row=mysqli_fetch_array($query))
{
	$fid=$row['Formid'];
}

$fid++;

$result=mysqli_query($conn,"insert into feedback(Formid,Name,Email,phone,Message)  values('$fid','$name','$email','$phone','$msg')");

echo "Your ". "Feedback form is generated with Formid: " . "$fid<br/><br/>" . "Thank You!!!";


?>