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

<?php endwhile; // end while ?>
<?php endif; // end if       ?>
<?php if( get_field('attorneys_e_areas_ancoring') && get_field('attorneys_areas_link') ) :?>
    <p><a href="<?php the_field('attorneys_areas_link');?>" class="btn btn-primary"><?php the_field('attorneys_e_areas_ancoring');?></a></p>
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
			                   <!--  <img src="images/person_1.jpg" alt=""> -->
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
            <div class="sidebar-box">
              <form action="#" class="search-form">
                <div class="form-group">
                  <span class="icon icon-search"></span>
                  <input type="text" class="form-control" placeholder="Type a keyword and hit enter">
                </div>
              </form>
            </div>
            <div class="sidebar-box ftco-animate">
              <div class="categories">
                <h3>Categories</h3>
                <li class="active"><a href="#">Family Law <span class="ion-ios-arrow-forward"></span></a></li>
                <li><a href="#">Business Law <span class="ion-ios-arrow-forward"></span></a></li>
                <li><a href="#">Criminal Law <span class="ion-ios-arrow-forward"></span></a></li>
                <li><a href="#">Insurance Law <span class="ion-ios-arrow-forward"></span></a></li>
                <li><a href="#">Emloyment Law <span class="ion-ios-arrow-forward"></span></a></li>
                <li><a href="#">Property Law <span class="ion-ios-arrow-forward"></span></a></li>
              </div>
            </div>

            <div class="sidebar-box ftco-animate">
              <h3>Recent Blog</h3>
              <div class="block-21 mb-4 d-flex">
                <a class="blog-img mr-4" style="background-image: url(images/image_1.jpg);"></a>
                <div class="text">
                  <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
                  <div class="meta">
                    <div><a href="#"><span class="icon-calendar"></span> January 15, 2019</a></div>
                    <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                    <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                  </div>
                </div>
              </div>
              <div class="block-21 mb-4 d-flex">
                <a class="blog-img mr-4" style="background-image: url(images/image_2.jpg);"></a>
                <div class="text">
                  <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
                  <div class="meta">
                    <div><a href="#"><span class="icon-calendar"></span> January 15, 2019</a></div>
                    <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                    <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                  </div>
                </div>
              </div>
              <div class="block-21 mb-4 d-flex">
                <a class="blog-img mr-4" style="background-image: url(images/image_3.jpg);"></a>
                <div class="text">
                  <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
                  <div class="meta">
                    <div><a href="#"><span class="icon-calendar"></span> January 15, 2019</a></div>
                    <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                    <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                  </div>
                </div>
              </div>
            </div>

            <div class="sidebar-box ftco-animate">
              <h3>Tag Cloud</h3>
              <div class="tagcloud">
                <a href="#" class="tag-cloud-link">dish</a>
                <a href="#" class="tag-cloud-link">menu</a>
                <a href="#" class="tag-cloud-link">food</a>
                <a href="#" class="tag-cloud-link">sweet</a>
                <a href="#" class="tag-cloud-link">tasty</a>
                <a href="#" class="tag-cloud-link">delicious</a>
                <a href="#" class="tag-cloud-link">desserts</a>
                <a href="#" class="tag-cloud-link">drinks</a>
              </div>
            </div>

            <div class="sidebar-box ftco-animate">
              <h3>Paragraph</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus itaque, autem necessitatibus voluptate quod mollitia delectus aut, sunt placeat nam vero culpa sapiente consectetur similique, inventore eos fugit cupiditate numquam!</p>
            </div>
          </div>

        </div>
      </div>
    </section> <!-- .section -->

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
