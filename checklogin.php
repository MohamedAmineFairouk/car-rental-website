
<?php
/* User login process, checks if user exists and password is correct */

// Escape email to protect against SQL injections
$email = $mysqli->escape_string($_POST['email']);
$result = $mysqli->query("SELECT * FROM client WHERE email='$email'");

if ( $result->num_rows == 0 ){ // User doesn't exist
    echo "L'utilisateur avec cet email n'existe pas!";

}
else { // User exists
    $user = $result->fetch_assoc();
    if ( $_POST['password'] == $user['password'] ) {
        
        $_SESSION['email'] = $user['email'];
        $_SESSION['first_name'] = $user['Nom'];
        $_SESSION['last_name'] = $user['Prenom'];
        $_SESSION['birth_date'] = $user['dateob'];
        
        // This is how we'll know the user is logged in
        $_SESSION['logged_in'] = true;

        header("location: homeclient.php");
    }
    else {
        echo password_verify($_POST['password'], $user['password']);
        echo "Vous avez entré un mot de passe incorrect, réessayez!";
    }
}