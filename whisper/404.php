<?php
get_header();
?>
<?php if(get_field('errorr_picture', 'option')): ?>
    <section class="hero-wrap hero-wrap-2" style="background-image: url(<?php $error_pic = get_field('errorr_picture', 'option'); echo $error_pic[url]; ?>);" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-center">
          <div class="col-md-9 ftco-animate pb-5 text-center">
<?php if(get_field('errorr_title', 'option')) :?>
            <h1 class="mb-3 bread"> <?php the_field('errorr_title', 'option');?> </h1>
<?php endif; ?>
<?php if(get_field('errorr_descr', 'option')) :?>
<p> <?php the_field('errorr_descr', 'option');?>
          </p>
<?php endif; ?>

          <?php get_template_part('template-parts/content-breadcrumbs'); ?>

          </div>
        </div>
      </div>
    </section>
  <?php endif; ?>

    <section class="ftco-section ftco-degree-bg">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 order-md-last ftco-animate">
  <?php
          the_widget( 'WP_Widget_Recent_Posts' );
          ?>

<div class="widget widget_categories">
            <h2 class="widget-title">Самые популярные рубрики</h2>
            <ul>
              <?php
              wp_list_categories( array(
                'orderby'    => 'count',
                'order'      => 'DESC',
                'show_count' => 1,
                'title_li'   => '',
                'number'     => 10,
              ) );
              ?>
            </ul>
          </div><!-- .widget -->

<div class="widget widget_categories">
  <?php
          /* translators: %1$s: smiley */
          $whisper_archive_content = '<p>' . sprintf( esc_html__( 'Попробуйте поискать в ежемесячных архивах. %1$s', 'whisper' ), convert_smilies( ':)' ) ) . '</p>';
          the_widget( 'WP_Widget_Archives', 'dropdown=1', "after_title=</h2>$whisper_archive_content" );

          the_widget( 'WP_Widget_Tag_Cloud' );
          ?>

</div><!-- .widget -->






   <?php get_template_part('template-parts/content-legaladvisors'); ?>


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
