<?php include("header.php"); ?>

<div class="container-fluid">
    <!--row 1 -->
    <div class="row">
        <div class="col-md-4">
            <div class="panel panel-sidebar" style="padding-left: 15px">
                <h2> Vélez de Benaudalla Granada, Spain </h2>
                <p>Nestled in the fertile valley of the Guadalfeo river, between the 'Costa Tropical' and the beautiful
                    city of Granada , the picturesque white washed Andalucian village of Velez de Benaudalla is a
                    historic town full of arabic influences yet with an interesting mix of old and new Spain, offering a
                    good selection of modern facilities whilst keeping its traditional roots.</p>

                <p><a href="velez.html">More about Vélez de Benaudalla here</a> </p>
                <p>&nbsp;</p>
            </div>
            <div class="panel panel-sidebar plans text-center center-block">
                <h2>
                    Plans of the house
                </h2>
                Click on the image for full page plans
                <div class="plans_link">
                    <a href="plans.php" target="new">
                        <img src="images/plans_small.jpg" width="60em" />
                    </a>
                </div>
            </div>
        </div>
        <!--/row 1-->

        <!--row2-->
        <div class="col-md-1">
        </div>
        <!--/row 2-->

        <!--row 3-->
        <div class="col-md-7 panel panel-content">
            <h1>Calle Amargura 11...</h1>
            <p>is a superb large terraced townhouse in the traditional 'Arab Quarter' of the small Andalucian town of
                Velez de Benaudalla.</p>

            <h2>the house...</h2>

            <p>has been extensively remodelled & beautifully refurbished by a professional interior designer using high
                end contemporary fittings and finishes throughout blended seamlessly with the original features &
                traditional style. The house is an ideal holiday or full time home, with the additional opportunity to
                rent it to friends/relatives and potential paying clients to cover it's costs.</p>

            <h3>situated...</h3>

            <p>in the foothills of the Sierra Nevada, Velez de Benaudalla is an up and coming small town with all
                facilities, 20 minutes from the beach & just over 1 hour to the ski slopes. 40 minutes drive to Granada
                & with the completion of the new motorway under 1 hour to Malaga.</p>

            <a href="mailto: info@amargura11.com">Click here to email us with any queries</a>
            <p>&nbsp;</p>
        </div>

    </div>
    <!--/row 3-->


    <div class="row panel panel-footer">

        <div id="fleft" class="col-lg-4 text-center">
            <h2>249,950 euros</h2>
            <p>furniture also available if required (excluding personal effects/electronic equipment etc) <br />
                for an additional cost</p>
        </div>
        <div>
            <div id="fcentre" class="col-lg-4 text-center">
                <h5>We have had many guest in the years we've owned the house, these are quotes from our guestbook:
                </h5>
                <ul id="ticker">



                    <li>
                        <p>
                            "We had a wonderful holiday in a great place to stay. The location is excellent. The sea and
                            the
                            mountains are easy to reach. We can only recommend this house." August 2017
                        </p>
                    </li>

                    <li>
                        <p>
                            "Belle agréable, une maison de vacances idéalement située pour visiter l'Andalousie. La
                            piscine
                            privée est un véritable luxe pour terminer les journées par un bain frais." August 2017
                        </p>
                    </li>

                    <li>
                        <p>
                            "We have just had an amazing week in this very special house...The house was well equipped
                            with
                            comfy beds, a great pool and relaxing courtyard with corner sofa where we sat in the evening
                            with a glass of vino." May 2016
                        </p>
                    </li>

                    <li>
                        <p>
                            "This is a delightful property, perfectly situated as a base for visiting mountains or
                            beaches,
                            or for just staying put and relaxing in it´s glorious outdoor spaces." August 2015
                        </p>
                    </li>

                    <li>
                        <p>
                            "Truly fantastic house and location with private pool. Everything a family could need for a
                            perfect holiday." August 2015
                        </p>
                    </li>

                    <li>
                        <p>
                            "Lovely authentic house, great house, great location" September 2014
                        </p>
                    </li>


                    <li>
                        <p>
                            "A beautiful house in a beautiful place, we had a wonderful holiday, thank you.
                            A perfect place to get away from it all with some beautiful places to explore near by.
                            We would love to return in the future." September 2013
                        </p>
                    </li>

                    <li>
                        <p>
                            "The most comfortable beds and pillows we have ever had in a holiday home. The furniture
                            (both
                            indoor and outdoor) was all of a very high standard." September 2012
                        </p>
                    </li>

                    <li>
                        <p>
                            "Lovely house with excellent facilities to a high standard. Fantastic area with many options
                            for
                            a wide range of holidays. " October 2011
                        </p>
                    </li>

                </ul>

            </div>

            <div id="fright" class="col-lg-4 text-center">
                <p>FOR FURTHER INFORMATION CONTACT CAROLE NISSEN</p>
                </p>tel: (0034) 699248667 email: info@amargura11.com</p>
            </div>

        </div> <!-- /row -->



    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>

    <script>
    $(document).ready(function() {
        $(function() {
            var ticker = function() {
                setTimeout(function() {
                    $('#ticker li:first').animate({
                        marginTop: '-120px'
                    }, 800, function() {
                        $(this).detach().appendTo('ul#ticker').removeAttr('style');
                    });
                    ticker();
                }, 4000);
            };
            ticker();
        });
    });
    </script>

    </body>