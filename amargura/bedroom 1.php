<?php include("header.php"); ?>


    <!--rows container -->
    <div class="container-fluid">
    
        <!--row 1 -->
        <div class="row">
    
          <div class="col-md-4 panel panel-sidebar"> <h2>bedroom 1</h2>
    <p>A self contained  suite, this room has immediate access to the downstairs wc off the passageway to the room.  Finished in bamboo flooring throughout, the room has a small entrance with steps up to the main part of the room and an extra quiet ceiling fan switched from each side of the bed for hot summer nights.  Shelves &amp; Moroccan wall-lights either side of the bed provide finishing touches.    </p>
    <p>Bright and airy, with a window and french doors onto the private patio, the room also has a cleverly placed double size en suite shower area behind the wall that the bed backs onto, tiled in turquoise glass mosaic tiles and featuring matching blue baisin.  The Hansgrohe Raindance Air shower-set is a contemporary ‘eco’ shower that incorporates air into the water providing a luxurious experience whilst saving on water usage.   </p>
    <p>The private patio with table &amp; chairs provides the perfect spot for a private breakfast - shaded from both the pool area and the sun by a screen of miniature bamboo on the small wall that encloses the patio.  Steps up from the patio lead directly to the private pool area.
      
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
<div id="carousel-bedroom1" class="carousel slide"><!-- class of slide for animation -->
 <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-bedroom1" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-bedroom1" data-slide-to="1"></li>
    <li data-target="#carousel-bedroom1" data-slide-to="2"></li>
  </ol>

 <!-- Wrapper for slides -->
  <div class="carousel-inner">
  
    <div class="item active"><!-- class of active since it's the first item -->
    	<img class="center" src="images/carousel_images/spare_bed1.jpg" alt="bedroom 1"/>
  </div>
    
    
    <div class="item">
    	<img class="center" src="images/carousel_images/spare_bed_basin.jpg" alt="bedroom 1 basin"/>
   </div>
   
   
  <div class="item">
    	<img class="center" src="images/carousel_images/guest_shower.jpg" alt="bedroom 1 shower"/>
	</div> 
   
   
   <div class="item">
    	<img class="center" src="images/carousel_images/spare_bed_terrace.jpg" alt="bedroom 1 terrace"/>
	</div> 
    
  </div><!-- /.carousel-inner -->
  
  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-bedroom1" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
  </a>
  <a class="right carousel-control" href="#carousel-bedroom1" data-slide="next">
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
  		 $("#carousel-bedroom1").swiperight(function() {  
    		  $(this).carousel('prev');  
	    		});  
		   $("#carousel-bedroom1").swipeleft(function() {  
		      $(this).carousel('next');  
	   });  
	});  
</script>
</body>