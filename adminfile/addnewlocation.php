<?php

  include("connexion.php") ;
  $client = $_POST["client"] ;
  $duree = $_POST["duree"] ;
  $date = $_POST["datedelocation"] ;



   $sql = "INSERT INTO location (client, duree, datelocation, Etat) VALUES ('$client', '$duree', '$date','Valide')";

  if (mysqli_query($conn, $sql)) {
      header('Location: location.php');
      exit();

  } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }

  mysqli_close($conn);




 ?>
