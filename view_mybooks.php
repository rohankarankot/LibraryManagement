<!DOCTYPE html>
<html>
<head>
	<title>My Books</title>
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
		<h1>View My Books</h1><hr>
	</div>
	<div class="row">
		<div class="col-md-3">
			<ul class="list-group text-center">
				 <li class="list-group-item"><span><i class="fa fa-user" style="font-size: 25px" aria-hidden="true"></i>
</span>&nbsp; Welcome </li>
  <li class="list-group-item"><a href="myprofile.php" target="blank">View my Profile</a></li>
    <li class="list-group-item"><a href="llogin.php" target="blank">Issued Books</a></li>
    <li class="list-group-item"><a href="index.html" target="blank"> Logout &nbsp;  <span><i class="fa fa-sign-out" aria-hidden="true" style="font-size: 20px"></i>
</span></a></li>
  
</ul>

		</div>
		<div class="vl" class="col-md-1"></div>
		<div class="col-md-8">
			
			<table class="table table-condensed">
    <thead>
      <tr>
        <th>Book Name</th>
        <th>Author Name</th>
        <th>Issued Date</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Software Engineering</td>
        <td>Pankaj jalote</td>
        <td>12/04/2019</td>
      </tr>
      <tr>
        <td>Engineering Mathematics</td>
        <td>Kumbojkar</td>
        <td>10/03/2019</td>
      </tr>
      <tr>
        <td>Compiler Construction</td>
        <td>josh schilar</td>
        <td>05/03/2019</td>
      </tr>
    </tbody>
  </table>
		</div>

		
	</div>


</body>
</html>