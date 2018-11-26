<?php
include("connexion.php");

$target_dir = "C:\wamp\www\php\upload";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;

$matricule = $_POST["matricule"] ;
$modele = $_POST["modele"] ;
$marque = $_POST["marque"];
$prix = $_POST["prix"] ;

$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
if(isset($_POST["submit"])  && isset($_FILES['file'])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);

    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}

// Check file size
if ($_FILES["fileToUpload"]["size"] > 2000000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {


        $img_blob = base64_encode(file_get_contents ($_FILES['fileToUpload']['tmp_name']));
        $req = "INSERT INTO voiture ( Matricule, Modele, Marque, Prix, image) VALUES('$matricule','$modele','$marque','$prix','$img_blob')";
        if ($conn->query($req) === TRUE) {
                header("Location:voitures.php");
        } else {
           echo "Error: " . $req . "<br>" . $conn->error;
            $conn->close();
        }
}



?>
