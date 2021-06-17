
<?php


session_start();

$t1 = $_SESSION['email'];


$servername = "localhost";
$username = "root";
$password = "";
$myDB = "doctor";


$conn = mysqli_connect('localhost','root','','doctor');
$query="select * from doctors where DEmail='$t1'";
$result=mysqli_query($conn,$query);
while($row = mysqli_fetch_array($result))
{
	$t1=$row["DId"];
}

$query2 = "select * from appointment where Fees='' and DId='$t1'";
$data = mysqli_query($conn, $query2);
$total= mysqli_num_rows($data);

if($total !=0)
{
  ?>
  <html>
  <head>
  <link rel="stylesheet" type="text/css" href="../css/style.css">
  
  </head>
  <center>
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






































<br> 
<br> 
<br> 
<br> 
<br> 
<br>  
 <table border=1  class="table table-hover">
 <tr class="table-success">
 <th>ap_id</th>
 <th>ap_date</th>
 <th>Patient_id</th>
 <th>Approval</th>
 

 <th>Action</th>
 </tr>

  
  
  
  
  
  
  <?php
  
  while($result = mysqli_fetch_assoc($data))
  {
	  echo "<tr>
	   <td align='center'>".$result['ap_id']."</td>
 <td align='center'>".$result['ap_date']."</td>
 <td align='center'>".$result['Patient_id']."</td>
 <td align='center'>".$result['Approval']."</td>

 
 
 <td align='center'><a href='delete_appointment.php?id=$result[ap_id] target='_top'>Delete Appointment</a></td>
 
 </tr>";
 }
}
else
{
	echo "no record found";
}

  
?>
</table> 
<script>
function checkdelete()
{
	return confirm('Are you sure you want to delete this data');
	
}
</script>
</body>
</center>
</html>