<?php
/**
Template Name: practice-page-tamplate
Template Post Type: post, page
**/
?>
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

            <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Practice Areas <i class="ion-ios-arrow-forward"></i></span></p>

          </div>
        </div>
      </div>
    </section>


    <section class="ftco-section bg-light">
    	<div class="container">
        <div class="row d-flex justify-content-center">

    <?php
      $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

      $args = array(
    'post_type'=>'practice', // Your post type name
    // 'posts_per_page' => 2,
    'paged' => $paged,
);

      $loop = new WP_Query( $args );
      if ( $loop->have_posts() ) {
        while ( $loop->have_posts() ) : $loop->the_post();
          ?>


          <div class="col-md-4 col-lg-3 text-center">
        		<div class="practice-area bg-white ftco-animate p-4">
        			<div class="icon d-flex justify-content-center align-items-center">
        				<span class="<?= the_field('practice_areas_icon') ?>"></span>
        			</div>
        			<h3 class="mb-3"><a href="<?php the_permalink(); ?>"><?= $post->post_title ?></a></h3>
        			<p><?php
$content = get_the_excerpt();// или get_the_content()
$trimmed_content = wp_trim_words( $content, 10, '' );
echo $trimmed_content;
?></p>
        		</div>
        	</div>
<?php
endwhile;
?>
        </div>


        <div class="row mt-5">
          <div class="col text-center">
            <div class="block-27">
<?php
$total_pages = $loop->max_num_pages;

if ($total_pages > 1){

  $current_page = max(1, get_query_var('paged'));

  echo paginate_links(array(
    'base' => get_pagenum_link(1) . '%_%',
       'format' => '/page/%#%',
  'current' => max( 1, get_query_var('paged') ),
  'total' => $total_pages,
    'total' => $total_pages,
    'type'         => 'list',
    'prev_text'    => __('« '),
    'next_text'    => __(' »'),
  ));
}
}
wp_reset_postdata();
?>

            </div>
          </div>
        </div>

    	</div>
    </section>

    <section class="ftco-consultation">
    	<div class="container-fluid">
    		<div class="row d-md-flex">
<?php if(get_field('practic_fon_pic')) :?>
    			<div class="half order-md-last mt-md-0 d-flex justify-content-center align-items-center img" style="background-image: url(<?php $lawfirm_picture = get_field('practic_fon_pic'); echo esc_url( $lawfirm_picture[url] ); ?>);">
<?php endif; ?>
    				<div class="overlay"></div>
    				<div class="desc text-center">
    					<div class="icon"><span class="flaticon-auction"></span></div>
<?php if(get_field('practic_pred_title')) :?>
    					<h1><a href="index.html"> <?php the_field('practic_pred_title');?> <br>
 <?php endif; ?>
<?php if(get_field('practic_pred_descr')) :?>
                <span><?php the_field('practic_pred_descr');?></span></a></h1>
<?php endif; ?>


            </div>
    			</div>
    			<div class="half p-3 p-md-5 ftco-animate">
<?php if(get_field('practic_contact_block')) :?>
    				<h3 class="mb-4 font-weight-bold"><?php the_field('practic_contact_block');?></h3>
<?php endif; ?>
<?
 if(get_field('shotcode_fos')) :
$shotcode_fos = get_field('shotcode_fos');
 echo do_shortcode($shotcode_fos);
 endif; ?>

    			</div>
    		</div>
    	</div>
    </section>

  <?php get_template_part('template-parts/content-subcribe'); ?>
<?php
get_footer();
?>

