<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "locationcars";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
if(count($_POST)>0) {


  $email = $_POST["email"] ;
  $password = $_POST["password"] ;
  $repassword = $_POST["retypepassword"] ;
  $Nom = $_POST["nom"] ;
  $Prenom =$_POST["prenom"] ;
  $dateob =$_POST["mydate"] ;


    if ($password != $repassword) {

     include( 'signup.html');

  }else{
      $sql = "INSERT INTO client (Nom, Prenom, email, password, dateob) VALUES ('$Nom', '$Prenom', '$email','$password','$dateob')";

if ($conn->query($sql) === TRUE) {
    header("location:wait.html");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
}
}
$conn->close();
?>
