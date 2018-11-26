<?php
  include("connexion.php") ;

  $idlocation = $_GET["idlocation"] ;



  $sql = "UPDATE location
  SET Etat = 'Valide'
  WHERE idlocation = '$idlocation' ";



  if ($conn->query($sql) === TRUE) {
      header("location: location.php");
    } else {
      echo "Error editing record: " . $conn->error;
      }

  $conn->close();


 ?>
