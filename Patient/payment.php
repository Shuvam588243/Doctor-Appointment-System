
<?php

session_start();

$t1 = $_SESSION['email'];

$_GET['id'];
$_GET['hn'];
$_GET['f'];
$_GET['g'];
$_GET['n'];
$_GET['x'];

?>

<html>
<head>
<link rel="stylesheet" type="text/css" href="../css/style.css">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<body>
<div class="container col-5">
<form name="f" method="post" >
  <fieldset>
    <legend>Pay Here</legend>
	
	<div class="form-group">
      <label for="exampleInputEmail1">Patient ID</label>
      <input type="text"  name="t7" class="form-control" id="exampleEmail" aria-describedby="emailHelp" value="<?php echo $_GET['id']; ?>">
      
    </div>
	
	<div class="form-group">
      <label for="exampleInputEmail1">Patient Name</label>
      <input type="text"  name="t8" class="form-control" id="exampleEmail" aria-describedby="emailHelp" value="<?php echo $_GET['hn']; ?>">
      
    </div>
	
	<div class="form-group">
      <label for="exampleInputEmail1">Application Id</label>
      <input type="text"  name="t9" class="form-control" id="exampleEmail" aria-describedby="emailHelp" value="<?php echo $_GET['f']; ?>">
      
    </div>
  
    <div class="form-group">
      <label for="exampleInputEmail1">Application Date</label>
      <input type="text"  name="t1" class="form-control" id="exampleEmail" aria-describedby="emailHelp" value="<?php echo $_GET['g']; ?>">
      
    </div>
	

	
	<div class="form-group">
      <label for="exampleInputEmail1">Doctor Id</label>
      <input type="text" name="t2" class="form-control" id="exampleName" aria-describedby="emailHelp" value="<?php echo $_GET['n']; ?>">
      
    </div>
	
	
	<div class="form-group">
      <label for="exampleInputEmail1">Fees</label>
      <input type="text" name="t2" class="form-control" id="exampleName" aria-describedby="emailHelp" value="<?php echo $_GET['x']; ?>">
      
    </div>
	
	
 
	
	
	
	</fieldset>
    <button type="submit" name="submit" class="btn btn-primary">Pay Now</button>
  </fieldset>
	
</form>
</div>

<?php
if(isset($_POST["submit"]))
{
	header("Location:payment_interface.php");
	
	
}

?>

</body>
</html>