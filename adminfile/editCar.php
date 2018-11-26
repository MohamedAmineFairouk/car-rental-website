<?php
    include("connexion.php");
    $idtoedit = $_POST["idtoedit"] ;
    $matriculetoedit = $_POST["matricule"] ;
    $modeletoedit = $_POST["modele"] ;
    $marquetoedit = $_POST["marque"] ;
    $prixtoedit = $_POST["prix"] ;

    //$sql = "UPDATE `client` SET client SET `Nom`='$nomtoedit', `Prenom` = '$prenomtoedit', `email`='$emailtoedit', `password`='$passwordtoedit' WHERE `client`.`id`=$idtoedit";
    $sql = "UPDATE voiture
    SET Matricule = '$matriculetoedit', Modele= '$modeletoedit', Marque='$marquetoedit', Prix='$prixtoedit'
    WHERE IdVoiture = '$idtoedit'";

    if ($conn->query($sql) === TRUE) {
        header("location: voitures.php");
      } else {
        echo "Error editing record: " . $conn->error;
        }

$conn->close();

 ?>
