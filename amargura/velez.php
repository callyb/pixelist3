<?php include("header.php"); ?>


    <!--rows container -->
    <div class="container-fluid">
    
        <!--row 1 -->
        <div class="row">
    
          <div class="col-md-4 panel panel-sidebar"> <h2>Vélez de Benaudalla Granada, Spain</h2>
    <p>
      <!-- end #sidebar1 -->
    Nestled in the fertile valley of the Guadalfeo river, the picturesque white washed village of Velez de Benaudalla is located only a short   drive from the popular Costa Tropical coastal towns of Salobrena (15 mins) and Almunecar (25 mins), and 40 minutes drive, through the Lecrin Valley, to Granada and the snow covered Sierra Nevada mountains and ski resort beyond. </p><br />
Although Vélez de Benaudalla is a very ancient and historic town, it also has an interesting mix of old and new Spain, and is able to offer a good selection of modern facilities whilst keeping its traditional roots. Vélez de Benaudalla is also host to   a variety of shops including grocery stores, bakers and a pharmacy as well as some excellent local tapas bars, where the Andalucian tradition continues of offering free tapas (snacks) with every drink.</p>
    <p><br />
      Vélez de Benaudalla is a very traditional Spanish mountain village and is brimming with the remains of its moorish past.  The narrow streets of the old town with their pretty village houses are enchanting and reflect the towns rich history. The Nazari dynasty ruled the province of Granada for nearly 4 centuries and left behind a legacy of knowledge, gastronomy and according to legend, great treasures that are still to be discovered. </p><br />
    <p>Within Vélez de Benaudalla you will find the Jardin Nazari, which was inspired by Granada architecture, and is generally considered to be the finest example of Hispanic-Muslim gardens in Spain, and is certainly on a par with the Generalife Gardens in the Alhambra Palace in Granada.  You will also find other examples of its heritage and historical importance, two of the finest being the Arabic fortress and the Church of the Rosario. </p><br />
    <p>Situated at the foothills of the Sierra Nevada mountains, and just below the Las Alpujarras and to the south of the Lecrin Valley, Vélez de Benaudalla is rich with adventure activities which can be found close by.  For hill walkers, bird watchers or wild flower and fauna enthusiasts the local countryside holds a wealth of treasures within the amazing local scenery.  More organised activities like hot air ballooning, horse riding, mountain biking to name but a few, are all readily available making Vélez de Benaudalla one of the most exciting and interesting holiday destinations of southern Spain.  It is also one of the few places in Europe from which you can ski on world-class slopes in the morning and sunbathe on quiet and unspoilt Meditteranean beaches in the afternoon!</p>    
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
<div id="carousel-velez" class="carousel slide"><!-- class of slide for animation -->
 <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-velez" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-velez" data-slide-to="1"></li>
    <li data-target="#carousel-velez" data-slide-to="2"></li>
  </ol>

 <!-- Wrapper for slides -->
  <div class="carousel-inner">
  
    <div class="item active"><!-- class of active since it's the first item -->
<img class="center" src="images/carousel_images/costa_aguilera.jpg" alt="costa aguilera"/>
   </div>
   
   
  <div class="item">
    	<img class="center" src="images/carousel_images/salobrena-castle-village.jpg" alt="salobrena pic"/>
	</div> 
   
  <div class="item">
    	<img class="center" src="images/carousel_images/Alhambra.jpg" alt="alhambra pic"/>
	</div>  
  </div><!-- /.carousel-inner -->
  
  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-velez" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
  </a>
  <a class="right carousel-control" href="#carousel-velez" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
  </a>
</div><!-- /.carousel -->

            </div> 
            
     
        </div> <!-- /row -->
        
      <!--<div class="spacer"></div>
    
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
  		 $("#carousel-velez").swiperight(function() {  
    		  $(this).carousel('prev');  
	    		});  
		   $("#carousel-velez").swipeleft(function() {  
		      $(this).carousel('next');  
	   });  
	});  
</script>
</body>