<?php 
include("header.php"); ?>

<div class="container">

  <div class="row"> 
  <div class="col-md-10 col-md-offset-1"><h3>Booking Conditions</h3><span>Here are our booking conditions - you should have received these as part of your written booking form that we ask you to return to us - if you haven't had this please let us know!</span></br>

<object width="100%" height="1000px" data="complaints_form.pdf"></object>

  </div>




<div class="row"> <h2>Guest pages</h2></br>
                  <p>In this page you will find information about your stay and also the information we have to legally give you in line with the legislation in Andalucia governing holiday rental homes.</p>
  <div class="col-md-10 col-md-offset-1"><h3>Complaints form</h3><span>Here is the Junta de Andalucia complaints form.  If you have a complaint, please complete and submit this form and it will be copied to both us and to the Junta (it's like a regional council and oversees holiday rentals here)</span></br>

<object width="100%" height="1000px" data="complaints_form.pdf"></object>

  </div>
</div>















        <div class="row panel panel-footer">
    
          <div id="fleft" class="col-lg-4 text-center">
          <p><strong>Contact: </strong><br>
          Carole Nissen on +44 7541819383 <br>email: info@amargura11.com</p>
            </div>    
          <div id="fcentre" class="col-lg-4 text-center">
            <ul id="ticker"><h5>Quotes from an online survey of guests:</h5>
       
                          <li>
                              <p>
                                  "Truly fantastic house and location with private pool. Everything a family could need for a perfect holiday."  August 2015
                              </p>
                          </li>
       
                          <li>
                              <p>
                                  "Lovely authentic house, great house, great location" September 2014
                              </p>
                          </li>
       
       
                          <li>
                              <p>
                                  "A beautiful house in a beautiful place, we had a wonderful holiday, thank you.
                                  A perfect place to get away from it all with some beautiful places to explore near by.
                                  We would love to return in the future." September 2013
                              </p>
                          </li>
       
       
                          <li>
                              <p>
                                "This is a delightful property, perfectly situated as a base for visiting mountains or beaches, or for just staying put and relaxing in it´s glorious outdoor spaces." August 2015
                              </p>
                          </li>
       
       
                          <li>
                              <p>
                                  "The most comfortable beds and pillows we have ever had in a rental property. The furniture (both indoor and outdoor) was all of a very high standard." September 2012
                              </p>
                          </li>  

                           <li>
                              <p>
                                  "Lovely house with excellent facilities to a high standard. Fantastic area with many options for a wide range of holidays. " October 2011
                              </p>
                          </li>                  
                      </ul>

                </div>

            <div id="fright" class="col-lg-4 text-center"><a href="http://www.homeaway.co.uk"><img src="images/grabhomeaway.jpg" alt="homeaway logo" width="120"></a>
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
    $(document).ready(function()
{
    $(function()
{
    var ticker = function()
    {
        setTimeout(function(){
            $('#ticker li:first').animate( {marginTop: '-120px'}, 800, function()
            {
                $(this).detach().appendTo('ul#ticker').removeAttr('style');
            });
            ticker();
        }, 4000);
    };
    ticker();
});
});
    </script>
    
</body>