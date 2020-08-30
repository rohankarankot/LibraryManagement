<?php
	include 'connection.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Student Register</title>
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
		<div class="card col-4 mx-auto" style="margin-top: 2%">
			<div class="card-header text-center">
				<h3>Student Registration</h3>
			</div>
			<div class="card-body">
				<form action="register.php" method="POST" onsubmit="return val()">
          <div class="form-group">
      <label for="unsername">Username</label>
      <input type="text" class="form-control" id="username" placeholder="Enter Unsername" name="username" >
    </div>
    <div class="form-group">

      <label for="unsername">Firstname:</label>
      <input type="text" class="form-control" id="username" placeholder="Firstname" name="fname" >
      <p id="msg" style="color: red"></p>
    </div>
    <div class="form-group">
      <label for="unsername">Lastname:</label>
      <input type="text" class="form-control" id="username" placeholder="Lastname" name="lname" >
      <p id="msg" style="color: red"></p>
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" pattern=".{6,}" title="Six or more characters" id="password" onkeyup='check();' placeholder="Enter password" name="pwd" >
      <!-- <p id="pmsg" style="color: red"></p> -->
    </div>
     <div class="form-group">
      <label for="pwd">Confirm Password:</label>
      <input type="password" onkeyup='check();' class="form-control" pattern=".{6,}" title="Six or more characters" id="confirm_password" placeholder="Enter password again" name="pwd">
      <span id='message'></span>
    </div>
    
      <p id="msg" style="color: red"></p>
    </div>
    
    <center>
    <button type="submit" class="btn btn-primary" name="submit">Submit</button> 	
    </center>
   
  </form>
			</div>
		</div>
    <script>
      function val(){
        var user = document.getElementById('username').value;
        var pass = document.getElementById('password').value;
        if (user =="") {
          document.getElementById('msg').innerHTML=" ** please enter the Username";
          return false;
        }
         if (pass =="") {
          document.getElementById('msg1').innerHTML="** please enter the Password";
          return false;
        }

        
       

      }


      var check = function() {
  if (document.getElementById('password').value ==
    document.getElementById('confirm_password').value) {
    document.getElementById('message').style.color = 'green';
    document.getElementById('message').innerHTML = ' &#10004 Password Matched';
  } else {
    document.getElementById('message').style.color = 'red';
    document.getElementById('message').innerHTML = ' &#10060 Password not Matched';
  }
}
    </script>


<?php
		if (isset($_POST["submit"])) {

      // $us = "SELECT * FROM ";

       $count=0;
        $sql = "select * from users where username='$_POST[username]'";
        $res = mysqli_query($conn,$sql);

        $count=mysqli_num_rows($res);
        if ($count==0) {
          
          $sql = "INSERT INTO `users`(`firstname`, `lastname`, `password`, `username`) VALUES ('$_POST[fname]','$_POST[lname]','$_POST[pwd]','$_POST[username]')";



      
      $fire = mysqli_query($conn,$sql);
      if ($fire==TRUE) { 
       echo "
         <br>
       <div class='alert alert-success col-4 text-center mx-auto' role='alert'>
           <strong>INFO:</strong> Registration Successful!!!  (<a href='slogin.php'> Login here</a>)
         </div>";
      }
        
        }
        else{

          echo "
         <br>
       <div class='alert alert-danger col-4 text-center mx-auto' role='alert'>
           <strong>INFO:</strong> Username already Exists!!
         </div>";
        }

			
		}
?>
</body>
</html>