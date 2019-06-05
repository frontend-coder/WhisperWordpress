<?php
/**
Template Name: attorneys-page-tamplate
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

            <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Attorneys <i class="ion-ios-arrow-forward"></i></span></p>

          </div>
        </div>
      </div>
    </section>


    <section class="ftco-section bg-light">
    	<div class="container-fluid">
    		<div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 text-center heading-section ftco-animate">
          	<span class="subheading">Our Attorney</span>
            <h2 class="mb-4">Our Legal Attorneys</h2>
          </div>
        </div>
        <div class="row">

<?php
      $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

      $args = array(
    'post_type'=>'attorneys', // Your post type name
 'posts_per_page' => 8,
    'paged' => $paged,
);

      $loop = new WP_Query( $args );
      if ( $loop->have_posts() ) {
        while ( $loop->have_posts() ) : $loop->the_post();
          ?>

        	<div class="col-lg-3 col-sm-6">
        		<div class="block-2 ftco-animate">
	            <div class="flipper">
	              <div class="front" style="background-image: url(<?php $thumb_id = get_post_thumbnail_id();
										$thumb_url = wp_get_attachment_image_src($thumb_id,'attorneysmainbig-thamb', false);
										echo $thumb_url[0];   ?>);">
	                <div class="box">
	                  <h2><?= $post->post_title ?></h2>
<?php if(get_field("attorneys_position")): ?>
	                  <p><?= the_field('attorneys_position') ?></p>
<?php endif; ?>
	                </div>
	              </div>
	              <div class="back">
	                <!-- back content -->
	                <blockquote>
	                  <p>&ldquo;<?php
$content = get_the_excerpt();// или get_the_content()
$trimmed_content = wp_trim_words( $content, 30, '' );
echo $trimmed_content;
?>.&rdquo;</p>
	                </blockquote>
	                <div class="author d-flex">
	                  <div class="image mr-3 align-self-center">
	                  <!--   <img src="images/person_1.jpg" alt=""> -->
	                   <?php if (has_post_thumbnail($post-> ID)) : ?>
								<?= get_the_post_thumbnail($post-> ID, 'attorneysmainlitle-thamb', array('alt' => 'img-responsive') ); ?>
	<?php endif; //проверка миниатюры ?>
	                  </div>
	                  <div class="name align-self-center">
	    <a href="<?php the_permalink(); ?>">      	<?= $post->post_title ?></a>
<?php if(get_field("attorneys_position")): ?>
	                   <span class="position"><?= the_field('attorneys_position') ?></span>
<?php endif; ?>

	               </div>
	                </div>
	              </div>
	            </div>
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


       <!--        <ul>
                <li><a href="#">&lt;</a></li>
                <li class="active"><span>1</span></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li><a href="#">&gt;</a></li>
              </ul> -->
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
