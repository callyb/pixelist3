<?php include("header.php"); ?>

    <div class="container-fluid">
    
        <!--row 1 -->
        <div class="row">
    
          <div class="col-md-4 panel panel-sidebar"> <div id="sidebar1">
    <h2>dining room &amp; kitchen</h2>
    <p>Through a small passageway under the stairs, the house opens out again into a charming dining room with original open fireplace, furnished with a traditional Moroccan mosaic dining table and wrought iron chairs sourced by the owners in Marrakech.   A traditional ceiling fan and light blends with the wooden beams on the ceiling. The dining room leads directly through original double doors to the highly specified kitchen.</p>
    <p>The large modern fitted kitchen contains stunning beech wood units with Silestone quartz worktops and beautiful glass mosaic tiled splashbacks.  </p>
    <p>The kitchen cleverly combines modern convenience with natural finishes that blend perfectly with the room’s original features including shuttered windows and panelled doors.  It features Bosch appliances including washing machine, electric eye-level oven and microwave, gas hob with extractor fan and additionally, built in full height fridge freezer and dishwasher, and extensive cupboard space &amp; worktops catering for all your holiday  cooking needs! </p>
    <p>The kitchen is well lit and ventilated with a modern light and fan to the ceiling and two windows and a glass panelled door all opening onto the courtyard where  meals can be enjoyed al fresco.
    </p>
  </div>
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
<div id="carousel-room2" class="carousel slide"><!-- class of slide for animation -->
 <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-room2" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-room2" data-slide-to="1"></li>
    <li data-target="#carousel
    -room2" data-slide-to="2"></li>
  </ol>

 <!-- Wrapper for slides -->
  <div class="carousel-inner">
  
    <div class="item active"><!-- class of active since it's the first item -->
    	<img class="center" src="images/carousel_images/dining_room.jpg" alt="tv room"/>
  </div>
    
    
    <div class="item">
    	<img class="center" src="images/carousel_images/kitchen1.jpg" alt="kitchen"/>
   </div>
   
   
  <div class="item">
    	<img class="center" src="images/carousel_images/kitchen2.jpg" alt="kitchen2"/>
   </div> 
   
   <div class="item">
    	<img class="center" src="images/carousel_images/kitchen4.jpg" alt="kitchen 4"/>
   </div> 
    </div>
  </div><!-- /.carousel-inner -->
  
  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-room2" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
  </a>
  <a class="right carousel-control" href="#carousel-room2" data-slide="next">
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
    <script src="jquery.mobile.custom.min.js"></script>  

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
  		 $("#carousel-room2").swiperight(function() {  
    		  $(this).carousel('prev');  
	    		});  
		   $("#carousel-room2").swipeleft(function() {  
		      $(this).carousel('next');  
	   });  
	});  
</script>
</body>