<?php include("header.php"); ?>


    <!--rows container -->
    <div class="container-fluid">
    
        <!--row 1 -->
        <div class="row">
    
          <div class="col-md-4 panel panel-sidebar"> <h2>room 2</h2>
    <p>Through original double doors from the entrance hall the TV room features dark wood beams and original window shutters in the traditional andalucian soft green colour that features on the woodwork throughout the house.  </p>
    <p>With 2 huge comfy sofas (now featuring washable covers) and a coffee table this room is designed for relaxing! One of the sofas is also a double sofabed with fully sprung base and deep foam mattress and the room can be made up as a bedroom for 2 extra guests if required.</p>
    <p>The floor is beautiful solid bamboo wood flooring and the ceiling  features a traditional style ceiling mounted fan with light. The room has an airconditioning unit fitted.
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
<div id="carousel-room2" class="carousel slide"><!-- class of slide for animation -->
 <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-room2" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-room2" data-slide-to="1"></li>
    <li data-target="#carousel-room2" data-slide-to="2"></li>
  </ol>

 <!-- Wrapper for slides -->
  <div class="carousel-inner">
  
    <div class="item active"><!-- class of active since it's the first item -->
    	<img class="center" src="images/carousel_images/living_room.jpg" alt="tv room"/>
  </div>
    
    
    <div class="item">
    	<img class="center" src="images/carousel_images/tvroom_chair.jpg" alt="tv room 2"/>
   </div>
   
   
  <div class="item">
    	<img class="center" src="images/carousel_images/ceiling_fan.jpg" alt="ceiling fan"/>
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
            <!-- / row3 -->
     
        </div> 
        
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
  		 $("#carousel-room2").swiperight(function() {  
    		  $(this).carousel('prev');  
	    		});  
		   $("#carousel-room2").swipeleft(function() {  
		      $(this).carousel('next');  
	   });  
	});  
</script>
</body>