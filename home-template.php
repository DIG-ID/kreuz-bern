<?php /* Template Name: Kreuz-homepage-template */ ?>
<?php get_header(); ?>
<div id="primary" class="content-area">
  <header>
    <video id="home__video--header" playsinline="playsinline" loop="" autoplay="autoplay" muted="muted">
      <source src="<?php echo the_field('video_link'); ?>" type="video/mp4">  
    </video>
  </header>
  <main id="main" class="site-main" role="main">
    <?php
    // Start the loop.
    while ( have_posts() ) : the_post();
                    // Include the page content template.
                    get_template_part( 'template-parts/content', 'page' );
                    // If comments are open or we have at least one comment, load up the comment template.
                    if ( comments_open() || get_comments_number() ) {
                                    comments_template();
                    }
                    // End of the loop.
    endwhile;
    ?>

    <section>
      <div class="container">
        <div class="row">
          <div class="col-md-9 col-sm-9 col-xs-12 main__section">
            <div class="main__section--wrapper">
              <div class="row">
                <div class="col-md-6"></div>
                <div class="col-md-6"></div>
              </div>
              <div class="row">
                <div class="col-md-6"></div>
                <div class="col-md-6"></div>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-sm-4 col-xs-12 col-md-offset-1 sidebar float__right">

          </div>
        </div>
      </div>
    </section>

  </main><!-- .site-main -->
</div><!-- .content-area -->
<?php get_footer(); ?>
