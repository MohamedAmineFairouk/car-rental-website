<?php
    include("connexion.php");
    $idtodelete = $_POST["idtodelete"] ;
    $sql = "DELETE FROM client WHERE id=$idtodelete ";

    if ($conn->query($sql) === TRUE) {
        header("location: clients.php");
      } else {
        echo "Error deleting record: " . $conn->error;
        }

$conn->close();

 ?>
