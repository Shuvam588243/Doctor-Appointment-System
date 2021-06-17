
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

$conn = mysqli_connect($servername,$username,$password,$myDB);

if(!$conn)
{
	die("Connection Failed :" . mysqli_connect_error());
}

$query = "SELECT * FROM appointment where DId='$t1'";
$data = mysqli_query($conn, $query);
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
  <a class="navbar-brand" href="#">BarbClinic </a>
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
 <th>Doctor Id</th>
 <th>Appointment Id</th>
 <th>Date of Appointment</th>

 
 
 <th>Action</th>
 <th>Action</th>
 </tr>

  
  
  
  
  
  
  <?php
  
  while($result = mysqli_fetch_assoc($data))
  {
	  echo "<tr>
	   <td align='center'>".$result['DId']."</td>
 <td align='center'>".$result['ap_id']."</td>
 <td align='center'>".$result['ap_date']."</td>


 
 
 
  <td align='center'><a href='approve.php?id=$result[ap_id]&hn=$result[ap_date]&f=$result[Patient_id]&s=$result[DId]' target='_top'>Aprove</a></td>
 
 <td align='center'><a href='postpone.php?id=$result[ap_id]&hn=$result[ap_date]&f=$result[Patient_id]' target='_top'>Postpone</a></td>
 
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