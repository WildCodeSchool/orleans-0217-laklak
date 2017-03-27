<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="author" content="SemiColonWeb" />

    <!-- Stylesheets
    ============================================= -->
    <link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="css/bootstrap.css" type="text/css" />
    <link rel="stylesheet" href="style.css" type="text/css" />
    <!--  <link rel="stylesheet" href="css/swiper.css" type="text/css" /> -->
      <link rel="stylesheet" href="css/dark.css" type="text/css" />
      <link rel="stylesheet" href="css/font-icons.css" type="text/css" />
      <link rel="stylesheet" href="css/animate.css" type="text/css" />
      <link rel="stylesheet" href="css/magnific-popup.css" type="text/css" />

      <link rel="stylesheet" href="css/responsive.css" type="text/css" />
      <meta name="viewport" content="width=device-width, initial-scale=1" />

      <link rel="stylesheet" href="css/custom.css" type="text/css" />

      <!-- Document Title
      ============================================= -->
    <title>Laklak - Contact</title>

</head>

<?php
include 'header.php';
?>
<!-- Slider
		============================================= -->
<!-- <section id="slider" class="slider-parallax full-screen slider-parallax-visible"> -->

<section id="slider" class="full-screen">

    <div class="col-xs-12 col-md-7 col-sm-6 full-screen center nopadding">
    </div>

    <div class="col-xs-12 col-md-5 col-sm-6 full-screen">
        <div class="vertical-middle subscribe-widget">
            <div class="col-padding">
                <div class="heading-block nobottomborder bottommargin-sm">
                    <h1>Contactez nous</h1>
                    <span>Artistes, Professionnels, Amateurs de musique</span>
                </div>


                <form id="slider-subscribe-form" action="contact.php" method="post" class="nobottommargin" novalidate="novalidate">

                    <div class="col_half">
                        <input class="sm-form-control required" name="widget-subscribe-form-fname" placeholder="Prenom" aria-required="true" type="text">
                    </div>

                    <div class="col_half col_last">
                        <input class="sm-form-control required" name="widget-subscribe-form-lname" placeholder="Nom" aria-required="true" type="text">
                    </div>

                    <div class="col_full">
                        <input class="sm-form-control required" name="widget-subscribe-form-email" placeholder="Email" aria-required="true" type="email">
                    </div>

                    <div class="clear"></div>

                    <div class="col_full">
                        <label for="template-contactform-message">Message <small>*</small></label>
                        <textarea class="required sm-form-control" id="template-contactform-message" name="template-contactform-message" rows="6" cols="30" aria-required="true"></textarea>
                    </div>

                    <div class="clear"></div>

                    <div class="col_half">
                        <select class="sm-form-control required" name="widget-subscribe-form-service">
                            <option value=""> Vous êtes </option>
                            <option value="Artiste">Un Artiste</option>
                            <option value="Professionnel">Un Professionnel</option>
                            <option value="Amateur">Un Amateur</option>
                        </select>
                    </div>

                    <div class="col_half col_last">
                        <button type="submit" class="btn btn-success button-3d button-rounded btn-block nomargin" value="submit"><i class="icon-email2"></i> Envoyez</button>
                    </div>



                </form>
            </div>
        </div>



    </div>

</section>

<!-- Footer
		============================================= -->
<?php
include ('footer.php');
?>

</html>