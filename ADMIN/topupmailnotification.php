<?php

?>


<html>
<head><title></title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

<style>
body{
	padding:10px;
}
</style>
</head>
<body>


<h3 style="color:gold;text-align:center;">SEND TOP-UP MAIL NOTIFICATION</h3>
<form action="sender.php" method="POST">
  <div class="form-group">
    <label>Name</label>
    <input type="text" class="form-control" name="name" style="width:500px;"  placeholder="name of person">
    
  </div>
  <div class="form-group mb-2">
    <label>Email address</label>
    <input type="text"  name="email" class="form-control"  style="width:500px;" placeholder="Email Address">
	<small id="emailHelp" class="form-text text-muted">please double check the email adress because an email noification will be sent.</small>
  </div>
    <div class="form-group" class="col-sm-12 col-md-6 col-lg-6">
    <label>Plan</label>
    <input type="text" class="form-control" name="plan" style="width:500px;"  placeholder="Enter plan">
    
  </div>
   <div class="form-group mb-2">
    <label for="exampleInputPassword1">currency</label>
    <input type="text" class="form-control" name="currency" style="width:500px;" placeholder="Currency">
  </div>
  <div class="form-group mb-2">
    <label for="exampleInputPassword1">Amount</label>
    <input type="text" class="form-control" name="amount" style="width:500px;" placeholder="Amount">
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

</body>
</html>