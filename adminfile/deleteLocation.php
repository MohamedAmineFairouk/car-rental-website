<?php
    include("connexion.php");
    $idtodelete = $_POST["idtodelete"] ;
    $sql = "DELETE FROM location WHERE idlocation=$idtodelete ";

    if ($conn->query($sql) === TRUE) {
        header("location: location.php");
      } else {
        echo "Error deleting record: " . $conn->error;
        }

$conn->close();

 ?>
