<?php
    include("connexion.php");
    $idtoedit = $_POST["idtoedit"] ;
    $emailtoedit = $_POST["email"] ;
    $passwordtoedit = $_POST["password"] ;
    $nomtoedit = $_POST["nom"] ;
    $prenomtoedit =$_POST["prenom"] ;

    //$sql = "UPDATE `client` SET client SET `Nom`='$nomtoedit', `Prenom` = '$prenomtoedit', `email`='$emailtoedit', `password`='$passwordtoedit' WHERE `client`.`id`=$idtoedit";
    $sql = "UPDATE client
    SET Nom = '$nomtoedit', Prenom= '$prenomtoedit', password='$passwordtoedit', email='$emailtoedit'
    WHERE id = '$idtoedit'";

    if ($conn->query($sql) === TRUE) {
        header("location: clients.php");
      } else {
        echo "Error editing record: " . $conn->error;
        }

$conn->close();

 ?>
