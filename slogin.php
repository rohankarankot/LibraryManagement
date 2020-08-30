<?php
include('connection.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Welcome</title>
	 <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<!-- <link rel="stylesheet" type="text/css" href="bootstrap.css"> -->

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
				<h3>Student Login</h3>
			</div>
			<div class="card-body">
				<form action="slogin.php" method="POST">
    <div class="form-group">
      <label for="unsername">Username</label>
      <input type="text" class="form-control" id="username" name="username" placeholder="Enter Username" >
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
        $sql = "select * from users where username='$_POST[username]' && password='$_POST[pwd]' ";
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
            window.location.href = 'myprofile.php';
          </script>";
        }
      }
    ?>
</body>
</html>