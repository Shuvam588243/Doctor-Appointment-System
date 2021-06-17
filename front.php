
<?php session_start(); ?>


 <div class="container">
   

        <div class="row">
            


            <div class="col-4"> 


              <form method="post" action="search_result.php">
  <fieldset>
    <legend>Search Here</legend>
   
    
   <div class="form-group">
      <label for="exampleSelect2">Category</label>
      <select  class="form-control" id="exampleSelect2" name="t1">
        <option value="Eye Specialist">Eye Specialist</option>
        <option value="Dentist">Dentist</option>
        <option value="Skin Care">Skin Care</option>
        <option value="Nutritionist">Nutritionist</option>
        <option value="Others">Others</option>
      </select>
    </div>
  
  
    </fieldset>
    <button type="submit" class="btn btn-primary">Search</button>
  </fieldset>
</form>


















             
          </div>

      

      <div class="col-3"> </div>













            <div class="col"> 

              <div class="card border-info" style="max-width: 20rem;">
                     <div class="card-header" align="center"><b>Login</b></div>
                     <div class="card-body">
                      




<form method="post">
  <fieldset>
    <legend align="center">Patient Login Panel</legend>
   
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
  
  </fieldset>
</form>








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
         header('Location:Patient/index.php');








}
else
{


   
  header('Location:404.php');
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














              </div>
            </div>
          </div>
</div>



</div>
