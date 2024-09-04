<?php include("header.php"); ?>

    <!--rows container -->
    <div class="container-fluid">
    
        <!--row 1 -->
        <div class="row">
    
          <div class="col-md-4 panel panel-sidebar"> <h2>swimming pool</h2>
    <p>The luxurious private pool area is made possible by the double plot occupied by this property - and is extremely rare if not unique for a house in this village and many others in the area.  The pool is a sizeable 3.4m x 5.8m and .9 to 1.4m deep with corner steps.   The pool is tiled throughout with white mosaic tiles, with mother-of-pearl-effect blue glass mosaic tile borders.</p>
    <p>Athough the pool is not heated, it is available for use year round and is often warm enough to use well into the winter.</p>
    <p>The surrounding patio features beautiful pale grey cool-touch, non-slip engineered stone-effect tiles designed specifically for pool areas and has a solid wood and chrome pool shower.  The lighting has been specially designed for maximum impact, with architectural uplighters creating 2 columns of light at each side of the pool with plants in between  and the inside of the pool lit from the steps beneath the water. This ensures the pool area is a wonderfully relaxing place to enjoy both by day and during the evening, when moonlight swims can be wonderfully refreshing.</p>
    <p>The area is walled throughout and the lane behind the property is at a much lower level than the pool area meaning guests cannot be overlooked by passers by.</p>

</div>
      <!--/row 1-->
            
            <!--row2-->
            <div class="col-md-1">
            </div>
     		<!--/row 2-->
            
            <!--row 3-->
            
            <div class="col-md-6 col-offset-1 content">
            <!--  Carousel - consult the Twitter Bootstrap docs at 
      http://twitter.github.com/bootstrap/javascript.html#carousel -->
<div id="carousel-pool" class="carousel slide"><!-- class of slide for animation -->
 <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-pool" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-pool" data-slide-to="1"></li>
    <li data-target="#carousel-pool" data-slide-to="2"></li>
  </ol>

 <!-- Wrapper for slides -->
  <div class="carousel-inner">
  
    <div class="item active"><!-- class of active since it's the first item -->
    	<img class="center" src="images/carousel_images/pool4.jpg" alt="courtyard"/>
  </div>
    
    
    <div class="item">
    	<img class="center" src="images/carousel_images/pool5.jpg" alt="pool2"/>
   </div>
   
   
  <div class="item">
    	<img class="center" src="images/carousel_images/pool8.jpg" alt="pool3"/>
	</div> 
   
   
   
    
  </div><!-- /.carousel-inner -->
  
  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-pool" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
  </a>
  <a class="right carousel-control" href="#carousel-pool" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
  </a>
</div><!-- /.carousel -->

            </div> 
            
     
        </div> <!-- /row -->
        
        <!--<div class="spacer"></div>-->
    
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
  		 $("#carousel-pool").swiperight(function() {  
    		  $(this).carousel('prev');  
	    		});  
		   $("#carousel-pool").swipeleft(function() {  
		      $(this).carousel('next');  
	   });  
	});  
</script>
</body>