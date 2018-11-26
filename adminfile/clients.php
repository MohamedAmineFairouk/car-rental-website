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
  <div class="panel-heading">La liste des Clients</div>
  <div class="panel-body">

  </div>


  <!-- Table -->
  <table class="table">
    <thead>
     <tr>
       <th>id</th>
       <th>Nom</th>
       <th>Prenom</th>
       <th>EMail</th>
       <th>Password</th>
       <th>Date</th>
     </tr>


       <?php
        include('connexion.php');
        $sql = "SELECT *  FROM client";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
           // output data of each row
           while($row = $result->fetch_assoc()) {
             echo "<tr><td>".$row["id"]."</td><td>".$row["Nom"]."</td><td> ".$row["Prenom"]."</td><td>".$row["email"]." </td><td> ".$row["password"]."</td><td>".$row["dateob"]."</td></tr>" ;
           }
       } else {
           echo "0 results";
       }
       $conn->close();


       ?>




   </thead>
  </table>

  </div>
</div>

<div class="container-fluid">
  <div class="row">
    <div class="col-sm-6 col-md-2">

    <a href="ajouterClient.html"><button type="button" class="btn btn-primary">Ajouter</button></a>

  </div>
    <div class="col-sm-6 col-md-2">
        <form action="deleteClient.php" method="post">
        <button type="submit" class="btn btn-primary">Supprimer</button>
        <p><!--to make some esp --></p>
        <input class="form-control" name="idtodelete" type="text" placeholder="Enter the id to delete">
      </form>

    </div>

    <div class="col-8">
    <form action="editClient.php" method="post">
    <button type="submit" class="btn btn-primary">modifier</button>
    <div class="col-xs-6">
    <input class="form-control" id="inputid" name="idtoedit" type="text" required placeholder="Enter the id to edit">

    <div class="row">
    <div class="col-xs-4">
        <label for="ex3">Nom</label>
        <input class="form-control" name="nom" required type="text">
      </div>
      <div class="col-xs-4">
        <label for="ex3">Prenom</label>
        <input class="form-control" name="prenom" required type="text">
      </div>
    </div>
      <div class="row">
      <div class="col-xs-4">
        <label for="ex3">Email</label>
        <input class="form-control" name="email" required type="text">
      </div>
      <div class="col-xs-4">
        <label for="ex3">Password</label>
        <input class="form-control" name="password" required type="text">
      </div>
    </div>
  </form>
  </div>
  </div>



  </body>
</html>
