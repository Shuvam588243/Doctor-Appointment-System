
<?php
session_start();
$t1 = $_SESSION['PEmail'];
?>



<html>
<head>
<link rel="stylesheet" type="text/css" href="../css/style.css">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
</head>
<body>

<header>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="#">HEALTH PLUS</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarColor01">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="patient_profile.php" target="_top">Back</a>
      </li>
      
    
    </ul>

  </div>
</nav>
</header>

<br><br>

<div class="container col-3">
<form method="post">
  <fieldset>
    <legend>Update Information</legend>
	
	
	
	
	
	<div class="form-group">
      <label for="exampleInputEmail1">Enter Previous Password</label>
      <input type="text" name="t2" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
     </div>
	 
	 
	 
	 
	 <div class="form-group">
      <label for="exampleInputEmail1">Enter New Password</label>
      <input type="text" name="t3" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
      </div>
	  
	  
	  
    </fieldset>
    <button type="submit" name="submit" class="btn btn-primary">Update</button>
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


if($t3!="" && $t2!="")
{

$sql = "UPDATE patient SET  Password ='$t3' WHERE PEmail = '$t1'and Password='$t2'";

if ($conn->query($sql) === TRUE) {
	
	
	    echo "<script>alert('Information Updated Successfully')</script>";
	    	header('Location:patient_profile.php');
	}
	else {
    

	    echo "<script>alert('Unsuccessfull....Please Try Again Later')</script>";
	
}

$conn->close();

}

else

{
	echo "<script>alert('Field Can't be Empty')</script>";
}



}


?>

























</body>
</html>