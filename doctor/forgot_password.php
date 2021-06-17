

<?php session_start(); ?>



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
        <a class="nav-link" href="../index.php">Home<span class="sr-only">(current)</span></a>
      </li>
	
     
	  
	  
	  
	  
	  
    </ul>
	
	
	
	
	
	
  </div>
</nav>
</header>


<div class="container col-xl-3 mt-auto">
<form name="f" method="post">
  <fieldset>
  <br><br>
    <b><h3 style="color:red;">Forgot Password?</h3></b>
	
	
	

	<div class="form-group">
      <label for="exampleInputEmail1">Name</label>
      <input type="text" name="t1" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
     
    </div>
	

    <div class="form-group">
      <label for="exampleInputEmail1">Email address</label>
      <input type="text" name="t2" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
     
    </div>
	
	  
	
	
	
	<div class="form-group">
      <label for="exampleInputEmail1">Enter The captcha</label>
      <input type="text" name="code" class="form-control" id="exampleInputAddress" aria-describedby="emailHelp" >
      
    </div> 
	 
	 
	 </fieldset>
   <img src="image.php">
  </fieldset>
  
  
  
  
  
    </fieldset>
    <button type="submit" name="submit" class="btn btn-primary">Find</button>
  </fieldset>
</form>
</div>



<?php
if(isset($_POST["submit"]))
{
	extract ($_POST);
	
	$code=$_SESSION['code'];

				if($_POST['code']==$code)
					{
						header("Location:password_fetched.php");
						 $_SESSION['Name']= $t1;
	
						   $_SESSION['Email']= $t2;
					}
				
				else
					{

								
								echo "<marquee><h4>Incorrect Captcha</h4></marquee>";
		
	
					}	

							

}
?>

















































</body>
</html>