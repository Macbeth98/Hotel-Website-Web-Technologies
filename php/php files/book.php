<?php
$dbhost= 'localhost';
$username= 'root';
$password = '';
$db='hotel';
$conn = mysqli_connect("$dbhost","$username","$password");

mysqli_select_db($conn,"$db");

$type=$_POST['type'];
$name=$_POST['name'];
$phone=$_POST['phone'];
$checkin=$_POST['checkin'];
$checkout=$_POST['checkout'];
$numpeople=$_POST['numpeople'];
$numrooms=$_POST['numrooms'];
$cusid1;

$query=mysqli_query($conn,"select customerid from bookroom");

while($row=mysqli_fetch_array($query))
{
	$cusid=$row['customerid'];
}

$cusid++;




if($type=='Standard')
	$type1='Std';
elseif($type='View')
	$type1='Viw';
else
	$type1='Sut';


$result=mysqli_query($conn,"insert into bookroom(Typeid,customerid,CusName,phone,checkin,checkout,numpeople,RoomsBooked)  values('$type1','$cusid','$name','$phone','$checkin','$checkout','$numpeople','$numrooms')");

echo "Your "."$type " . "Room is Booked with Customerid: " . "$cusid<br/><br/>" . "Tell your Customerid at the Reception<br/><br/>Thank You!!!";


?>