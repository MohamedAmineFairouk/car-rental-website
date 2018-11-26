<!Doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


    <title>Add New Client</title>
	 <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link href="css/medop.css" rel="stylesheet" type="text/css">
  </head>
  <body>

	<div class="container-fluid bg">
		<div class="row">
			<div class="col-md-4 col-sm-4 col-xs-12"></div>
			<div class="col-md-4 col-sm-4 col-xs-12">



				<form class="form-container" action="insertData.php" method="post">
          <h3 class="tram">Sign up</h3>
				  <div class="form-group">
					<label for="exampleInputEmail1" class="email">Email address</label>
					<input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
					<small id="emailHelp" class="form-text text-muted">Please make sure that you have access</small>
				  </div>
				  <div class="form-group">
					<label for="exampleInputPassword1" class="password">Password</label>
					<input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
				  </div>
          <div class="form-group">
            <div class="form-group">
         <label for="exampleInputPassword2" class="password">Password</label>
         <input type="password" name="retypepassword" class="form-control"  placeholder="Retype Password" >
         </div>

					<label for="nom" class="nom">Nom</label>
					<input type="textarea" name="nom" class="form-control"  placeholder="Nom">
				  </div>
          <div class="form-group">
					<label for="Prenom" class="Prenom">Prenom</label>
					<input type="textarea" name="prenom" class="form-control" id="exampleInputPassword1" placeholder="Prenom">
				  </div>
          <div class="form-group">
					<label for="date" class="date">Date Of Birth</label>
					<input type="date" name="mydate" class="form-control"  placeholder="date">
				  </div>
				  <div class="form-check">
					<input type="checkbox" class="form-check-input" id="exampleCheck1">
					<label class="form-check-label remember" for="exampleCheck1">Remember me</label>
				  </div></br>

				  <button type="submit" class="btn btn-success btn-block">Login</button>
				</form>



			</div>

			<div class="col-md-4 col-sm-4 col-xs-12"></div>
		</div>
	</div>

  </body>
</html>
