<?php

session_start();

$t1 = $_SESSION['email'];

$conn = mysqli_connect('localhost','root','','doctor');
$query="select * from doctors where DEmail='$t1'";
$result=mysqli_query($conn,$query);
while($row = mysqli_fetch_array($result))
{
	$t1=$row["DAddress"];
	

	
	 if($t1=="")
	   {
			
			header("Location:add_info.php");
			
		}
		else
		
		
		{
	
	
			header("Location:my_profile.php");
	
	
	
		}
		
			
	
}


?>