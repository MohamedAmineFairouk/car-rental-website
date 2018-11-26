<?php
/* Displays user information and some useful messages */
session_start();

// Check if user is logged in using the session variable
if ( $_SESSION['logged_in'] != 1 ) {
  echo "Vous devez vous connecter avant de voir votre page de profil!";
  header("location:index.html");
}
else {
    // Makes it easier to read
    $first_name = $_SESSION['first_name'];
    $last_name = $_SESSION['last_name'];
    $email = $_SESSION['email'];
    $date = $_SESSION['birth_date'];

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Car Location</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
  <link rel="stylesheet"  href="https://fonts.googleapis.com/css?family=Tangerine">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  <link rel="stylesheet" type="text/css" href="css/style.css">

</head>
<body>
  <nav class="navbar navbar-default mynav">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand navimg" href="index.php">
          <img alt="Brand" src="img/mylogo.png">
        </a>
      </div>
      <ul class="nav navbar-nav">
        <li class="active"><a href="homeclient.php">Home</a></li>
        <li><a href="nous.php">Qui Sommes Nous?</a></li>
        <li><a href="nosvehiculeclient.php">Nos Vehicules</a></li>
        <li><a href="mesreservations.php">Mes reservations</a></li>
        <li><a href="#">Contactez-Nous</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><h3>client: <?= $first_name.' '.$last_name ?>         </h3></li>

        <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>

      </ul>
    </div>
  </nav>

  <div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">

          <div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
    <li data-target="#myCarousel" data-slide-to="3"></li>
    <li data-target="#myCarousel" data-slide-to="4"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
      <img src="img/1.jpg" alt="Los Angeles">
    </div>

    <div class="item">
      <img src="img/2.jpg" alt="Chicago">
    </div>
    <div class="item">
      <img src="img/5.jpg" alt="Chicago">
    </div>

    <div class="item">
      <img src="img/3.jpg" alt="Chicago">
    </div>
    <div class="item">
      <img src="img/4.jpg" alt="New York">
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
      </div>
    </div>
  </div>
  <p></p>
<section class="message-wrap">
  <div class="container-fluid">

              <h3 id="h2m" class="col-xs-12 col-sm-6 col-md-8">Profitez de nos offres exclusives, Ne tarder pas et réserver tranquille!</h3>
              <div  class="col-xs-6 col-md-4"><a id="mybtn" href="#" class="btn btn-lg btn-primary pull-right">Contactez &amp; Reserver</a> </div>
          </div>

      <div class="message-shadow"></div>
</section>
<p><!--this part is for Containers and colomuns--></p>
<div class="container-fluid">
<div class="inner-page homepage margin-bottom-none">


               <section class="car-block-wrap padding-bottom-40">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 margin-bottom-none">
                            <div class="flip margin-bottom-30">
                                <div>
                                    <div class="face front"><img class="img-responsive car1" src="img/car1.jpg" alt=""></div>

                                </div>
                            </div>
                            <h4 class="h4dis"><a href="#">Nos services</a></h4>
                            <p class="margin-bottom-none">Profitez de nos services de qualité, Pour vos location courte ou longue durée,
                                on vous propose un large choix des voitures récentes à prix préferentiel...</p>

                                <a class="savoir_btn" href="#">En savoir plus</a>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 margin-bottom-none">
                            <div class="flip  margin-bottom-30">
                                <div>
                                    <div class="face front"><img class="img-responsive" src="img/nos-vehicules.jpg" alt=""></div>

                                </div>
                            </div>
                            <h4 class="h4dis"><a href="#">Nos véhicules à Rabat</a></h4>
                            <p class="margin-bottom-none">Chez <strong style="color:#fd0f19">smart Location</strong>, nous vous proposons un large choix de véhicules pour la location voiture ,
                                Pour pouvoir répondre à l'ensemble de vos besoins.</p>
                                <a class="savoir_btn" href="#">En savoir plus</a>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 margin-bottom-none">
                            <div class="flip margin-bottom-30">
                                <div>
                                    <div class="face front"><img class="img-responsive" src="img/car3.jpg" alt=""></div>

                                </div>
                            </div>
                            <h4 class="h4dis"><a href="#" target="_blank">Location voiture marrakech</a></h4>
                            <p class="margin-bottom-none"><strong style="color:#fd0f19"></strong>Pour vos locations de voiture Marrakech, Smart locations vous proposons plusieurs produits et services adaptés à vos besoins. </p>
                                 <a class="savoir_btn" href="#" target="_blank">En savoir plus</a>
                        </div>
                    </div>
                </div>
            </section>

</div>

<p> <!-- smart Location--></p>
             <section class="welcome-wrap padding-top-30 sm-horizontal-15">
               <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 welcome padding-left-none padding-bottom-40 scroll_effect fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">
                        <h4 class="margin-bottom-25 margin-top-none"><strong>Agence de Location voiture Rabat : smart Location</strong></h4>



<p><span class="alternate-font">smart Location</span>   est une société de location voiture, bien gérés éprouvée qui fonctionne sur le marché Marocain depuis 2015.<br>Notre offre s’adresse aux particuliers qui ont l’intention de louer une voiture pour les besoins personnels, ainsi que pour les entreprises qui trouvent louer une voiture une solution financièrement parfaite comme une alternative à l’achat d’une.<br>Nous proposons des locations à&nbsp;<strong>court et à long terme
<a style="color: #fd0f19;" href="nous.php">Lire la suite...</a>

</strong></p><strong>

                    </strong></div><strong>
                    <!--welcome ends-->
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 padding-right-none sm-padding-left-none md-padding-left-15 xs-padding-left-none padding-bottom-40 scroll_effect fadeInUp animated" data-wow-delay=".2s" style="z-index: 100; visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                        <h4 class="margin-bottom-25 margin-top-none">&nbsp;</h4>
                        <img src="http://www.locationvoituresmaroc.ma/images/presentation.jpg">
                    </div>
                    <!--invetory ends-->
                </strong></div><strong>

                <div class="recent-vehicles-wrap margin-top-30 sm-padding-left-none padding-bottom-40">
                    <div class="row">
                        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-12 recent-vehicles padding-left-none">
                            <h5 class="margin-top-none nosvhs">Nos Vehicules</h5>
                            <p>smart Location location de voitures vous propose une large gamme de véhicules de location.
                                  </p>
                            <div class="arrow3 clearfix margin-top-15 xs-margin-bottom-25" id="slideControls3"><span class="glyphicon glyphicon-chevron-left">
                            <a class="bx-prev" href=""></a></span><span class="glyphicon glyphicon-chevron-right" data-slide="prev"><a class="bx-next" href=""></a></span></div>


                        </div>
                        <div class="col-md-10 col-sm-8 padding-right-none xs-padding-left-none">
                          <div class="bx-wrapper" style="max-width: 960px;"><div class="bx-viewport" aria-live="polite" style="width: 100%; overflow: hidden; position: relative; height: 179px;"><div class="carasouel-slider3" style="width: 14215%; position: relative; transition-duration: 0s; transform: translate3d(0px, 0px, 0px);">

<div class="slide" aria-hidden="false" style="float: left; list-style: none; position: relative; margin-right: 30px; width: 465px;">
<div class="car-block">
    <div class="img-flex">
    <!-- <a href="Detail.php?_task=detail&id=17"></a> -->
    <a href="http://locationvoituresmaroc.ma/vehicule/location-voiture/Volkswagen-jetta-Automatique">
    <span class="align-center"><i class="fa fa-3x fa-plus-square-o"></i></span>
    </a>
   <img style="width:100%" src="img/a.jpg" class="img-responsive">    </div>
    <div class="car-block-bottom">
        <h6><strong>Volkswagen jetta</strong> - Diesel</h6>
        <h6><strong>Model : </strong>  Berline</h6>

    </div>
</div>
</div>

<div class="slide" aria-hidden="true" style="float: left; list-style: none; position: relative; margin-right: 30px; width: 465px;">
<div class="car-block">
    <div class="img-flex">
    <!-- <a href="Detail.php?_task=detail&id=16"></a> -->
    <a href="http://locationvoituresmaroc.ma/vehicule/location-voiture/Peugeot-301-Manuelle">
    <span class="align-center"><i class="fa fa-3x fa-plus-square-o"></i></span>
    </a>
   <img style="width:100%" src="img/b.jpg    " class="img-responsive">    </div>
    <div class="car-block-bottom">
        <h6><strong>Peugeot 301</strong> - Diesel</h6>
        <h6><strong>Model : </strong>  Berline</h6>

    </div>
</div>
</div>

<div class="slide" aria-hidden="true" style="float: left; list-style: none; position: relative; margin-right: 30px; width: 465px;">
<div class="car-block">
    <div class="img-flex">
    <!-- <a href="Detail.php?_task=detail&id=15"></a> -->
    <a href="http://locationvoituresmaroc.ma/vehicule/location-voiture/Peugeot-208-Manuelle">
    <span class="align-center"><i class="fa fa-3x fa-plus-square-o"></i></span>
    </a>
   <img style="width:100%" src="img/c.jpg     " class="img-responsive">    </div>
    <div class="car-block-bottom">
        <h6><strong>Peugeot 208</strong> - Diesel</h6>
        <h6><strong>Model : </strong>  Berline</h6>

    </div>
</div>
</div>

<div class="slide" aria-hidden="true" style="float: left; list-style: none; position: relative; margin-right: 30px; width: 465px;">
<div class="car-block">
    <div class="img-flex">
    <!-- <a href="Detail.php?_task=detail&id=14"></a> -->
    <a href="http://locationvoituresmaroc.ma/vehicule/location-voiture/Volkswagen-touareg-Automatique">
    <span class="align-center"><i class="fa fa-3x fa-plus-square-o"></i></span>
    </a>
   <img style="width:100%" src="img/d.jpg    " class="img-responsive">    </div>
    <div class="car-block-bottom">
        <h6><strong>Volkswagen touareg</strong> - Diesel</h6>
        <h6><strong>Model : </strong>  4x4</h6>

    </div>
</div>
</div>

<div class="slide" aria-hidden="true" style="float: left; list-style: none; position: relative; margin-right: 30px; width: 465px;">
<div class="car-block">
    <div class="img-flex">
    <!-- <a href="Detail.php?_task=detail&id=13"></a> -->
    <a href="http://locationvoituresmaroc.ma/vehicule/location-voiture/Hyundai-accent-Automatique">
    <span class="align-center"><i class="fa fa-3x fa-plus-square-o"></i></span>
    </a>
   <img style="width:100%" src="img/e.jpg    " class="img-responsive">    </div>
    <div class="car-block-bottom">
        <h6><strong>Hyundai accent </strong> - Diesel</h6>
        <h6><strong>Model : </strong>  Berline</h6>

    </div>
</div>
</div>

<div class="slide" aria-hidden="true" style="float: left; list-style: none; position: relative; margin-right: 30px; width: 465px;">
<div class="car-block">
    <div class="img-flex">
    <!-- <a href="Detail.php?_task=detail&id=12"></a> -->
    <a href="#">
    <span class="align-center"><i class="fa fa-3x fa-plus-square-o"></i></span>
    </a>
   <img style="width:100%" src="img/f.jpg    " class="img-responsive">    </div>
    <div class="car-block-bottom">
        <h6><strong>Mercedes Benz E220</strong> - Diesel</h6>
        <h6><strong>Model : </strong>  Limousine</h6>

    </div>
</div>
</div>


                          </div></div><div class="bx-controls"></div></div>
                        </div>
                    </div>
                </div>

            </strong></section><strong>

        </strong></div>

<!-- footer -->
      <footer class="design_2">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 padding-left-none md-padding-left-none sm-padding-left-15 xs-padding-left-15">
                <h4>À propos de nous</h4>
                <p><img style="float:left;margin-right:2px" src="img/mylogo.png"><strong>
                <span class="alternate-font" style="color:#fff">smart Location</span>  </strong>  est une société de location voiture,
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

                <p class="center">Réalisé par : El-badri & Fairouk </p>
            </div>


        </div>
    </div>
</section>


      <!--/.Footer-->
        </div>
  </div>





</body>
</html>
