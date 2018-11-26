<?php
  include("connexion.php") ;
  $idtoedit = $_POST["idtoedit"] ;
  $client = $_POST["client"] ;
  $duree = $_POST["duree"] ;
  $datelocation = $_POST["datelocation"] ;


    $sql = "UPDATE location
    SET client = '$client', duree= '$duree', datelocation='$datelocation'
    WHERE idlocation = '$idtoedit'";

    if ($conn->query($sql) === TRUE) {
        header("location: location.php");
      } else {
        echo "Error editing record: " . $conn->error;
        }

    $conn->close();



 ?>
