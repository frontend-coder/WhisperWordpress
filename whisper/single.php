<?php
get_header();
?>

    <section class="hero-wrap hero-wrap-2" style="background-image: url(<?php $thumb_id = get_post_thumbnail_id();
                    $thumb_url = wp_get_attachment_image_src($thumb_id,'singlepage-thamb', false);
                    echo $thumb_url[0];   ?>);" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-center">
          <div class="col-md-9 ftco-animate pb-5 text-center">
            <h1 class="mb-3 bread"><?php the_title(); ?></h1>
<?php get_template_part('template-parts/content-breadcrumbs'); ?>
            <!-- <p class="breadcrumbs">
              <span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span>
              <span class="mr-2"><a href="blog.html">Blog <i class="ion-ios-arrow-forward"></i></a></span>
              <span>Practice Areas Single <i class="ion-ios-arrow-forward"></i></span>
            </p> -->

          </div>
        </div>
      </div>
    </section>


    <section class="ftco-section ftco-degree-bg">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 order-md-last ftco-animate">
<?php if (have_posts()) : while(have_posts()) : the_post(); ?>
<?php the_content(); ?>
<?php echo kama_link_pages(); ?>
<?php endwhile; // end while ?>
<?php endif; // end if       ?>

<?php if( get_field('practice_areas_ancoring') && get_field('practice_areas_link') ) :?>
            <p><a href="<?php the_field('practice_areas_link');?>" class="btn btn-primary"><?php the_field('practice_areas_ancoring');?></a></p>
<?php endif; ?>

  <?php // get_template_part('template-parts/content-legaladvisors'); ?>

<?php // get_template_part('template-parts/content-comments'); ?>


<?php
if ( comments_open( get_the_ID()  )) {
  comments_template('', true );
}
?>

          </div> <!-- .col-md-8 -->
          <div class="col-lg-4 sidebar ftco-animate">

<?php get_sidebar(); ?>
          </div>
        </div>
      </div>
    </section> <!-- .section -->

<?php get_template_part('template-parts/content-subcribe'); ?>

<?php
get_footer();
?>
