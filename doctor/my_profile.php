
<?php

session_start();

$t1 = $_SESSION['email'];

$conn = mysqli_connect('localhost','root','','doctor');
$query="select * from doctors where DEmail='$t1'";
$result=mysqli_query($conn,$query);
while($row = mysqli_fetch_array($result))
{
	$t1=$row["DId"];
	$t2=$row["DName"];
	$t3=$row["DAddress"];
	$t4=$row["DPhone"];
	$t5=$row["Speciality"];
	$t6=$row["DEmail"];
	
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
  <a class="navbar-brand" href="#">Health Plus</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  


  <div class="collapse navbar-collapse" id="navbarColor01">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php" target="_top">Home</a>
      </li>
 
 
 
	  
    </ul>
	
	
	
	
	
	
  </div>
</nav>
</header>

<br>
<div class="container col-3">
<form name="f" method="post">
  <fieldset>
    <legend>My Profile</legend>
	
	<div class="form-group">
      <label for="exampleInputEmail1">Doctor ID</label>
      <input type="text"   class="form-control" id="exampleEmail" aria-describedby="emailHelp" value="<?php echo "$t1" ?>">
      
    </div>
	
	<div class="form-group">
      <label for="exampleInputEmail1">Doctor Name</label>
      <input type="text"   class="form-control" id="exampleEmail" aria-describedby="emailHelp" value="<?php echo "$t2" ?>">
      
    </div>
	
	<div class="form-group">
      <label for="exampleInputEmail1">Address</label>
      <input type="text"  class="form-control" id="exampleEmail" aria-describedby="emailHelp" value="<?php echo "$t3" ?>">
      
    </div>
  
    <div class="form-group">
      <label for="exampleInputEmail1">Phone Number</label>
      <input type="text"  class="form-control" id="exampleEmail" aria-describedby="emailHelp" value="<?php echo "$t4" ?>">
      
    </div>
	
	<div class="form-group">
      <label for="exampleInputEmail1">Speciality</label>
      <input type="text" class="form-control" id="exampleName" aria-describedby="emailHelp" value="<?php echo "$t5" ?>" >
      
    </div>
	
	
	<div class="form-group">
      <label for="exampleInputEmail1">Email</label>
      <input type="text"  class="form-control" id="exampleName" aria-describedby="emailHelp" value="<?php echo "$t6" ?>" >
      
    </div>
	
	
	
</form>
</div>
</body>
</html>