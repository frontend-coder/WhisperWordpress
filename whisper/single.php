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

            <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span class="mr-2"><a href="blog.html">Blog <i class="ion-ios-arrow-forward"></i></a></span> <span>Practice Areas Single <i class="ion-ios-arrow-forward"></i></span></p>
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

            <div class="row mt-5 pt-5">
		          <div class="col-md-12">
		            <h2 class="mb-4 font-weight-bold">Our Legal Advisors</h2>
		          </div>

    <?php
    $posts = get_posts( array (
      'post_type' => 'attorneys',
      'orderby' => 'rand',
      'numberposts' => 4,
    ));
    if($posts):
// lawasf_debug($posts);
      ?>

<?php foreach ($posts as $post ): ?>



            	<div class="col-lg-6">
		        		<div class="block-2 ftco-animate">
			            <div class="flipper">
			              <div class="front" style="background-image: url(<?php $thumb_id = get_post_thumbnail_id();
                    $thumb_url = wp_get_attachment_image_src($thumb_id,'attorneysmainbig-thamb', false);
                    echo $thumb_url[0];   ?>);">
			                <div class="box">
			                  <h2><?= $post->post_title ?></h2>
			                  <p><?= the_field('attorneys_position') ?></p>
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
			                 <!--    <img src="images/person_1.jpg" alt=""> -->
<?php if (has_post_thumbnail($post-> ID)) : ?>
                <?= get_the_post_thumbnail($post-> ID, 'attorneysmainlitle-thamb', array('alt' => 'img-responsive') ); ?>
  <?php endif; //проверка миниатюры ?>

			                  </div>
			                  <div class="name align-self-center"><a href="<?php the_permalink(); ?>"><?= $post->post_title ?></a>
<?php if(get_field("attorneys_position")): ?>
                         <span class="position"><?= the_field('attorneys_position') ?></span>
<?php endif; ?>

                       </div>
			                </div>
			              </div>
			            </div>
			          </div>
		        	</div>

<?php endforeach; //attorneys  ?>
<?php endif; //attorneys
wp_reset_postdata();  ?>


            </div>



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
