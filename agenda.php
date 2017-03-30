<?php
include 'header.php';
?>

<body>

<?php
include 'navbar.php';
?>
<div class="container agenda">

    <section class=" bothsidebar nobottommargin">

        <div class="fancy-title title-border">
            <h3>Upcoming Events</h3>
        </div>
        <a href="#" class="button button-small button-border button-rounded tright visible-xs" data-toggle="collapse" data-target="#collapseExample"
           aria-expanded="false" aria-controls="collapseExample">Filtres<i class="icon-circle-arrow-right"></i>
        </a>
        <div class="collapse" id="collapseExample">
            <div class="well">
                <form id="template-contactform " class="">
                    <div class="col-md-3 col-sm-6 text-center">
                        <label>Date:</label>
                        <select class="selectpicker" multiple title="Choose one of the following...">
                            <option>Mustard</option>
                            <option>Ketchup</option>
                            <option>Relish</option>
                        </select>
                    </div>
                    <div class="col-md-3 col-sm-6 text-center">
                        <label>Type:</label>
                        <select class="selectpicker" title="Choose one of the following...">
                            <option>Mustard</option>
                            <option>Ketchup</option>
                            <option>Relish</option>
                        </select>
                    </div>

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
                    <div class="col-md-3 col-sm-6">
                        <label>Date:</label>
                        <select class="selectpicker" multiple title="Choose one of the following...">
                            <option>Mustard</option>
                            <option>Ketchup</option>
                            <option>Relish</option>
                        </select>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <label>Type:</label>
                        <select class="selectpicker" title="Choose one of the following...">
                            <option>Mustard</option>
                            <option>Ketchup</option>
                            <option>Relish</option>
                        </select>
                    </div>

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

        <div id="posts" class="events small-thumbs">

            <div class="entry clearfix">
                <div class="entry-image ">
                    <a href="#">
                        <img src="images/events/thumbs/1.jpg" alt="Inventore voluptates velit totam ipsa tenetur">
                        <div class="entry-date">10<span>Apr</span></div>
                    </a>
                </div>
                <div class="entry-c">
                    <div class="entry-title">
                        <h2><a href="#">Inventore voluptates velit totam ipsa tenetur</a></h2>
                    </div>
                    <ul class="entry-meta clearfix">
                        <li><span class="label label-warning">Private</span></li>
                        <li><a href="#"><i class="icon-time"></i> 11:00 - 19:00</a></li>
                        <li><a href="#"><i class="icon-map-marker2"></i> Melbourne</a></li>
                    </ul>
                    <div class="entry-content">
                        <a href="#" class="btn btn-default" disabled="disabled">Buy Tickets</a> <a href="#"
                                                                                                   class="btn btn-danger">Read
                            More</a>
                    </div>
                </div>
            </div>

            <div class="entry clearfix">
                <div class="entry-image ">
                    <a href="#">
                        <img src="images/events/thumbs/2.jpg" alt="Nemo quaerat nam beatae iusto minima vel">
                        <div class="entry-date">16<span>Apr</span></div>
                    </a>
                </div>
                <div class="entry-c">
                    <div class="entry-title">
                        <h2><a href="#">Nemo quaerat nam beatae iusto minima vel</a></h2>
                    </div>
                    <ul class="entry-meta clearfix">
                        <li><span class="label label-danger">Urgent</span></li>
                        <li><a href="#"><i class="icon-time"></i> 11:00 - 19:00</a></li>
                        <li><a href="#"><i class="icon-map-marker2"></i> Perth</a></li>
                    </ul>
                    <div class="entry-content">
                        <a href="#" class="btn btn-info">RSVP</a> <a href="#" class="btn btn-danger">Read More</a>
                    </div>
                </div>
            </div>

            <div class="entry clearfix">
                <div class="entry-image ">
                    <a href="#">
                        <img src="images/events/thumbs/3.jpg" alt="Ducimus ipsam error fugiat harum recusandae">
                        <div class="entry-date">3<span>May</span></div>
                    </a>
                </div>
                <div class="entry-c">
                    <div class="entry-title">
                        <h2><a href="#">Ducimus ipsam error fugiat harum recusandae</a></h2>
                    </div>
                    <ul class="entry-meta clearfix">
                        <li><span class="label label-info">Public</span></li>
                        <li><a href="#"><i class="icon-time"></i> 11:00 - 19:00</a></li>
                        <li><a href="#"><i class="icon-map-marker2"></i> Melbourne</a></li>
                    </ul>
                    <div class="entry-content">
                        <a href="#" class="btn btn-default">Buy Tickets</a> <a href="#" class="btn btn-danger">Read
                            More</a>
                    </div>
                </div>
            </div>

            <div class="entry clearfix">
                <div class="entry-image ">
                    <a href="#">
                        <img src="images/events/thumbs/4.jpg" alt="Nisi officia adipisci molestiae aliquam">
                        <div class="entry-date">16<span>Jun</span></div>
                    </a>
                </div>
                <div class="entry-c">
                    <div class="entry-title">
                        <h2><a href="#">Nisi officia adipisci molestiae aliquam</a></h2>
                    </div>
                    <ul class="entry-meta clearfix">
                        <li><span class="label label-warning">Private</span></li>
                        <li><a href="#"><i class="icon-time"></i> 12:00 - 18:00</a></li>
                        <li><a href="#"><i class="icon-map-marker2"></i> New York</a></li>
                    </ul>
                    <div class="entry-content">
                        <a href="#" class="btn btn-info">RSVP</a> <a href="#" class="btn btn-danger">Read More</a>
                    </div>
                </div>
            </div>

        </div>

    </section>

</div>

<?php
include('footer.php');
?>
