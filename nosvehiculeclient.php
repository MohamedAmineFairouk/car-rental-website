<?php session_start();

$iduser = $_SESSION['first_name']." ".$_SESSION["last_name"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Nos vehicules</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
  <link rel="stylesheet"  href="https://fonts.googleapis.com/css?family=Tangerine">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  <link rel="stylesheet" type="text/css" href="css/nosvehicules.css">


  <nav class="navbar navbar-default mynav">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand navimg" href="homeclient.php">
          <img alt="Brand" src="img/mylogo.png">
        </a>
      </div>
      <ul class="nav navbar-nav">
        <li ><a href="homeclient.php">Home</a></li>
        <li><a href="nous.php">Qui Sommes Nous?</a></li>
        <li class="active"><a href="nosvehiculeclient.php">Nos Vehicules</a></li>
        <li><a href="mesreservations.php">Mes reservations</a></li>
        <li><a href="#">Contactez-Nous</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
      </ul>

    </div>
  </nav>

</head>
<body>



  <div class="bg">
                    <h2 class="myh2"><strong>Nos Vehicules</strong></h2>
                    <h1 class="myh1">Nous proposons des locations à court et à long terme</h1></div>
      <div class="clearfix"></div>

  <section id="secondary-banner" class="dynamic-image-3"><!--for other images just change the class name of this section block like, class="dynamic-image-2" and add css for the changed class-->
      <div class="container">
          <div class="row">

              <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                  <ul class="breadcrumb">
                      <li><a href="index.php">Accueil</a></li>
                      <li>Nos vehicules</li>
                  </ul>
              </div>
          </div>
      </div>
  </section>
  <!--secondary-banner ends-->
  <div class="message-shadow"></div>
  <div class="clearfix"></div>





  <div class="container">
          <div class="inner-page portfolio-container row">

              <div class="portfolioContainer portfolio_2" id="MixItUp5747DA">
                <div class="col-md-6 suv hardtop mix margin-bottom-50" style="display: inline-block;">
                      <div class="box clearfix" id="nos_vhc">
     <img style="" src="img/res1.jpg" class="image" alt="Location Volkswagen jetta  Automatique Rabat">                   <div class="padding-top-25 padding-bottom-10">
                              <h2>Volkswagen 2010 <a style="float:right;background-color:#fd0f19;padding:5px 10px 5px 10px;margin-right:5px;font-size:13px" href="#">Reserver</a>
                                <a style="float:right;background-color:#000;padding:5px 10px 5px 10px;margin-right:5px;font-size:13px" href="#">Plus d'Info</a></h2>
                              <span>4000 Dh/Jour</span>
                          </div>
                      </div>
                  </div>

                   <div class="col-md-6 suv hardtop mix margin-bottom-50" style="display: inline-block;">
                      <div class="box clearfix" id="nos_vhc">
     <img style="" src="img/res2.jpg" class="image" alt="Location Peugeot 301  Manuelle Rabat">                   <div class="padding-top-25 padding-bottom-10">
                              <h2>Peugeot 2012 <a style="float:right;background-color:#fd0f19;padding:5px 10px 5px 10px;margin-right:5px;font-size:13px" href="#">Reserver</a>
                                <a style="float:right;background-color:#000;padding:5px 10px 5px 10px;margin-right:5px;font-size:13px" href="#">Plus d'Info</a></h2>
                              <span>4000 Dh/Jour</span>
                          </div>
                      </div>
                  </div>

                   <div class="col-md-6 suv hardtop mix margin-bottom-50" style="display: inline-block;">
                      <div class="box clearfix" id="nos_vhc">
     <img style="" src="img/res3.jpg" class="image" alt="Location Peugeot 208  Manuelle Rabat">                   <div class="padding-top-25 padding-bottom-10">
                              <h2>Peugeot 2010<a style="float:right;background-color:#fd0f19;padding:5px 10px 5px 10px;margin-right:5px;font-size:13px" href="#">Reserver</a>
                                <a style="float:right;background-color:#000;padding:5px 10px 5px 10px;margin-right:5px;font-size:13px" href="#">Plus d'Info</a></h2>
                              <span>4000 Dh/Jour</span>
                          </div>
                      </div>
                  </div>

                   <div class="col-md-6 suv hardtop mix margin-bottom-50" style="display: inline-block;">
                      <div class="box clearfix" id="nos_vhc">
     <img style="" src="img/res4.jpg" class="image" alt="Location Volkswagen touareg  Automatique Rabat">                   <div class="padding-top-25 padding-bottom-10">
                              <h2>Volkswagen 2018 <a style="float:right;background-color:#fd0f19;padding:5px 10px 5px 10px;margin-right:5px;font-size:13px" href="#">Reserver</a>
                                <a style="float:right;background-color:#000;padding:5px 10px 5px 10px;margin-right:5px;font-size:13px" href="#">Plus d'Info</a></h2>
                              <span>3000 Dh/Jour</span>
                          </div>
                      </div>
                  </div>

                   <div class="col-md-6 suv hardtop mix margin-bottom-50" style="display: inline-block;">
                      <div class="box clearfix" id="nos_vhc">
     <img style="" src="img/res5.jpg" class="image" alt="Location Hyundai accent   Automatique Rabat">                   <div class="padding-top-25 padding-bottom-10">
                              <h2>Hyundai accent 2014 <a style="float:right;background-color:#fd0f19;padding:5px 10px 5px 10px;margin-right:5px;font-size:13px" href="#">Reserver</a>
                                <a style="float:right;background-color:#000;padding:5px 10px 5px 10px;margin-right:5px;font-size:13px" href="#">Plus d'Info</a></h2>
                              <span>2000 Dh/Jour</span>
                          </div>
                      </div>
                  </div>

                   <div class="col-md-6 suv hardtop mix margin-bottom-50" style="display: inline-block;">
                      <div class="box clearfix" id="nos_vhc">
     <img style="" src="img/res6.jpg" class="image" alt="Location Mercedes Benz E220  Automatique Rabat">                   <div class="padding-top-25 padding-bottom-10">
                              <h2>Mercedes Benz 2015 <a style="float:right;background-color:#fd0f19;padding:5px 10px 5px 10px;margin-right:5px;font-size:13px" href="#">Reserver</a>
                                <a style="float:right;background-color:#000;padding:5px 10px 5px 10px;margin-right:5px;font-size:13px" href="#">Plus d'Info</a></h2>
                              <span>4000 Dh/Jour</span>
                          </div>
                      </div>
                  </div>

                   <div class="col-md-6 suv hardtop mix margin-bottom-50" style="display: inline-block;">
                      <div class="box clearfix" id="nos_vhc">
     <img style="" src="img/res7.jpg" class="image" alt="Location Range rover Evoque   Automatique Rabat">                   <div class="padding-top-25 padding-bottom-10">
                              <h2>Range rover 2018 <a style="float:right;background-color:#fd0f19;padding:5px 10px 5px 10px;margin-right:5px;font-size:13px" href="#">Reserver</a>
                                <a style="float:right;background-color:#000;padding:5px 10px 5px 10px;margin-right:5px;font-size:13px" href="#">Plus d'Info</a></h2>
                              <span>6000 Dh/Jour</span>
                          </div>
                      </div>
                  </div>

                   <div class="col-md-6 suv hardtop mix margin-bottom-50" style="display: inline-block;">
                      <div class="box clearfix" id="nos_vhc">
     <img style="" src="img/res8.jpg" class="image" alt="Location Dacia duster  Manuelle Rabat">                   <div class="padding-top-25 padding-bottom-10">
                              <h2>Dacia duster 2016 <a style="float:right;background-color:#fd0f19;padding:5px 10px 5px 10px;margin-right:5px;font-size:13px" href="#">Reserver</a>
                                <a style="float:right;background-color:#000;padding:5px 10px 5px 10px;margin-right:5px;font-size:13px" href="#">Plus d'Info</a></h2>
                              <span>1000 Dh/Jour</span>
                          </div>
                      </div>
                  </div>

                   <div class="col-md-6 suv hardtop mix margin-bottom-50" style="display: inline-block;">
                      <div class="box clearfix" id="nos_vhc">
     <img style="" src="img/res9.jpg" class="image" alt="Location Golf 7  Automatique Rabat">                   <div class="padding-top-25 padding-bottom-10">
                              <h2>Golf 7 2018 <a style="float:right;background-color:#fd0f19;padding:5px 10px 5px 10px;margin-right:5px;font-size:13px" href="#">Reserver</a>
                                <a style="float:right;background-color:#000;padding:5px 10px 5px 10px;margin-right:5px;font-size:13px" href="#">Plus d'Info</a></h2>
                              <span>1500 Dh/Jour</span>
                          </div>
                      </div>
                  </div>

                   <div class="col-md-6 suv hardtop mix margin-bottom-50" style="display: inline-block;">
                      <div class="box clearfix" id="nos_vhc">
     <img style="" src="img/res10.png" class="image" alt="Location Fiat 500  Manuelle Rabat">                   <div class="padding-top-25 padding-bottom-10">
                              <h2>Fiat 500 2015 <a style="float:right;background-color:#fd0f19;padding:5px 10px 5px 10px;margin-right:5px;font-size:13px" href="#">Reserver</a>
                                <a style="float:right;background-color:#000;padding:5px 10px 5px 10px;margin-right:5px;font-size:13px" href="#">Plus d'Info</a></h2>
                              <span>1500 Dh/Jour</span>
                          </div>
                      </div>
                  </div>

                   <div class="col-md-6 suv hardtop mix margin-bottom-50" style="display: inline-block;">
                      <div class="box clearfix" id="nos_vhc">
     <img style="" src="img/res11.png" class="image" alt="Location Fiat 500  Automatique Rabat">                   <div class="padding-top-25 padding-bottom-10">
                              <h2>Fiat 500 2015 <a style="float:right;background-color:#fd0f19;padding:5px 10px 5px 10px;margin-right:5px;font-size:13px" href="#">Reserver</a>
                                <a style="float:right;background-color:#000;padding:5px 10px 5px 10px;margin-right:5px;font-size:13px" href="#">Plus d'Info</a></h2>
                              <span>500 Dh/Jour</span>
                          </div>
                      </div>
                  </div>
<div class="col-md-6 suv hardtop mix margin-bottom-50" style="display: inline-block;">
                      <div class="box clearfix" id="nos_vhc">
     <img style="" src="img/res12.png" class="image" alt="Location Hyundai accent  Manuelle Rabat">                   <div class="padding-top-25 padding-bottom-10">
                              <h2>Hyundai accent 2018 <a style="float:right;background-color:#fd0f19;padding:5px 10px 5px 10px;margin-right:5px;font-size:13px" href="#">Reserver</a>
                                <a style="float:right;background-color:#000;padding:5px 10px 5px 10px;margin-right:5px;font-size:13px" href="#">Plus d'Info</a></h2>
                              <span>900 Dh/Jour</span>
                          </div>
                      </div>
                  </div>
                <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "locationcars";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
        $msg= "memdpo" ;
        $sql = "SELECT *  FROM voiture";
        $result = $conn->query($sql);   ///   src='data:image;base64,'".$row['image'] echo 'src="data:image;base64, '.$row['image']   $row["Prix"]
        if ($result->num_rows > 0) {

           // output data of each row
           while($row = $result->fetch_assoc()) {
                      $myidvoi = $row['IdVoiture'];?>

             <div class='col-md-6 suv hardtop mix margin-bottom-50' style='display: inline-block;'>
             <div class='box clearfix' id='nos_vhc'>"
            <img style='' src='data:image;base64, <?php echo $row["image"];?>' class='image' alt='Location Peugeot 208  Manuelle Rabat'> <div class='padding-top-25 padding-bottom-10'>
             <h2><?php echo $row["Marque"];?>    <?php $row["Modele"];?>
              <a style='float:right;background-color:#fd0f19;padding:5px 10px 5px 10px;margin-right:5px;font-size:13px' href='ajouterLocation.php<?php echo '?IdVoiture='.$myidvoi; ?>'>Reserver</a>
            <a style='float:right;background-color:#000;padding:5px 10px 5px 10px;margin-right:5px;font-size:13px' href='infopage.php<?php echo '?IdVoiture='.$myidvoi; ?>'>Plus d'Info</a></h2>
            <span><?php echo $row['Prix'];?>   DH</span>
           </div>
          </div>
          </div>
      <?php     }
       } else {
           echo "0 results";
       }
       $conn->close();


       ?>
              </div>
              <div class="clearfix"></div>

          </div>
      </div>

      <footer class="design_2">
      <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 padding-left-none md-padding-left-none sm-padding-left-15 xs-padding-left-15">
                <h4>À propos de nous</h4>
                <p><img style="float:left;margin-right:2px" src="img/mylogo.png"><strong>
                <span class="alternate-font" style="color:#fff">Smart Location</span>  </strong>  est une société de location voiture,
                    bien gérés éprouvée qui fonctionne sur le marché Marocain depuis 2015, Notre offre s’adresse aux particuliers qui ont l’intention de louer une voiture pour les besoins personnels. </p>

          </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <h4>Navigation</h4>
               <ul class="quick_links">
                <li><a href="home.html">Accueil</a></li>
                <li><a href="nous.php">Qui sommes nous</a></li>
                 <li><a href="#">Nos Services</a></li>
                  <li><a href="#">Nos Vehicules</a></li>
                  </ul>
                 <ul class="quick_links">
                   <li><a href="#">Reservation</a></li>
                    <li><a href="#">Termes et Conditions</a></li>
                     <li><a href="#">Contactez-nous</a></li>

                     <li><a href="#" target="_blank">Location voiture marrakech</a></li>
               </ul>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 padding-right-none md-padding-right-none sm-padding-right-15 xs-padding-right-15">
                <h4>Contactez-nous</h4>
                <div style=" position:absolute; margin-top:-40px; margin-left:170px" class="col-lg-8 col-md-8 col-sm-6 col-xs-12">
                <ul class="social ">
                    <li style="padding:0"><a class="sc-1" href="https://web.facebook.com//" target="_blank"></a></li>
                    <li style="padding:0"><a class="sc-2" href="https://twitter.com/" target="_blank"></a></li>
                    <li style="padding:0"><a class="sc-3" href="https://plus.google.com/" target="_blank"></a></li>

                </ul>
            </div>
                <div class="footer-contact">




      <ul>
                        <li><i class="fa fa-map-marker"></i> <strong>Address:</strong> Imm N 11 Appt N 11 Rue Melouya, Agdal  - Rabat </li>
                        <li><i class="fa fa-phone"></i> <strong>Téléphone:</strong>  +212 6 11 11 11 11</li>



                        <li><i class="fa fa-envelope-o"></i> <strong>Email:</strong><a href="#">carlocation@gmail.com
      </a></li>
                    </ul>




                    <!--<i class="fa fa-road back_icon"></i>-->
                </div>
            </div>

      </footer>


      <div class="clearfix"></div>

      <section class="copyright-wrap padding-bottom-10 ">
      <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">

                <p>Copyright © 2018 Smart Carlocation.  All rights reserved.</p>
            </div>
            <div style="col-lg-4 col-md-4 col-sm-6 col-xs-12">

                <p class="center">Réalisé par : El-badri & Fairouk</p>
            </div>


        </div>
      </div>
      </section>





</body>
</html>
