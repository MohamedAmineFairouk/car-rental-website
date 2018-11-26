<?php
session_start();

  $iduser = $_SESSION['first_name']." ".$_SESSION["last_name"];
  $IdVoiture = $_GET["IdVoiture"] ;
 ?>

<!Doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


    <title>Add New Location</title>
	 <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

  </head>
  <body>

	<div class="container-fluid bg">
		<div class="row">
			<div class="col-md-4 col-sm-4 col-xs-12"></div>
			<div class="col-md-4 col-sm-4 col-xs-12">



				<form class="form-container" action="reservepage.php" method="post" enctype="multipart/form-data">
          <h3 class="tram">Add New Location</h3>
				  <div class="form-group">

            <div class="form-group">
            <label for="client" >id la voiture à reserver</label>
  					<input type="" name="idvoiturereserve" class="form-control" value="<?php echo $IdVoiture ?>"  >
  				  </div>

					<label for="client" >Nom et Prenom du Client</label>
					<input type="" name="client" class="form-control" value="<?php echo $iduser ?>"  >
				  </div>

				  <div class="form-group">
					<label for="modele" class="modele">Durée</label>
					<input type="textarea" name="duree" class="form-control"  placeholder="Durée en jours">
				  </div>
          <div class="form-group">
					<label for="datedelocation">Date de Location</label>
					<input type="date" name="datelocation"  class="form-control"  placeholder="Date de location">
				  </div>

				  <div class="form-check">
					<input type="checkbox" class="form-check-input" id="exampleCheck1">
					<label class="form-check-label remember" for="exampleCheck1">Remember me</label>
				  </div></br>

				  <button type="submit" class="btn btn-success btn-block">Add Location</button>
				</form>



			</div>

			<div class="col-md-4 col-sm-4 col-xs-12"></div>
		</div>
	</div>

  </body>
</html>
