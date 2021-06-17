

<?php session_start(); ?>

<html>
<head>
<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
<header>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="../admin/admin_login.php">Health Plus </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarColor01">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="../index.php">Home<span class="sr-only">(current)</span></a>
      </li>
		 <li class="nav-item">
        <a class="nav-link" href="../doctor/doctor_login.php">Doctor Login</a>
      </li>
     
	  
	  
	  
	  
	  
    </ul>
	
	
	
	
	
	
  </div>
</nav>
</header>


<br><br>


<div class="container col-3">

<form method="post">
  <fieldset>
    <legend>Login Here</legend>
   
    <div class="form-group">
      <label for="exampleInputEmail1">Email address</label>
      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="t1">
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Password</label>
      <input type="password" class="form-control" id="exampleInputPassword1" name="t2">
    </div>
    </fieldset>
    <button type="submit" name="submit" class="btn btn-primary">Login</button>
	
	<button type="submit" name="submit2" class="btn btn-primary">Forget Password</button>
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

$conn=mysqli_connect($servername,$username,$password,$dbname);
if(!$conn)
{
  die("Database Connection Failed");
}

$query="Select * from patient where PEmail='$t1' and Password='$t2'";

$res=mysqli_query($conn,$query);
$count=mysqli_num_rows($res);
if($count==1)
{

          $_SESSION['PEmail']= $t1;
         header('Location:index.php');
}
else
{


    echo "<script>alert('Invalid Details')</script>";
      header('Location:../404.php');
}

$conn->close();

}


?>

































</body>
</html>