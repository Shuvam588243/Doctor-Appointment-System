
<?php


session_start();

$email = $_SESSION['email'];


?>



<html>
<head>
<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>



<br>


<div class="container col-3">

<form method="post">
  <fieldset>
    <legend>Add Doctor</legend>
	
	
	
	
	
    <div class="form-group">
      <label for="exampleInputEmail1">Address</label>
      <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="t1">
    </div>
	
    <div class="form-group">
      <label for="exampleInputEmail1">Phone Number</label>
      <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="t2" >
    </div>
	
	
	 
    </fieldset>
    <button type="submit" name="submit" class="btn btn-primary">Add</button>
  </fieldset>
</form>




</div>


<?php

if(isset($_POST["submit"]))

{

extract ($_POST);



$servername = "localhost";
$username = "root";
$password = "";
$dbname = "doctor";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
	
} 



$query="select * from doctors where DEmail='$email'";
$result=mysqli_query($conn,$query);
while($row = mysqli_fetch_array($result))
{
	$t9=$row["DId"];
}





$sql = "update doctors set DAddress='$t1',DPhone='$t2' where DId='$t9'";

if ($conn->query($sql) === TRUE) {
	
	$_SESSION['success']="Updation successfully";
	header('Location:index.php');
	}
	else {
    $_SESSION['error']="Unsuccesll";
	header('Location:add_info.php');
	
	
	
}

$conn->close();

}


?>



































</body>
</html>