<?php include("header.php"); ?>

    <!--rows container -->
    <div class="container-fluid">
    
        <!--row 1 -->
        <div class="row">
    
          <div class="col-md-4 panel panel-sidebar"> <h2>outdoor spaces</h2>
    <p>The outdoor space begins with the traditional Spanish courtyard containing flower beds and a unique local 'nispero' (loquat) tree  (although at some point this will be replaced with a more practical lemon tree!) and original stone water feature.  The courtyard also features hand painted traditional Andalucian tiles and original stone flagstones and  contains large and comfy sofas, coffee tables, and ‘sail’ sunshade adding a beautifully relaxing extra ‘outdoor room’ to the house.  </p>
    <p>Steps up by the side of the house open onto the private pool area and further steps lead up to a spacious roof terrace (and a further terrace that houses a locked metal storage shed - the only part of the property not open to guests).  
    <p>The first terrace holds a rotary washing line for guest use, both terraces provide glimpses of the stunning mountainous countryside.</p>
      
    
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
<div id="carousel-outdoor" class="carousel slide"><!-- class of slide for animation -->
 <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-outdoor" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-outdoor" data-slide-to="1"></li>
    <li data-target="#carousel-outdoor" data-slide-to="2"></li>
  </ol>

 <!-- Wrapper for slides -->
  <div class="carousel-inner">
  
    <div class="item active"><!-- class of active since it's the first item -->
    	<img class="center" src="images/carousel_images/courtyard.jpg" alt="courtyard"/>
  </div>
    
    
    <div class="item">
    	<img class="center" src="images/carousel_images/terraces1.jpg" alt="terraces"/>
   </div>
   
 
   
   
   
    
  </div><!-- /.carousel-inner -->
  
  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-outdoor" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
  </a>
  <a class="right carousel-control" href="#carousel-outdoor" data-slide="next">
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
  		 $("#carousel-outdoor").swiperight(function() {  
    		  $(this).carousel('prev');  
	    		});  
		   $("#carousel-outdoor").swipeleft(function() {  
		      $(this).carousel('next');  
	   });  
	});  
</script>
</body>