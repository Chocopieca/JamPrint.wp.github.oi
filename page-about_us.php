<?php
/*
Template Name: About us
*/
?>

<?php get_header('page'); ?>

      <div class="container about-us-page">
        <div class="col-12 col-md-8 offset-md-2 about-autor">
            <div class="portrait"><?php the_post_thumbnail() ?></div>
            <p><?php the_content() ?></p>
        </div>

        <div class="owl-carousel advantages-carousel">
        <?php
          query_posts( '&category_name=advantages' );

          if( have_posts() ){
            while( have_posts() ){
              the_post(); ?>
            <div class="advantages-item">
              <div><?php the_post_thumbnail() ?></div>
              <h2><?php the_title(); ?></h2>
              <p><?php the_content(); ?></p>
              <a href="#" class="button">
                <p>Shop now</p>
              </a>
            </div>
            <?php }
            wp_reset_query();
          } ?>
        </div>
      </div>
    </div>
    
<?php get_footer(); ?>