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
$result2=mysqli_query($conn,$query2);
while($row = mysqli_fetch_array($result2))
{

	$t1=$row["Approval"];
	
	 if($t1=="")
	   {
			
			echo "Not yet Declared";
			
		}
		elseif($t1=='Approved')
		
		
		{
	
	
			echo "Approved";
	
	
	
		}
		elseif($t1=='Postponed')
		{
				echo "Postponed";
		}
			
	
}

?>