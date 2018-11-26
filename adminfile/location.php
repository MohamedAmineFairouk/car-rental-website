<?php include("connexion.php");?>


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

<div class="container-fluid">
    <div class="panel panel-default">
  <!-- Default panel contents -->
  <div class="panel-heading">La liste des reservations</div>
  <div class="panel-body">

  </div>


  <!-- Table -->
  <table class="table">
    <thead>
     <tr>
       <th>idLocation</th>
       <th>idVoiture</th>
       <th>Client</th>
       <th>Duree</th>
       <th>Date de location</th>
       <th>Etat</th>
       <th>Action</th>
     </tr>
     </thead>
<tbody>
                <?php
        include("connexion.php");
        $sql = "SELECT *  FROM location";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
           // output data of each row
           while($row = $result->fetch_assoc()) {

              $myid = $row["idlocation"] ;?>

              <tr>
                <td> <?php echo $myid;?> </td>
                <td> <?php echo $row["idvoiture"];?></td>
                <td> <?php echo $row["client"];?></td>
                <td> <?php echo $row["duree"];?></td>
                <td> <?php echo $row["datelocation"];?></td>
                <td> <?php echo $row["Etat"];?></td>
                <td> <a href="submitlocation.php<?php echo '?idlocation='.$myid; ?>" class="btn btn-primary btnmodify">Valider</a>
              </tr>
              <?php }} ?>
  </tbody>
</table>

 </div>
</div>

<div class="container-fluid">
  <div class="row">
    <div class="col-sm-6 col-md-2">

    <a href="ajouterLocation.html"><button type="button" class="btn btn-primary">Ajouter</button></a>

  </div>
    <div class="col-sm-6 col-md-2">
        <form action="deleteLocation.php" method="post">
        <button type="submit" class="btn btn-primary">Supprimer</button>
        <p><!--to make some esp --></p>
        <input class="form-control" name="idtodelete" type="text" placeholder="Enter the id to delete">
      </form>

    </div>


    <div class="col-8">
    <form action="editLocation.php" method="post">
    <button type="submit" class="btn btn-primary btnmodify">modifier</button>
    <div class="col-xs-6">
    <input class="form-control" name="idtoedit" id="inputid" type="text" required placeholder="Enter the id to edit">

    <div class="row">
    <div class="col-xs-4">
        <label for="ex3">Client</label>
        <input class="form-control" name="client" required type="text">
      </div>
      <div class="col-xs-4">
        <label for="ex3">Durée</label>
        <input class="form-control" name="duree"required  type="text">
      </div>
    </div>
      <div class="row">
      <div class="col-xs-6">
        <label for="ex3">Date de Location</label>
        <input class="form-control" name="datelocation" required type="date">
      </div>

    </div>
  </form>
  </div>




  </body>
</html>
