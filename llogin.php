<?php
include('connection.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Welcome</title>
	 <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script> 
</head>
<body>
		<div class="card col-4 mx-auto" style="margin-top: 12%">
			<div class="card-header text-center">
				<h3>Librarian Login</h3>
			</div>
			<div class="card-body">
				<form action="llogin.php" method="POST">
    <div class="form-group">
      <label for="unsername">Librarian Id:</label>
      <input type="text" class="form-control" id="username" name="eid" placeholder="Enter Id" >
      <p id="msg" style="color: red"></p>
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="password"  placeholder="Enter password" name="pwd">
      <p id="msg1" style="color: red"></p>
    </div>
    <div class="checkbox">
     
    </div>
    <center>
    <button type="submit" class="btn btn-primary" name="submit">Submit</button> 	
    </center>
   
  </form>
			</div>
		</div>
  <?php
    if (isset($_POST["submit"])) {

       $count=0;
        $sql = "select * from ladmin where eid='$_POST[eid]' && password='$_POST[pwd]' ";
        $res = mysqli_query($conn,$sql);

        $count=mysqli_num_rows($res);
        if ($count==0) {
          echo 
          "<br>
          <div class='alert alert-danger col-4 text-center mx-auto' role='alert'>
  Invalid Enrollment number or password
</div>";
        }else{
          echo "<script>
            window.location.href = 'ladmin.php';
          </script>";
        }
    }

  ?>  
   
</body>
</html>