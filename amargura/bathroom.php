<?php include("header.php"); ?>

    <!--rows container -->
    <div class="container-fluid">
    
        <!--row 1 -->
        <div class="row">
    
          <div class="col-md-4 panel panel-sidebar"> <h2>main bathroom</h2>
    <p>The unique luxury main bathroom uses locally sourced finishes to create a welcoming, cool and relaxing traditional feel with contemporary fittings and a high end sensibility.  The local travertine stone tiles feature throughout, sourced from  quarries that lie within a few kilometres of the village!</p>
    <p>Limestone mosaic lines the walk in shower  with an extra large Hansgrohe Raindance Air  ceiling-mounted fixed showerhead and matching wall mounted/hand held  showerhead fitting provides guests with a super-luxurious yet ‘green’  experience.  </p>
    <p>The specially designed built-in double baisin unit provides space beneath for towels etc and features  travertine stone bowls made for us by a local artisan.</p>
    <p>The room is finished with  matching suspended WC and bidet 
      for extra comfort.
     
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
<div id="carousel-bathroom" class="carousel slide"><!-- class of slide for animation -->
 <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-bathroom" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-bathroom" data-slide-to="1"></li>
    <li data-target="#carousel-bathroom" data-slide-to="2"></li>
  </ol>

 <!-- Wrapper for slides -->
  <div class="carousel-inner">
  
    <div class="item active"><!-- class of active since it's the first item -->
    	<img class="center" src="images/carousel_images/bathroom1.jpg" alt="bathroom1"/>
  </div>
    
    
    <div class="item">
    	<img class="center" src="images/carousel_images/bathroom3.jpg" alt="bathroom 2"/>
   </div>
   
   
  <div class="item">
    	<img class="center" src="images/carousel_images/bathroom2.jpg" alt="bathroom 3"/>
	</div> 
   
   
   
    
  </div><!-- /.carousel-inner -->
  
  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-bathroom" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
  </a>
  <a class="right carousel-control" href="#carousel-bathroom" data-slide="next">
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
  		 $("#carousel-bathroom").swiperight(function() {  
    		  $(this).carousel('prev');  
	    		});  
		   $("#carousel-bathroom").swipeleft(function() {  
		      $(this).carousel('next');  
	   });  
	});  
</script>
</body>