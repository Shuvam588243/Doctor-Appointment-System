
<?php
$servername = "localhost";
$username = "root";
$password = "";
$myDB = "doctor";

extract ($_POST);

$conn = mysqli_connect($servername,$username,$password,$myDB);

if(!$conn)
{
	die("Connection Failed :" . mysqli_connect_error());
}

$query = "SELECT * FROM doctors where Speciality='$t1'";
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
  <a class="navbar-brand" href="admin/admin_login.php">HEALTH PLUS</a>
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
</header>


<br> 
<br> 
<br>  
 <table border=1  class="table table-hover">
 <tr class="table-success">
 <th>DId</th>
 <th>DName</th>
 <th>Specilaity</th>
 <th>Email</th>
 

 </tr>

  
  
  
  
  
  
  <?php
  
  while($result = mysqli_fetch_assoc($data))
  {
	  echo "<tr>
 <td align='center'>".$result['DId']."</td>
 <td align='center'>".$result['DName']."</td>
 <td align='center'>".$result['Speciality']."</td>
 <td align='center'>".$result['DEmail']."</td>
 
 
 
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