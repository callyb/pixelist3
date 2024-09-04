<?php
/*
Template Name: Front Page
*/
?>
 
 <?php get_header(); ?>

<!-- PAGE CONTAINER -->
<div id="background-div" class="container-fluid">          
           

                    
  
    <!-- Main jumbotron Intro -->
    

     
    <div class="container blog-body">
      <!-- Example row of columns -->
      
      <div class="row">
      
      <div class="col-md-9">

        <div class="panel blog-panel center-block text-center">
          <h1>Pixelist Blog</h1>
          <h5>I hope you enjoy my posts!  This is a simple blog inside the Pixelist site and also, for those who are interested in the technical side, shows how you can integrate a wordpress-hosted site inside a regular html website.</p>
          <p>Please feel free to leave comments!</h5>
        </div>

  


       <?php
      /* Run the loop to output the page.
       * If you want to overload this in a child theme then include a file
       * called loop-page.php and that will be used instead.
       */
      get_template_part( 'loop', 'page' );
      ?>


        <div id="frontpagepostpull">
        <?php $temp_query = $wp_query; ?> 
        <?php query_posts('showposts=5'); ?>
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

           <article class="post">
            
            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            <p><em>
              By <?php the_author(); ?> 
              on <?php echo the_time('l, F jS, Y');?>
              in <?php the_category( ', ' ); ?>.
              <a href="<?php comments_link(); ?>"><?php comments_number(); ?></a>
            </em></p>

            <?php the_excerpt(); ?>

             <hr>

          </article>

         
        <?php endwhile; else: ?>
          
          <div class="page-header">
            <h1>Oh no!</h1>
          </div>

          <p>No content is appearing for this page!</p>

        <?php endif; ?>
        </div>

    </div>
      
      <?php get_sidebar(); ?>

  </div>




<?php get_footer(); ?>