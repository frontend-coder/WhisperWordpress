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
wp_reset_postdata();
?>

            </div>
          </div>
        </div>

    	</div>
    </section>


    <section class="ftco-section-parallax bg-secondary">
      <div class="parallax-img d-flex align-items-center">
        <div class="container">
          <div class="row d-flex justify-content-center">
            <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
              <h2>Subcribe to our Newsletter</h2>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in</p>
              <div class="row d-flex justify-content-center mt-4 mb-4">
                <div class="col-md-8">
                  <form action="#" class="subscribe-form">
                    <div class="form-group d-flex">
                      <input type="text" class="form-control" placeholder="Enter email address">
                      <input type="submit" value="Subscribe" class="submit px-3">
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>


<?php
get_footer();
?>

