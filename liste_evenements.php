<?php
include 'header.php';
?>

<body>

<?php
include 'navbar.php';
?>


<div class="container clearfix list_event">

    <div class="fancy-title title-border">
        <h3>EVENEMENTS</h3>
    </div>

    <a href="#" class="button button-small button-border button-rounded tright visible-xs" data-toggle="collapse" data-target="#collapseExample"
       aria-expanded="false" aria-controls="collapseExample">Filtres<i class="icon-circle-arrow-right"></i>
    </a>
    <div class="collapse" id="collapseExample">
        <div class="well">
            <form id="template-contactform " class="">

                <div class="col-md-2 col-sm-6 text-center">
                    <label>100% LAKLAK:</label>
                    <input class="bt-switch" type="checkbox" checked data-size="mini">
                </div>

                <div class="col-md-3 col-sm-6 pull-left text-center">
                    <button class="button button-small button-border button-rounded tright nomargin" type="submit" id="template-contactform-submit"
                            name="template-contactform-submit" value="submit">Filtrer
                    </button>
                </div>
            </form>
        </div>
    </div>

    <div class="panel panel-default hidden-xs">
        <div class="panel-body">
            <form id="template-contactform" class="">

                <div class="col-md-2 col-sm-6">
                    <label>100% LAKLAK:</label>
                    <input class="bt-switch" type="checkbox" checked data-size="mini">
                </div>

                <div class="col-md-3 col-sm-6 height-line pull-left">
                    <button class="button button-small button-border button-rounded tright nomargin" type="submit" id="template-contactform-submit"
                            name="template-contactform-submit" value="submit">Filtrer
                    </button>
                </div>
            </form>
        </div>
    </div>



    <div class="col-sm-6 col-md-3 thumbnail bottommargin">
        <div class="feature media-box">
            <div class="fbox-media">
                <div class="image_list_event" style="background-image:url('images/photoartistes/2015/jazzaauchellah.jpg')">
                    <img class="img_list_event" src="images/photoartistes/2015/jazzaauchellah.jpg" alt="jazzaauchellah"/>
                </div>
                <div class="i-overlay on-hover">
                    <a href="evenement.php"><span class="nom_list_event">jazzaauchellah</span>
                        <i class ="icon-line-plus"></i>
                    </a>
                </div>
            </div>
            <div class="fbox-desc">
                <img class="list_label_laklak" src="images/Laklak/logo.jpg" alt=""/>
            </div>
        </div>
    </div>

    <div class="col-sm-6 col-md-3 thumbnail bottommargin">
        <div class="feature media-box">
            <div class="fbox-media">
                <div class="image_list_event" style="background-image:url('images/photoartistes/2015/transahara.jpg')">
                    <img class="img_list_event" src="images/photoartistes/2015/transahara.jpg" alt="transahara"/>
                </div>
                <div class="i-overlay on-hover">
                    <a href="evenement.php"><span class="nom_list_event">transahara</span>
                        <i class ="icon-line-plus"></i>
                    </a>
                </div>
            </div>
            <div class="fbox-desc">
                <img class="list_label_laklak" src="images/Laklak/logo.jpg" alt=""/>
            </div>
        </div>
    </div>

    <div class="col-sm-6 col-md-3 thumbnail bottommargin">
        <div class="feature media-box">
            <div class="fbox-media">
                <div class="image_list_event" style="background-image:url('images/photoartistes/2016/jazzablanca.jpg')">
                    <img class="img_list_event" src="images/photoartistes/2016/jazzablanca.jpg" alt="jazzablanca"/>
                </div>
                <div class="i-overlay on-hover">
                    <a href="evenement.php"><span class="nom_list_event">jazzablanca</span>
                        <i class ="icon-line-plus"></i>
                    </a>
                </div>
            </div>
            <div class="fbox-desc">
                <img class="list_label_laklak" src="images/Laklak/logo.jpg" alt=""/>
            </div>
        </div>
    </div>

    <div class="col-sm-6 col-md-3 thumbnail bottommargin">
        <div class="feature media-box">
            <div class="fbox-media">
                <div class="image_list_event" style="background-image:url('images/photoartistes/2016/nuitelectroniquecasa.jpg')">
                    <img class="img_list_event" src="images/photoartistes/2016/nuitelectroniquecasa.jpg" alt="nuitelectroniquecasa"/>
                </div>
                <div class="i-overlay on-hover">
                    <a href="evenement.php"><span class="nom_list_event">nuitelectroniquecasa</span>
                        <i class ="icon-line-plus"></i>
                    </a>
                </div>
            </div>
            <div class="fbox-desc">
                <img class="list_label_laklak" src="" alt=""/>
            </div>
        </div>
    </div>

    <div class="col-sm-6 col-md-3 thumbnail bottommargin">
        <div class="feature media-box">
            <div class="fbox-media">
                <div class="image_list_event" style="background-image:url('images/photoartistes/2016/nuitcasa.jpg')">
                    <img class="img_list_event" src="images/photoartistes/2016/nuitcasa.jpg" alt="nuitcasa"/>
                </div>
                <div class="i-overlay on-hover">
                    <a href="evenement.php"><span class="nom_list_event">nuitcasa</span>
                        <i class ="icon-line-plus"></i>
                    </a>
                </div>
            </div>
            <div class="fbox-desc">
                <img class="list_label_laklak" src="" alt=""/>
            </div>
        </div>
    </div>

    <div class="col-sm-6 col-md-3 thumbnail bottommargin">
        <div class="feature media-box">
            <div class="fbox-media">
                <div class="image_list_event" style="background-image:url('images/photoartistes/2017/encore2.png')">
                    <img class="img_list_event" src="images/photoartistes/2017/encore2.png" alt="encore2"/>
                </div>
                <div class="i-overlay on-hover">
                    <a href="evenement.php"><span class="nom_list_event">encore2</span>
                        <i class ="icon-line-plus"></i>
                    </a>
                </div>
            </div>
            <div class="fbox-desc">
                <img class="list_label_laklak" src="" alt=""/>
            </div>
        </div>
    </div>





</div>

</div>

<!-- Footer -->

<?php
include ('footer.php');
?>

