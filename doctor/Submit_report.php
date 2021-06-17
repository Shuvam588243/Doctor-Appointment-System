


<?php
$servername = "localhost";
$username = "root";
$password = "";
$myDB = "doctor";



$conn = mysqli_connect($servername,$username,$password,$myDB);

if(!$conn)
{
	die("Connection Failed :" . mysqli_connect_error());
}
$_GET['id'];
$_GET['hn'];
$_GET['f'];
$_GET['s'];
$_GET['d'];
?>


<html>
<head>
<link rel="stylesheet" type="text/css" href="../css/style.css">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
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









































  <br><br>















<div class="container col-5">
<form method="post">
  <fieldset>
    <legend>Submit Patient Report</legend>
	
	
	
	
	
	

	<input type="hidden" name="t5" class="form-control" id="exampleInputAddress" aria-describedby="emailHelp" value="<?php echo $_GET['s']; ?> ">
	
	

      <input type="hidden" name="t1" class="form-control" id="exampleInputAddress" aria-describedby="emailHelp" value="<?php echo $_GET['id']; ?> ">
      

	

      <input type="hidden" name="t2" class="form-control" id="exampleInputAddress" aria-describedby="emailHelp" value="<?php echo $_GET['d']; ?> ">
      

	
	
	

      <input type="hidden" name="t3" class="form-control" id="exampleInputAddress" aria-describedby="emailHelp" value="<?php echo $_GET['hn']; ?> ">

	
	
	
      <input type="hidden" name="t4" class="form-control" id="exampleInputAddress" aria-describedby="emailHelp" value="<?php echo $_GET['f']; ?> ">
      

	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
  
  
	
	
	<div class="form-group">
      <label for="exampleInputEmail1">Doctor Id</label>
      <input type="text" name="t6" class="form-control" id="exampleInputAddress" aria-describedby="emailHelp" value="<?php echo $_GET['s']; ?> ">
      
    </div>
	
	
	<div class="form-group">
      <label for="exampleInputEmail1">Patient Id</label>
      <input type="text" name="t7" class="form-control" id="exampleInputAddress" aria-describedby="emailHelp" value="<?php echo $_GET['hn']; ?> ">
      
    </div>
	
	
	<div class="form-group">
      <label for="exampleInputEmail1">Checkup Date</label>
      <input type="text" name="t8" class="form-control" id="exampleInputAddress" aria-describedby="emailHelp" value="<?php echo $_GET['d']; ?> ">
      
    </div>
	
	
	<div class="form-group">
      <label for="exampleInputEmail1">Overview</label>
      <input type="text" name="t9" class="form-control" id="exampleInputAddress" aria-describedby="emailHelp" value="">
      
    </div>
	
	
	</fieldset>
    <button type="submit" name="submit2" class="btn btn-primary">Submit Report</button>
  </fieldset>
  
	
	
  
  
</form>
</div>

<br><br><br>









<?php

if(isset($_POST["submit2"]))

{

extract ($_POST);

$s=$_POST["t6"];
$hn=$_POST["t7"];
$d=$_POST["t8"];



	

	 $query = "insert into Report(Report_date,Overview,DId,Patient_id) values('$d','$t9','$s','$hn')"; 
		$data = mysqli_query($conn, $query);
		if($data)
		{
		echo "<script>alert('Report Submitted Successfully')</script>";
		header("Loaction:patient_board.php");
		}
		else{
			echo "</marquee>not updated.....Please Try Again Later </marquee>";
		}

	
	
	


}


?>





























































</body>
</html>