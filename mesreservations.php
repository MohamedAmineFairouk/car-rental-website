<?php
/* Displays user information and some useful messages */
session_start();

// Check if user is logged in using the session variable
if ( $_SESSION['logged_in'] != 1 ) {
  echo "Vous devez vous connecter avant de voir votre page de profil!";
  header("location:index.html");
}
else {
    // Makes it easier to read
    $first_name = $_SESSION['first_name'];
    $last_name = $_SESSION['last_name'];
    $client = $first_name. ' '.$last_name ;

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Mes Reservations</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
  <link rel="stylesheet"  href="https://fonts.googleapis.com/css?family=Tangerine">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  <link rel="stylesheet" type="text/css" href="css/nosvehicules.css">
</head>

<body>

  <nav class="navbar navbar-default mynav">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand navimg" href="index.php">
          <img alt="Brand" src="img/mylogo.png">
        </a>
      </div>
      <ul class="nav navbar-nav">
        <li ><a href="homeclient.php">Home</a></li>
        <li><a href="nous.php">Qui Sommes Nous?</a></li>
        <li><a href="nosvehiculeclient.php">Nos Vehicules</a></li>
        <li class="active"><a href="mesreservations.php">Mes reservations</a></li>
        <li><a href="#">Contactez-Nous</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><h3>client: <?= $client?>         </h3></li>

        <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>

      </ul>
    </div>
  </nav>

  <div class="container-fluid">
      <div class="panel panel-default">
    <!-- Default panel contents -->
    <div class="panel-heading">La liste des reservations du client <strong><?php echo $client ?></strong></div>
    <div class="panel-body">

    </div>


    <!-- Table -->
    <table class="table">
      <thead>
       <tr>
         <th>idLocation</th>
         <th>idVoiture</th>
         <th>Duree</th>
         <th>Date</th>
         <th>Etat</th>
       </tr>

         <?php

          include("adminfile/connexion.php");
          $sql = "SELECT *  FROM location WHERE client='$client'";
          $result = $conn->query($sql);
          if ($result->num_rows > 0) {
             // output data of each row
             while($row = $result->fetch_assoc()) {
               echo "<tr><td>".$row["idlocation"]."</td><td>".$row["idvoiture"]."</td><td> ".$row["duree"]."</td><td>".$row["datelocation"]." </td><td> ".$row["Etat"]."</td></tr>" ;
             }
         } else {
             echo "0 Reservations";
         }
         $conn->close();


         ?>




     </thead>
    </table>

    </div>
  </div>










</body>
</html>
