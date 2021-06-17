
<?php session_start(); ?>

<html>
<head>
<link rel="stylesheet" type="text/css" href="../css/style.css">
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
        <a class="nav-link" href="../" target="_top">Home</a>
      </li>

     
    
    
    
    
    
    </ul>
  
  
  
  
  
  
  </div>
</nav>
</header>

<div class="container col-4">
<br><br>
<form method="post">
  <fieldset>
    <legend>Doctor Login Panel</legend>
   
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
	
	
	<button type="submit" name="submit2" class="btn btn-primary">Forgot Password</button>
	
	
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

$query="Select * from doctors where DEmail='$t1' and DPassword='$t2'";

$res=mysqli_query($conn,$query);
$count=mysqli_num_rows($res);
if($count==1)
{

	     $_SESSION['DEmail']= $t1;
         header('Location:index.php');








}
else
{


    $_SESSION['student_error']="Invalid Credentials";
	header('Location:patient_login.php');
}

$conn->close();

}


?>







<?php

if(isset($_POST["submit2"]))

{

header("Location:forgot_password.php");

}


?>


























</body>
</html>