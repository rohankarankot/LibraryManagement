<!DOCTYPE html>
<html>
<head>
	<title>Librarian admin</title>
	 <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script> 
<!-- font awesome link -->
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<style>
.vl {
  border-left: 2px solid black;
  height: 500px;
}
a{
	color: black;
}
</style>
</head>
<body class="container-fluid">
	<div class="jumbotron text-center">
		<h1>Librarian</h1><hr>
	</div>
	<div class="row">
		<div class="col-md-3">
			<ul class="list-group text-center">
				 <li class="list-group-item"><span><i class="fa fa-user" style="font-size: 25px" aria-hidden="true"></i>
</span>&nbsp; Welcome </li>
  <li class="list-group-item"><a href="addbook.php" target="blank">Add Book</a></li>
    <li class="list-group-item"><a href="ladmin.php" target="blank">Issue Book</a></li>
    <li class="list-group-item"><a href="index.html" target="blank"> Logout &nbsp;  <span><i class="fa fa-sign-out" aria-hidden="true" style="font-size: 20px"></i>
</span></a></li>
  
</ul>

		</div>
		<div class="vl" class="col-md-1"></div>
		<div class="col-md-8">
			<div class="card col-8 mx-auto">
				<div class="card-header text-center">
					Add New Book
				</div>
				<div class="card-body ">
				
						<form onsubmit="return fun();">
    <div class="form-group">
      <label for="email">Book Name:</label>
      <input type="text" class="form-control" required id="email" placeholder="Enter Book Name" name="email">
    </div>
    <div class="form-group">
      <label for="pwd">Author Name:</label>
      <input type="text" class="form-control" required id="pwd" placeholder="Enter Author Name" name="pwd">
    </div>
    <div class="form-group">
      <label for="email">Quantity:</label>
      <input type="number" class="form-control" required id="email" placeholder="Enter Quantity" name="email">
    </div>
    <center>
    <button type="submit" class="btn btn-primary">Add Book</button>
    </center>
  </form>


					</div>
					
				</div>
				
			</div>
	
		</div>

		
	</div>
<script>
	function fun() {
 alert("Book Added Successfully!!");		
	}
</script>

</body>
</html>