<?php include("header.php"); ?>


    <!--rows container -->
    <div class="container-fluid">
    
        <!--row 1 -->
        <div class="row">
    
          <div class="col-md-4 panel panel-sidebar"> <h2>bedroom 2...</h2>
    <h3>...and dressing room</h3>
    <p>Bedroom 2 has glass panelled french doors with shutters leading to a small balcony with views of the stunning Sierra Nevada at the end of the winding village street, as does the dressing room next door.  These also provide the perfect vantage point during the numerous village fiestas, as the house is on the route for celebratory processions held in the village!
  <!-- end #sidebar1 -->
</p>
<p>The bedroom and adjoining dressing room are bright and airy with a high ceilings that reach up into the rafters with dark wood beams creating a traditional feel.  The bedroom has an adjoining door to the private dressing room with open wardrobe units containing hanging space, shelves and drawers along the length of two walls with a buit in ironing board and a drier for extra convenience.</p>
<p>The bedroom features an original bespoke Moroccan 4 poster wrought iron bed with beautiful light voile curtains on the bed and windows adding to the feeling of lightness and space.  It has both an extra quiet ceiling fan with light switched from each side of the bed, and a remote controlled airconditioning unit. </p>
<p>A white wood dressing table completes the bedroom and solid bamboo wood flooring continues through both rooms.
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
<div id="carousel-bedroom2" class="carousel slide"><!-- class of slide for animation -->
 <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-bedroom2" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-bedroom2" data-slide-to="1"></li>
    <li data-target="#carousel-bedroom2" data-slide-to="2"></li>
  </ol>

 <!-- Wrapper for slides -->
  <div class="carousel-inner">
  
    <div class="item active"><!-- class of active since it's the first item -->
    	<img class="center" src="images/carousel_images/main_bed.jpg" alt="bedroom 2"/>
  </div>
    
    
    <div class="item">
    	<img class="center" src="images/carousel_images/dressing_table.jpg" alt="dressing table"/>
   </div>
   
   
  <div class="item">
    	<img class="center" src="images/carousel_images/dressing_room.jpg" alt="dressing room"/>
	</div> 
   
   
   
    
  </div><!-- /.carousel-inner -->
  
  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-bedroom2" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
  </a>
  <a class="right carousel-control" href="#carousel-bedroom2" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
  </a>
</div><!-- /.carousel -->

            </div> 
            
     
        </div> <!-- /row -->
        
        <div class="spacer"></div>
    
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
  		 $("#carousel-bedroom2").swiperight(function() {  
    		  $(this).carousel('prev');  
	    		});  
		   $("#carousel-bedroom2").swipeleft(function() {  
		      $(this).carousel('next');  
	   });  
	});  
</script>
</body>