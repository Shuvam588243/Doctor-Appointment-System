
<?php


session_start();

$t1 = $_SESSION['email'];


$servername = "localhost";
$username = "root";
$password = "";
$myDB = "doctor";


$conn = mysqli_connect('localhost','root','','doctor');
$query="select * from patient where PEmail='$t1'";
$result=mysqli_query($conn,$query);
while($row = mysqli_fetch_array($result))
{
	$t1=$row["Patient_id"];
}

$conn = mysqli_connect($servername,$username,$password,$myDB);

if(!$conn)
{
	die("Connection Failed :" . mysqli_connect_error());
}

$query = "select patient.Patient_id,PName,ap_id,ap_date,DId,ap_Fees,Approval from patient,appointment where appointment.Patient_id=patient.Patient_id and appointment.Patient_id='$t1'";
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
  <a class="navbar-brand" href="#">Health Plus </a>
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

 <th>Patient Id</th>
  <th>Patient Name</th>


 <th>Appointment Id</th>
 
 
 <th>Appointment Date</th>

  <th>Doctor Id</th>
   <th>Appointment Fees</th>
 <th>Status</th>
 
 
 <th>Action</th>
 <th>Action</th>
 </tr>

  
  
  
  
  
  
  <?php
  
  while($result = mysqli_fetch_assoc($data))
  {
	  echo "<tr>
 <td align='center'>".$result['Patient_id']."</td>
 <td align='center'>".$result['PName']."</td>
 <td align='center'>".$result['ap_id']."</td>
 <td align='center'>".$result['ap_date']."</td>
 <td align='center'>".$result['DId']."</td>
  <td align='center'>".$result['ap_Fees']."</td>
 <td align='center'>".$result['Approval']."</td>

 
 
 
 <td align='center'><a href='payment.php?id=$result[Patient_id]&hn=$result[PName]&f=$result[ap_id]&g=$result[ap_date]&n=$result[DId]&x=$result[ap_Fees]' target='_top'>Pay</a></td>
 
 <td align='center'><a href='delete_appointment.php?id=$result[ap_id]' target='_top'>Delete</a></td>
 
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