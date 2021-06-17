
<?php session_start(); 

$_GET['id'];
$_GET['hn'];
$_GET['f'];

?>



<html>
<head>
<link rel="stylesheet" type="text/css" href="css/style.css">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

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
        <a class="nav-link" href="search_doctor.php" target="_top">Back</a>
      </li>
 
     
	  
	  
	  
	  
	  
    </ul>
	
	
	
	
	
	
  </div>
</nav>
</header>

<div class="container col-5">
<form name="f" method="post" enctype="multipart/form-data">
  <fieldset>
  	<br><br>
   <h3 align="center" style="color:red"> Online Doctor Appointment Panel </h3>
	<?php
	
	if(isset($_SESSION['error']))
	{
		echo $_SESSION['error'];
		unset($_SESSION['error']);
	}
	?>
	
	
	<br>
	
	
	
	
	
	<div class="form-group">
      <label for="exampleInputEmail1">Doctor Id</label>
      <input type="text"  name="t7" class="form-control" id="exampleEmail" aria-describedby="emailHelp" value="<?php echo $_GET['id']; ?>">
      
    </div>
	
	<div class="form-group">
      <label for="exampleInputEmail1">Doctor Name</label>
      <input type="text"  name="t8" class="form-control" id="exampleEmail" aria-describedby="emailHelp" value="<?php echo $_GET['hn']; ?>">
      
    </div>
	
	<div class="form-group">
      <label for="exampleInputEmail1">Speciality</label>
      <input type="text"  name="t9" class="form-control" id="exampleEmail" aria-describedby="emailHelp" value="<?php echo $_GET['f']; ?>">
      
    </div>
  
  
	
	<div class="form-group">
      <label for="exampleInputEmail1">Patient Name</label>
      <input type="text" name="t2" class="form-control" id="exampleName" aria-describedby="emailHelp" >
      
    </div>
	
	<div class="form-group">
      <label for="exampleInputEmail1">Email</label>
      <input type="email" name="t11" class="form-control" id="exampleName" aria-describedby="emailHelp" >
      
    </div>
	
	<div class="form-group">
      <label for="exampleInputEmail1">Date</label>
      <input type="text" name="t3" class="form-control" id="exampleName" aria-describedby="emailHelp" >
      
    </div>
	
	
	 
  
    </fieldset>
    <button type="submit" name="submit" class="btn btn-primary" >Submit</button>
  </fieldset>
</form>


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

    $hn=$_POST["t7"];
	$h1=$_POST["t8"];
	$g=$_POST["t9"];


$query="select * from patient where PEmail='$t11'";
$result=mysqli_query($conn,$query);

while($row = mysqli_fetch_array($result))
{
	$t5=$row["Patient_id"];
}


if($t5!="")
{


$sql = "INSERT INTO appointment(ap_date,Patient_id,DId)
VALUES ('$t3','$t5','$t7')";

if ($conn->query($sql) === TRUE) {

         header('Location:index.php');
	}
	else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

}
else
{
	header("Location:patient/Error.php");
}

}


?>




























</div>


































</body>
</html>