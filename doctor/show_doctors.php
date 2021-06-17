



<?php session_start(); ?>


<?php

extract ($_POST);

$servername = "localhost";
$username = "root";
$password = "";
$myDB = "doctor";



$conn = mysqli_connect($servername,$username,$password,$myDB);

if(!$conn)
{
  die("Connection Failed :" . mysqli_connect_error());
}

$sql = "SELECT * FROM doctors";
$result = $conn->query($sql);
?>
<!doctype html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
  <header>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="#">Health Plus </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarColor01">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="../admin/" target="_top">Home<span class="sr-only">(current)</span></a>
      </li>
   
    
    </ul>
  
  
  
  
  
  
  </div>
</nav>





<br><br>


</header>
<h1 align="center">Doctor Details</h1>

<div class="container col-9">


<table class="table-active" width="100%" align="center" border=1>
<tr>
<th>Doctor Id</th>
<th>Doctor Name</th>
<th>Doctor Address</th>
<th>Contact</th>
<th>Email</th>
<th>Speciality</th>
<th>Fees</th>
</tr>
<?php
//Fetch Data form database
if($result->num_rows > 0){
 while($row = $result->fetch_assoc()){
 ?>
 <tr>
 <td><?php echo $row['DId']; ?></td>
 <td><?php echo $row['DName']; ?></td>
 <td><?php echo $row['DAddress']; ?></td>
 <td><?php echo $row['DPhone']; ?></td>
 <td><?php echo $row['DEmail']; ?></td>
<td><?php echo $row['Speciality']; ?></td>
 <td><?php echo $row['DFees']; ?></td>




 </tr>
 <?php
 }
}
else
{
 ?>
 <tr>
 <th colspan="2">There's No data found!!!</th>
 </tr>
 <?php
}
?>
</table>


</div>


<br><br>
<center>
</center>


















</body>
</html>