<?php include("header.php"); ?>


    <!--rows container -->
    <div class="container-fluid">
    
        <!--row 1 -->
        <div class="row">
    
          <div class="col-md-4 panel panel-sidebar"> <h2>bedrooms</h2>
    <p>The house has two luxurious bedrooms, one upstairs with an adjoining dressing room and next to the family bathroom, and one downstairs with an en suite shower room and adjacent wc and french doors to a private patio.</p>
    <p>In addition, the TV room can also be made up as a permanent 3rd bedroom or used as one at night, as it has a very comfortable sofabed and air conditioning. The dressing room adjoining the upstairs bedroom is spacious enough to be used by 4 people for  storage of clothes and belongings giving guests sleeping in the TV room plenty of wardrobe and drawer space.     (The TV can be moved to the main reception room if the 3rd bedroom is made up for the duration of the holiday).</p>
    <p>The upstairs bedroom leads off from the galleried landing that creates the open plan stairwell. </p>
    <p>With a large window and glass panelled door to the two roof terraces the landing is as bright and sunny as the rest of this airy house, but also has wooden shutters on the window (as with all the windows in the house) to enable the sunlight to be kept to a minimum if desired on hot days and light nights.
  
    </p>
</div>
      <!--/row 1-->
            
            <!--row2-->
            <div class="col-md-1">
            </div>
     		<!--/row 2-->
            
            <!--row 3-->
            
            <div class="col-md-6 col-md-offset-1 content">
            <!--  Carousel - consult the Twitter Bootstrap docs at 
      http://twitter.github.com/bootstrap/javascript.html#carousel -->
<div id="carousel-bedroom" class="carousel slide"><!-- class of slide for animation -->
 <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-bedroom" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-bedroom" data-slide-to="1"></li>
    <li data-target="#carousel-bedroom" data-slide-to="2"></li>
  </ol>

 <!-- Wrapper for slides -->
  <div class="carousel-inner">
  
    <div class="item active"><!-- class of active since it's the first item -->
    	<img class="center" src="images/carousel_images/spare_bed3.jpg" alt="bedroom 1"/>
  </div>
    
    
    <div class="item">
    	<img class="center" src="images/carousel_images/up_landing.jpg" alt="upstairs landing"/>
   </div>
   
   
  <div class="item">
    	<img class="center" src="images/carousel_images/main_bed.jpg" alt="bedroom 2"/>

   </div> 
    
  </div><!-- /.carousel-inner -->
  
  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-bedroom" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
  </a>
  <a class="right carousel-control" href="#carousel-bedroom" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
  </a>
</div><!-- /.carousel -->

            </div> 
            
     
        </div> <!-- /row -->
        
       <!-- <div class="spacer"></div>-->
    
                <!-- row 2 -->
        <div class="row panel panel-footer">
    
            <div id="fleft" class="col-lg-3 text-center">
            <p><strong>Contact: </strong><br>
            Carole Nissen on +44 7541819383 <br>email: info@amargura11.com</p>
            </div>    
     		<div id="fcentre" class="col-lg-4"></div>
            <div id="fright" class="col-lg-5 text-center"><a href="http://www.homeaway.co.uk"><img src="images/grabhomeaway.jpg" alt="homeaway logo" width="120"></a>
            <a href="http://www.holidaylettings.co.uk"><img src="images/holidaylettingslogo.jpg" alt="holiday lettings logo" width="120"></a>
     
            <img src="https://www.paypalobjects.com/webstatic/mktg/Logo/AM_SbyPP_mc_vs_ms_ae_UK.png" width="140"></a>  </div> 
     
        </div> <!-- /row -->  
     
         
    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
   <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script>
  $(document).ready(function(){
    $('.carousel').carousel({
      interval: 3000
    });
  });
</script>
<!--swipe functionality with jquery mobile-->
<script>
  $(document).ready(function() {  
  		 $("#carousel-bedroom").swiperight(function() {  
    		  $(this).carousel('prev');  
	    		});  
		   $("#carousel-bedroom").swipeleft(function() {  
		      $(this).carousel('next');  
	   });  
	});  
</script>
</body>