<?php
  include('connexion.php');
  $email = $_POST["email"] ;
  $password = $_POST["password"] ;
  $Nom = $_POST["nom"] ;
  $Prenom =$_POST["prenom"] ;
  $dateob =$_POST["mydate"] ;


 $sql = "INSERT INTO client (Nom, Prenom, email, password, dateob) VALUES ('$Nom', '$Prenom', '$email','$password','$dateob')";

if (mysqli_query($conn, $sql)) {
    header('Location: clients.php');
    exit();

} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);


?>
