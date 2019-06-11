<?php
get_header();
?>


    <section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_2.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-center">
          <div class="col-md-9 ftco-animate pb-5 text-center">
            <h1 class="mb-3 bread">Our Blog</h1>

       <?php get_template_part('template-parts/content-breadcrumbs'); ?>
          </div>
        </div>
      </div>
    </section>


    <section class="ftco-section bg-light">
      <div class="container">
   <!--      <div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">
          	<span class="subheading">Our Blog</span>
            <h2>Recent Blog</h2>
          </div>
        </div> -->
        <div class="row d-flex">
  <?php if (have_posts()) : while(have_posts()) : the_post(); ?>
          <div class="col-md-4 d-flex ftco-animate">
          	<div class="blog-entry justify-content-end">
              <a href="blog-single.html" class="block-20" style="background-image: url(<?php $thumb_id = get_post_thumbnail_id();
                    $thumb_url = wp_get_attachment_image_src($thumb_id,'singlepage-thamb', false);
                    echo $thumb_url[0];   ?>);">
              </a>
              <div class="text p-4 float-right d-block">
              	<div class="topper d-flex align-items-center">
              		<div class="one py-2 pl-3 pr-1 align-self-stretch">
              			<span class="day"><?php the_time('j'); ?></span>
              		</div>
              		<div class="two pl-0 pr-3 py-2 align-self-stretch">
              			<span class="yr"><?php the_time('Y'); ?></span>
              			<span class="mos"><?php the_time('F'); ?></span>
              		</div>
              	</div>
                <h3 class="heading mt-2"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                <p><?php
$content = get_the_excerpt();// или get_the_content()
$trimmed_content = wp_trim_words( $content, 16, '' );
echo $trimmed_content;
?></p>
              </div>
            </div>
          </div>

<?php endwhile; // end while ?>



        </div>
        <div class="row mt-5">
          <div class="col text-center">
            <div class="block-27 category-block-27">
              <?php pagination(); // пагинация, функция нах-ся в function.php ?>
            <!--   <ul>
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
        <?php else: // иначе вывести то что после оператора вставишь
?>


<?php endif; // end if
?>
      </div>
    </section>

 <?php get_template_part('template-parts/content-subcribe'); ?>

<?php
get_footer();
?>
