<?php include("header.php"); ?>

    <!--rows container -->
    <div class="container-fluid">
    
        <!--row 1 -->
        <div class="row">
    
          <div class="col-md-4 panel panel-sidebar"> <h2>room 1</h2>
    <p>Light and airy, this room has a window and original huge wooden double doors onto the courtyard and is also flooded with light created by the open plan stairwell.</p>
<p>It  features a built in office area at one end of the room where the owners used to work from (as shown in these photos) now cleared of our things and available for guests to use either for work you've had to bring on holiday, or for simply reading, drawing or other relaxing activities!</p>
<p>The doors open onto the traditional Andalucian courtyard, paved in original stone, with plenty of room for the big rattan sofas and coffee tables to create a relaxing and private outdoor area.
    </p>
<p> The room also features two ceiling fans with lights which effectively keep this large open plan room cool in summer. In addition the room contains a high quality green energy olive-pit/wood pellet burning stove with glass front that effectively heats this and adjoining rooms in winter, and also provides heat for the first floor rooms that lead off from the galleried landing at the top of the staircase.</p>
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
<div id="carousel-room1" class="carousel slide"><!-- class of slide for animation -->
 <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-room1" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-room1" data-slide-to="1"></li>
    <li data-target="#carousel-room1" data-slide-to="2"></li>
  </ol>

 <!-- Wrapper for slides -->
  <div class="carousel-inner">
  
    <div class="item active"><!-- class of active since it's the first item -->
    	
        <img class="center" src="images/carousel_images/courtyardroom_fr_stairs.jpg" alt="main room 2"/>
   </div>
    
    <div class="item">
      	<img class="center" src="images/carousel_images/view_courtyard.jpg" alt="view of courtyard"/>
 	</div>
    
    <div class="item">
    	<img class="center" src="images/carousel_images/rocking_chair.jpg" alt="rocking chair"/>
   </div>
  
  
  </div><!-- /.carousel-inner -->
  
  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-room1" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
  </a>
  <a class="right carousel-control" href="#carousel-room1" data-slide="next">
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
  		 $("#carousel-room1").swiperight(function() {  
    		  $(this).carousel('prev');  
	    		});  
		   $("#carousel-room1").swipeleft(function() {  
		      $(this).carousel('next');  
	   });  
	});  
</script>
</body>