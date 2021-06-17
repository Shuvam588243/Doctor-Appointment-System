

<?php

session_start();

$t1 = $_SESSION['email'];

$conn = mysqli_connect('localhost','root','','doctor');
$query=" select * from patient";
$result=mysqli_query($conn,$query);
while($row = mysqli_fetch_array($result))
{
	$t1=$row["Patient_id"];
	
}

?>

<html>
<head>
<link rel="stylesheet" type="text/css" href="../css/style.css">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
</head>
<body>

<br>

<table border=1 width="600px" align="center" cellspacing="400px">
<tr>
<td>
<br>
<div class="container col-5">
<form method="post">
  <fieldset>
 
	 
	 
	
	<div class="form-group">
      <label for="exampleInputEmail1">Enter The OTP</label>
      <input type="text" name="t3" class="form-control" id="exampleInputAddress" aria-describedby="emailHelp" >
      
    </div>
	 
	 
	 
	<div class="form-group">
      <label for="exampleInputEmail1">Enter The captcha</label>
      <input type="text" name="code" class="form-control" id="exampleInputAddress" aria-describedby="emailHelp" >
      
    </div> 
	 
	 
	 </fieldset>
   <img src="image.php">
  </fieldset>
	 
	 <br><br>
	 

    </fieldset>
    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
  </fieldset>
  <br><br>
</form>
</div>



<?php
if(isset($_POST["submit"]))
{
	extract ($_POST);
	
	$code=$_SESSION['code'];

				if($_POST['code']==$code)
					{
					$query = "UPDATE appointment SET Fees='Paid' WHERE Patient_id='$t1'"; 
						$data = mysqli_query($conn, $query);
							if($data)
								{
								echo "Payment Successfull";
								header("Location:index.php");
								}
				
						else
							{

								
								echo "<marquee><h4>Incorrect Captcha</h4></marquee>";
		
	
							}	

							}

}
?>


























</td>
</tr>
</table>

</body>
</html>