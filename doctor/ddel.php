<?php
$servername = "localhost";
$username = "root";
$password = "";
$myDB = "doctor";



$conn = mysqli_connect($servername,$username,$password,$myDB);

if(!$conn)
{
	die("Connection Failed :" . mysqli_connect_error());
}
$id = $_GET['DId'];
$query = "DELETE FROM doctors WHERE DId='$id'";
$data = mysqli_query($conn, $query);
if($data)
{
	echo "<script>alert('Record deleted')</script>";
	?>
	
	<?php
}
else
{
	echo "record not deleted";
}
?>