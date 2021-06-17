<html>
<head>
<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
<header>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="#">Health Plus</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarColor01">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="../index.php">Home<span class="sr-only">(current)</span></a>
      </li>
     
     
	  
	  
	  
	  
	  
    </ul>
	
	
	
	
	
	
  </div>
</nav>
</header>


<br>


<div class="container col-3">

<form  method="post">
  <fieldset>
    <legend>Register Here</legend>
   
    <div class="form-group">
      <label for="exampleInputEmail1">Email address</label>
      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="t1">
   
    </div>
	
	<div class="form-group">
      <label for="exampleInputEmail1">Name</label>
      <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="t3">
   
    </div>
	
	
	
	<div class="form-group">
      <label for="exampleInputEmail1">Address</label>
      <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="t4">
   
    </div>
	
	
	
	<div class="form-group">
      <label for="exampleInputEmail1">Phone Number</label>
      <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="t5">
   
    </div>
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
    <div class="form-group">
      <label for="exampleInputPassword1">Password</label>
      <input type="password" class="form-control" id="exampleInputPassword1" name="t2">
    </div>
    </fieldset>
    <button type="submit" name="submit" class="btn btn-primary">Register</button>
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

$sql = "INSERT INTO patient(PEmail,Password,PName,PAddress,Phone) VALUES ('$t1','$t2','$t3','$t4','$t5')";

if ($conn->query($sql) === TRUE) {
	
	echo "<script>alert('Registration Successful')</script>";
			header('Location:../');








	}
	else {
    
    echo "<script>alert('Unsucessful ... Please Try again')</script>";
			header('Location:patient_register.php');
	


	
	
	
}

$conn->close();

}


?>





























</body>
</html>