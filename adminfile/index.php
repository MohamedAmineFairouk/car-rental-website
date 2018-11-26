<?php include("connexion.php") ;
$sqlclient = "SELECT *  FROM client";
$resultclient = $conn->query($sqlclient);

$sqlvoiture = "SELECT *  FROM voiture";
$resultvoiture = $conn->query($sqlvoiture);

$sqllocation = "SELECT *  FROM location";
$resultlocation = $conn->query($sqllocation);

?>
<!DOCTYPE html>
<html lang="en">
<head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <link rel="stylesheet" type="text/css" href="css/custom.css">
        <title>Espace Manager</title>


          <nav class="navbar navbar-inverse navbar-static-top mynav" role="navigation">
          <div class="container-fluid nav2">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="index.php">Manager Espace</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div   class="collapse navbar-collapse">
              <ul class="nav navbar-nav esp">
                    <li><a href="clients.php">Les clients</a></li>
                    <li><a href="voitures.php">Les Voitures</a></li>
                    <li><a href="location.php">Location</a></li>
                    <li><a href="admin.php">Setting</a></li>
                </ul>

              <ul class="nav navbar-nav navbar-right">
                <li><a href="logout.php">Logout</a></li>
              </ul>
            </div><!-- /.navbar-collapse -->
          </div><!-- /.container-fluid -->
        </nav>



    </head>




    <body>
    	<div id="container">



<div id="content" class="container col-md-12">

<div class="col-md-12">
		<h1>Dashboard</h1>
		<hr>
	</div>

 		<a href="clients.php">
			<div class="col-sm-6 col-md-2">
	            <div class="thumbnail">
	              <div class="caption">
	              <center>
	              <img src="images/ic_category.png" width="100" height="100">
	                <h3><?php echo $resultclient->num_rows ;  ?></h3>
	                <p class="detail">Les Clients</p>
	                </center>
	              </div>
	            </div>
	         </div>
	    </a>

		<a href="voitures.php">
          <div class="col-sm-6 col-md-2">
            <div class="thumbnail">
              <div class="caption">
              <center>
              <img src="images/voiture.png" width="100" height="100">
                <h3><?php echo $resultvoiture->num_rows ;  ?></h3>
                <p class="detail">Les Voitures</p>
                </center>
              </div>
            </div>
          </div>
        </a>

        <a href="location.php">
              <div class="col-sm-6 col-md-2">
                <div class="thumbnail">
                  <div class="caption">
                  <center>
                  <img src="images/ic_news.png" width="100" height="100">
                    <h3><?php echo $resultlocation->num_rows ;  $conn->close(); ?></h3>
                    <p class="detail">Les Locations</p>
                    </center>
                  </div>
                </div>
              </div>
            </a>
        <a href="admin.php">
          <div class="col-sm-6 col-md-2">
            <div class="thumbnail">
              <div class="caption">
              <center>
              <img src="images/ic_setting.png" width="100" height="100">
                <h3><br></h3>
                <p class="detail">Setting</p>
                </center>
              </div>
            </div>
          </div>
        </a>
</div>

			<div id="footer">
</div>    	</div>

</body></html>
