
<?php

session_start();

$t1 = $_SESSION['Email'];
$t2 = $_SESSION['Name'];

$conn = mysqli_connect('localhost','root','','doctor');
$query="select * from patient where PEmail='$t1'";
$result=mysqli_query($conn,$query);
while($row = mysqli_fetch_array($result))
{
	$t1=$row["Patient_id"];
	$t2=$row["PName"];
	$t3=$row["PEmail"];
	$t4=$row["PAddress"];
	$t5=$row["Phone"];
	$t6=$row["Password"];
	
}

?>

<html>
<head>
<link rel="stylesheet" type="text/css" href="../css/style.css">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<body>
<header>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="../admin/admin_login.php">BarbClinic </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarColor01">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="patient_login.php">Login<span class="sr-only">(current)</span></a>
      </li>
		
	  
	  
	  
	  
	  
    </ul>
	
	
	
	
	
	
  </div>
</nav>
</header>
<div class="container col-3">
<form name="f" method="post">
  <fieldset>
    <legend>Your Profile</legend>
	
	<div class="form-group">
      <label for="exampleInputEmail1">Patient ID</label>
      <input type="text"  name="t7" class="form-control" id="exampleEmail" aria-describedby="emailHelp" value="<?php echo "$t1" ?>">
      
    </div>
	
	<div class="form-group">
      <label for="exampleInputEmail1">Patient Name</label>
      <input type="text"  name="t8" class="form-control" id="exampleEmail" aria-describedby="emailHelp" value="<?php echo "$t2" ?>">
      
    </div>
	
	<div class="form-group">
      <label for="exampleInputEmail1"> Patient Email</label>
      <input type="text"  name="t9" class="form-control" id="exampleEmail" aria-describedby="emailHelp" value="<?php echo "$t3" ?>">
      
    </div>
  
    <div class="form-group">
      <label for="exampleInputEmail1">Patient Address</label>
      <input type="email"  name="t1" class="form-control" id="exampleEmail" aria-describedby="emailHelp" value="<?php echo "$t5" ?>">
      
    </div>
	
	<div class="form-group">
      <label for="exampleInputEmail1">Patient Phone</label>
      <input type="text" name="t2" class="form-control" id="exampleName" aria-describedby="emailHelp" value="<?php echo "$t4" ?>" >
      
    </div>
	
	<div class="form-group">
      <label for="exampleInputEmail1">Password</label>
      <input type="text" name="t2" class="form-control" id="exampleName" aria-describedby="emailHelp" value="<?php echo "$t6" ?>" >
      
    </div>
	
</form>
</div>
</body>
</html>