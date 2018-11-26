<?php
    include("connexion.php");
    $idtodelete = $_POST["idtodelete"] ;
    $sql = "DELETE FROM voiture WHERE IdVoiture=$idtodelete ";

    if ($conn->query($sql) === TRUE) {
        header("location: voitures.php");
      } else {
        echo "Error deleting record: " . $conn->error;
        }

$conn->close();

 ?>
