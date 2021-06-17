


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
      <label for="exampleSelect1">Select The Bank</label>
      <select class="form-control"  name="t2" id="exampleSelect1">
        <option value="Science and Technology">State Bank of India</option>
        <option value="Management">United Nation Bank</option>
        <option value="Language">HDFC</option>
        <option value="Health Science">ICICI</option>
        <option value="Designing">Punjab National Bank</option>
      </select>
    </div>
	
	<div class="form-group">
      <label for="exampleInputEmail1">Card Number</label>
      <input type="text" name="t3" class="form-control" id="exampleInputAddress" aria-describedby="emailHelp" >
      
    </div>
	
	<div class="form-group">
	

      

	
	
	
     
      <select class="form-control"  name="t4" id="exampleSelect1">
        <option value="3 Month">Jan</option>
        <option value="6 Month">Feb</option>
        <option value="8 Month">March</option>
        <option value="1 Year">April</option>
        <option value="2 Year">May</option>
		<option value="3 Month">June</option>
        <option value="6 Month">July</option>
        <option value="8 Month">Aug</option>
        <option value="1 Year">Sep</option>
        <option value="2 Year">Oct</option>
		<option value="3 Month">Nov</option>
        <option value="6 Month">Dec</option>
     
      </select>
	  </div>
	  
	  <div class="form-group">

      <select class="form-control"  name="t4" id="exampleSelect1">
        <option value="3 Month">2027</option>
        <option value="6 Month">2026</option>
        <option value="8 Month">2025</option>
        <option value="1 Year">2024</option>
        <option value="2 Year">2023</option>
		 <option value="3 Month">2022</option>
        <option value="6 Month">2021</option>
        <option value="8 Month">2020</option>
        <option value="1 Year">2019</option>
      </select>
	 
    </div>
	
	
	<div class="form-group">
      <label for="exampleInputEmail1">CVV2</label>
      <input type="text" name="t5" class="form-control" id="exampleInputAddress" aria-describedby="emailHelp" >
      
    </div>
	
	
	<div class="form-group">
      <label for="exampleInputEmail1">Card Holder Name</label>
      <input type="text" name="t5" class="form-control" id="exampleInputAddress" aria-describedby="emailHelp" >
      
    </div>

    </fieldset>
    <button type="submit" name="submit" class="btn btn-primary">Pay</button>
  </fieldset>
  <br><br>
</form>
</div>



<?php
if(isset($_POST["submit"]))
{
	header("Location:otp.php");
}
?>





























</td>
</tr>
</table>

</body>
</html>