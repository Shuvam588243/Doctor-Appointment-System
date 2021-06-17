

<?php session_start();
$email = $_SESSION['PEmail'];


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "doctor";


$conn = mysqli_connect('localhost','root','','doctor');
$query="select * from patient where PEmail='$email'";
$result=mysqli_query($conn,$query);
while($row = mysqli_fetch_array($result))
{
	$t1=$row["Patient_id"];
	
}

$query2="select * from pateint where Patient_id='$t1'";
$result2=mysqli_query($conn,$query2);

?>






<html>
<head>
<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
<header>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="#"><i>HEALTH PLUS</i></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarColor01">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home<span class="sr-only">(current)</span></a>
      </li>

       <li class="nav-item active">
        <a class="nav-link" href="Book_doctor.php" target="top">Book Doctor<span class="sr-only">(current)</span></a>
      </li>
	  
	
	  <li class="nav-item active">
        <a class="nav-link" href="../">Logout</a>
      </li>
     
	  
	  
	  
	  
	  
    </ul>

  </div>
</nav>
</header>





<?php include('header.php'); ?>







<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>




<footer>


<div class="col-auto">

<?php if ($t1=='') { ?>

	<a href="appointments.php"><marquee><h4 style="color:red;">Click Here to pay the Appointment Fees</h4></marquee></a>

<?php  } ?>

</div>
	
	

</footer>















</body>
</html>