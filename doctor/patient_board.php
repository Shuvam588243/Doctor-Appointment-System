

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
  <a class="navbar-brand" href="index.php">Health Plus</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarColor01">
    <ul class="navbar-nav mr-auto">
    
      <li class="nav-item">
        <a class="nav-link" href="check_patient1.php">Check Patient</a>
      </li>
	  <li class="nav-item">
        <a class="nav-link" href="#">View Patient Details</a>
      </li>
	   <li class="nav-item">
        <a class="nav-link" href="Submit_report.php">Submit Report</a>
      </li>
     
	  
	  
	  
	  
	  
    </ul>
	
	
	
	
	
	
  </div>
</nav>
</header>
</body>
</html>