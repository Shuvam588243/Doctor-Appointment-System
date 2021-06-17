
<?php

session_start();

$t1 = $_SESSION['DEmail']; 

$conn = mysqli_connect('localhost','root','','doctor');
$query="select * from doctors where DEmail='$t1'";
$result=mysqli_query($conn,$query);
while($row = mysqli_fetch_array($result))
{
	$t5=$row["DId"];
	$t2=$row["DName"];
	$t3=$row["DAddress"];
  $t6=$row["DPhone"];
  $t7=$row["Speciality"];
  $t8=$row["DEmail"];
	
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
  <a class="navbar-brand" href="#">HEALTH PLUS</a>
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

<br><br>

<div class="container">
	<div class="row">
		
<div class="col-6">
  



<div class="jumbotron">
   <h1 class="display-2" align="center" style="color:blue"><i>Health Plus</i></h1>

  <hr class="my-2">
  <br>
     <h2 class="display-3" align="center">Doctor Profile</h2>
 
  <p class="lead" align="center">
    <br>
    <a class="btn btn-primary btn-lg" href="update_info.php" role="button" target="_top">Update Details</a>
     <a class="btn btn-primary btn-lg" href="reset_pass.php" role="button" target="_top">Reset Password</a>
  </p>
</div>


</div>
		<div class="col-5">


<form name="f" method="post">
  <fieldset>
    <legend>Doctor Profile</legend>

    <div class="form-group">
      <label for="exampleInputEmail1">Doctor Id</label>
      <input type="text"  name="t7" class="form-control" id="exampleEmail" aria-describedby="emailHelp" value="<?php echo "$t5" ?>">
      
    </div>
	
	<div class="form-group">
      <label for="exampleInputEmail1">Doctor Name</label>
      <input type="text"  name="t7" class="form-control" id="exampleEmail" aria-describedby="emailHelp" value="<?php echo "$t2" ?>">
      
    </div>
	
	<div class="form-group">
      <label for="exampleInputEmail1">Doctor Address</label>
      <input type="text"  name="t8" class="form-control" id="exampleEmail" aria-describedby="emailHelp" value="<?php echo "$t3" ?>">
      
    </div>
	
	<div class="form-group">
      <label for="exampleInputEmail1">Doctor Phone</label>
      <input type="text"  name="t9" class="form-control" id="exampleEmail" aria-describedby="emailHelp" value="<?php echo "$t6" ?>">
      
    </div>

      <div class="form-group">
      <label for="exampleInputEmail1">Speciality</label>
      <input type="text"  name="t9" class="form-control" id="exampleEmail" aria-describedby="emailHelp" value="<?php echo "$t7" ?>">
      
    </div>
  
    <div class="form-group">
      <label for="exampleInputEmail1">Doctor Email</label>
      <input type="email"  name="t1" class="form-control" id="exampleEmail" aria-describedby="emailHelp" value="<?php echo "$t8" ?>">
      
    </div>
	
	
</form>
</div>
</body>
</html>