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
        <a class="nav-link" href="../admin/">Home<span class="sr-only">(current)</span></a>
      </li>
     
    
    
    
    
    
    </ul>
  
  
  
  
  
  
  </div>
</nav>
</header>

<br>


<div class="container col-3">

<form method="post">
  <fieldset>
    <legend>Add Doctor</legend>
	
	
	
	
	
    <div class="form-group">
      <label for="exampleInputEmail1">Doctor Id</label>
      <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="t1">
    </div>
	
    <div class="form-group">
      <label for="exampleInputEmail1">Name</label>
      <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="t2" >
    </div>
	
	
	 <div class="form-group">
      <label for="exampleSelect2">Specialized In</label>
      <select  class="form-control" id="exampleSelect2" name="t3">
        <option>Eye Specialist</option>
        <option>Dentist</option>
        <option>Skin Care</option>
        <option>Nutritionist</option>
        <option>Others</option>
      </select>
    </div>
	
	

    <div class="form-group">
      <label for="exampleInputEmail1">Email address</label>
      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="t4">
    </div>
	
	<div class="form-group">
      <label for="exampleInputEmail1">Password</label>
      <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="doctor" readonly name="t5"> 
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


$sql = "INSERT INTO doctors(DId,DNAme,DPassword,Speciality,DEmail) VALUES ('$t1','$t2','$t5','$t3','$t4')";

if ($conn->query($sql) === TRUE) {
	
	$_SESSION['success']="New record created successfully";
	header('Location:doctor_page.php');
	}
	else {
    $_SESSION['error']="Unsuccesll";
	header('Location:doctor_register.php');
	
	
	
}

$conn->close();

}


?>



































</body>
</html>