<?php session_start(); ?>
<html lang="en">
<head>
  <title>Qui sommes Nous</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
  <link rel="stylesheet"  href="https://fonts.googleapis.com/css?family=Tangerine">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  <link rel="stylesheet" type="text/css" href="css/nous.css">


  <nav class="navbar navbar-default mynav">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand navimg" href="index.php">
          <img alt="Brand" src="img/mylogo.png">
        </a>
      </div>
      <ul class="nav navbar-nav">
        <?php


        if ( $_SESSION['logged_in'] != 1 ) {
        echo '<li><a href="index.php">Home</a></li>';}
        else
          {echo '<li><a href="homeclient.php">Home</a></li>';}?>
        <li class="active"><a href="nous.php">Qui Sommes Nous?</a></li>
        <?php


        if ( $_SESSION['logged_in'] != 1 ) {
        echo '<li><a href="nosvehicule.php">Nos Vehicules</a></li>';}
        else
          {echo '<li><a href="nosvehiculeclient.php">Nos Vehicules</a></li>';
          echo '<li><a href="mesreservations.php">Mes reservations</a></li>' ;}?>
        <li><a href="#">Contactez-Nous</a></li>
      </ul>

      <ul class="nav navbar-nav navbar-right">
        <?php


        if ( $_SESSION['logged_in'] != 1 ) {

        echo '<li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>' ;
        echo '<li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>';

          }else{
            echo '<li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>' ;

            }
            ?>
      </ul>
    </div>
  </nav>

</head>
<body>

  <div class="bg">
                    <h2>Qui sommes nous</h2>
                    <h1>Smart Location est une société de location voiture</h1></div>
      <div class="clearfix"></div>

  <section id="secondary-banner" class="dynamic-image-3"><!--for other images just change the class name of this section block like, class="dynamic-image-2" and add css for the changed class-->
      <div class="container">
          <div class="row">

              <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                  <ul class="breadcrumb">
                      <li><a href="index.php">Accueil</a></li>
                      <li>Qui sommes nouss</li>
                  </ul>
              </div>
          </div>
      </div>
  </section>
  <!--secondary-banner ends-->
  <div class="message-shadow"></div>
  <div class="clearfix"></div>

      <div class="container">
          <div class="inner-page about-us row">
              <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12 padding-left-none padding-bottom-40 xs-padding-left-none xs-padding-right-none">
  <h3 class="margin-bottom-25 border">Qui Sommes Nous</h3>
  <p>
  <p><span class="alternate-font">Smart Location</span>   est une soci&eacute;t&eacute; de location voiture, bien g&eacute;r&eacute;s &eacute;prouv&eacute;e qui fonctionne sur le march&eacute; Marocain depuis 2015.<br />Notre offre s&rsquo;adresse aux particuliers qui ont l&rsquo;intention de louer une voiture pour les besoins personnels, ainsi que pour les entreprises qui trouvent louer une voiture une solution financi&egrave;rement parfaite comme une alternative &agrave; l&rsquo;achat d&rsquo;une.<br />Nous proposons des locations &agrave;&nbsp;<strong>court et &agrave; long terme</strong>, attrayants locations&nbsp;<strong>week-end</strong>&nbsp;et des promotions saisonni&egrave;res. Les v&eacute;hicules dans notre offre sont des voitures particuli&egrave;res neuves qui tombent dans plusieurs groupes de prix.<strong>&nbsp;Les prix sont bas&eacute;s en principe sur la classe de la voiture, les accessoires de voiture et l&rsquo;utilisation pr&eacute;vue.</strong></p>
                <!--
                <span class="alternate-font">Smart Location</span>  &nbsp;est une société de location voiture, bien gérés éprouvée qui fonctionne sur le marché Marocain depuis 2015.<br>

  Notre offre s’adresse aux particuliers qui ont l’intention de louer une voiture pour les besoins personnels, ainsi que pour les entreprises qui trouvent louer une voiture une solution financièrement parfait comme une alternative à l’achat d’une.<br> Nous proposons des locations à <strong>court et à long terme</strong>, attrayants locations <strong>week-end</strong> et des promotions saisonnières.
  Les véhicules dans notre offre sont des voitures particulières neuves qui tombent dans plusieurs groupes de prix.<strong> Les prix sont basés en principe sur la classe de la voiture, les accessoires de voiture et l’utilisation prévue.</strong>
  -->
  </p>

              </div>
              <div class="col-lg-4 col-md-4 col-sm-4 padding-right-none padding-bottom-40 xs-padding-left-none xs-padding-right-none">
                  <div class="right-container">
                      <h3 style="visibility:hidden" class="margin-bottom-25">Qui sommes nous</h3>
                      <div class="progressbar">

                         <img style="margin-bottom:10px" src="img/qui-sommes.jpg">

                      </div>
                  </div>
              </div>


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
