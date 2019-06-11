<?php
/**
Template Name: testimonial-page-tamplate
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

            <?php get_template_part('template-parts/content-breadcrumbs'); ?>

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
    'post_type'=>'testimonial', // Your post type name
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
        				<span style="background-image: url(<?php $thumb_id = get_post_thumbnail_id();
                    $thumb_url = wp_get_attachment_image_src($thumb_id,'testimonials-thumb', false);
                    echo $thumb_url[0];   ?>);" ></span>
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
wp_reset_postdata(); ?>

            </div>
          </div>
        </div>

    	</div>
    </section>

  <?php get_template_part('template-parts/content-subcribe'); ?>

<?php
get_footer();
?>