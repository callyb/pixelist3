<?php include("header.php"); ?>


    <!--rows container -->
    <div class="container-fluid">
    
        <!--row 1 -->
        <div class="row">
    
          <div class="col-md-4 panel panel-sidebar"> <h2> reception rooms... </h2>
            <p>The entrance hallway provides a beautiful entry through original wrought ironwork double doors to the main reception room welcoming guests to the heart of the  house. </p>
    <p>The double doors just inside the hallway open onto a TV room featuring huge comfy sofas and warm bamboo flooring.</p>
    <p>The original stairway has been opened up to form an open plan stairwell allowing light to flood the main reception room with sunlight.    </p>
    <p>The floors throughout the ground floor (apart from the TV room) are ceramic stone-effect tiles providing traditional and practical flooring for summer and winter alike.</p>
        </div> 
      <!--/row 1-->
            
            
            <!--row 3-->
            
            <div class="col-md-6 col-md-offset-2 content">
            <!--  Carousel - consult the Twitter Bootstrap docs at 
      http://twitter.github.com/bootstrap/javascript.html#carousel -->
<div id="carousel-reception" class="carousel slide "><!-- class of slide for animation -->
 <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-reception" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-reception" data-slide-to="1"></li>
    <li data-target="#carousel-reception" data-slide-to="2"></li>
  </ol>

 <!-- Wrapper for slides -->
  <div class="carousel-inner">
  
    <div class="item active"><!-- class of active since it's the first item -->
    	<img class="center" src="images/carousel_images/entrance_view.jpg" alt="entrance"/>
      
  
    </div>
    <div class="item">
    	<img class="center" src="images/carousel_images/doorway_view.jpg" alt="front dooors"/>
                
     
    </div>
    <div class="item">
      	<img class="center" src="images/carousel_images/stairview3.jpg" alt="..."/>
      
     
    </div>
  </div><!-- /.carousel-inner -->
  
  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-reception" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
  </a>
  <a class="right carousel-control" href="#carousel-reception" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
  </a>
</div><!-- /.carousel -->

            </div> 
            
     
        </div> <!-- /row 3 -->
        
        <div class="spacer"></div>
    
                
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
  		 $("#carousel_reception").swiperight(function() {  
    		  $(this).carousel('prev');  
	    		});  
		   $("#carousel_reception").swipeleft(function() {  
		      $(this).carousel('next');  
	   });  
	});  
</script>
</body>