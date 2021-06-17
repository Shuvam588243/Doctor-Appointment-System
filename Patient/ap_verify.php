<?php

session_start();

$t1 = $_SESSION['email'];

$conn = mysqli_connect('localhost','root','','doctor');
$query="select * from patient where PEmail='$t1'";
$result=mysqli_query($conn,$query);
while($row = mysqli_fetch_array($result))
{
	$t1=$row["Patient_id"];
	
}
$query2="select * from appointment where Patient_id='$t1'";
$result=mysqli_query($conn,$query2);
while($row = mysqli_fetch_array($result))
{
	$t2=$row["Approval"];
	

	if($t2!="")

		{
	
		header("Location:appointments.php");
			
		}

			
	
}

?>