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
<footer id="footer" class="dark">

    <div class="container">

        <!-- Footer Widgets
        ============================================= -->
        <div class="footer-widgets-wrap clearfix">

            <div class="col_two_third">

                <div class="col_half">

                    <div class="widget clearfix">

                        <a href="#"><img src="images/logo-laklak-footerAlpha.png" alt="logo Laklak" class="footer-logo"></a>

                        <p>Société de production musicale.</br><strong>Professionnel</strong>, <strong>Créatif</strong> &amp; <strong>Moderne</strong>.</p>

                        <div style="background: url('images/world-map.png') no-repeat center center; background-size: 75%;">
                            <address>
                                <strong>Siège social:</strong><br>
                                <br>
                                Rabat, Maroc<br>
                            </address>
                            <abbr title="Phone Number"><strong>Téléphone:</strong></abbr> (91) 8547 632521<br>
                            <abbr title="Email Address"><strong>Email:</strong></abbr> laklak@laklak.com
                        </div>


                    </div>

                </div>

                <div class="col_one_third">

                    <div class="widget widget_links clearfix">

                        <h4>Liens</h4>

                        <ul>
                            <li><a href="#">Accueil</a></li>
                            <li><a href="#">Artistes</a></li>
                            <li><a href="#">Evènements</a></li>
                            <li><a href="#">Agenda</a></li>
                            <li><a href="#">Contact</a></li>

                        </ul>
                        <div class="widget clearfix" style="margin-bottom: -20px;">

                            <div class="row">

                                <div class="col-md-6 clearfix bottommargin-sm">

                                    <a href="https://www.instagram.com/laklakprod/" target="_blank" class="social-icon si-dark si-colored si-instagram nobottommargin" style="margin-right: 10px;">
                                        <i class="icon-instagram"></i>

                                    </a>
                                    <a href="#"><small style="display: block; margin-top: 3px;"><strong>Suivez-nous</strong><br>sur Instagram</small></a>
                                </div>
                                <div class="col-md-6 clearfix">
                                    <a href="https://twitter.com/Laklak_Prod?lang=fr" target="_blank" class="social-icon si-dark si-colored si-twitter nobottommargin" style="margin-right: 10px;">
                                        <i class="icon-twitter"></i>
                                    </a>
                                    <a href="#"><small style="display: block; margin-top: 5px;"><strong>Abonnez-vous</strong><br>à notre Twitter</small></a>
                                </div>
                                <br>
                                <div class="col-md-6 clearfix visible-xs">
                                    <a href="https://www.facebook.com/laklakproductions" target="_blank" class="social-icon si-dark si-colored si-facebook nobottommargin" style="margin-right: 10px;">
                                        <i class="icon-facebook"></i>
                                    </a>
                                    <a href="#"><small style="display: block; margin-top: 5px;"><strong>Aimez-nous</strong><br>sur notre Facebook</small></a>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div>
                        <br><a href="https://wildcodeschool.fr" target="_blank"> <img src="images/LogoNB/PNG/logo_small_nb_horizontal.resized.png" alt="logo Wild Code School"><br>Site conçu et développé par WCS</a>
                    </div>
                    <div>
                        <p>
                            <br><small>Mentions légales | Crédits | © Copyright</small>
                        </p>
                    </div>
                </div>

            </div>
            <div class="col_one_third col_last">

                <div class="widget clearfix hidden-xs">

                    <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Flaklakproductions&tabs=timeline&width=320&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=false&appId" width="340" height="500" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>

                </div>
            </div>
        </div><!-- .footer-widgets-wrap end -->
    </div>

</html>