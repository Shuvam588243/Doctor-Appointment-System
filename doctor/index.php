

<?php


session_start();

$email = $_SESSION['email'];


?>




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
        <a class="nav-link" href="doctor_profile.php" target="top">My Profile</a>
      </li>
	  <li class="nav-item active">
        <a class="nav-link" href="Payment_check.php">Payment Check</a>
      </li>
	  <li class="nav-item active">
        <a class="nav-link" href="../">Logout</a>
      </li>
     
	  
	  
	  
	  
	  
    </ul>
	
	
	
	
	
	
  </div>
</nav>
</header>

<div class="jumbotron">
   <h1 class="display-2 animated pulse" align="center" style="color:black">Health Plus</h1>
   <br>
  <h4 class="display-4 animated bounce" align="center"> Doctor Dashboard</h4>
  <hr class="my-2">
 
  <p class="lead" align="center">
    <a class="btn btn-primary btn-lg" href="view_appointment.php" role="button" target="_top">View Appointments</a>
  
  </p>
</div>
</body>
</html>