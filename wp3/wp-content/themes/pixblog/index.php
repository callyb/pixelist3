<?php
/*
Template Name: Index
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


                <img src="<?php echo get_template_directory_uri(); ?>/img/pixelist_design_logo.png">

                <div class="tagline">
                    <div class="center-block text-center">
                        <h1>Pixelist Blog</h1>
                        <h5>I hope you enjoy my posts! This is a simple blog inside the Pixelist site and also, for
                            those
                            who are interested in the technical side, shows how you can integrate a wordpress-hosted
                            site
                            inside a regular html website.</p>
                            <p>Please feel free to leave comments!
                        </h5>
                    </div>

                </div>


                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

                <article class="post">

                    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                    <p><em>
                            By <?php the_author(); ?>
                            on <?php echo the_time('l, F jS, Y');?>
                            in <?php the_category( ', ' ); ?>.
                            <a href="<?php comments_link(); ?>"><?php comments_number(); ?></a>
                        </em></p>

                    <?php the_content(); ?>

                    <hr>

                </article>


                <?php endwhile; else: ?>

                <div class="page-header">
                    <h1>Oh no!</h1>
                </div>

                <p>No content is appearing for this page!</p>

                <?php endif; ?>


            </div>

            <?php get_sidebar(); ?>

        </div>




        <?php get_footer(); ?>