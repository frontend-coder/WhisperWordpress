<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Whisper
 */

?>
<section class="ftco-section-parallax bg-secondary">
      <div class="parallax-img d-flex align-items-center">
        <div class="container">
          <div class="row d-flex justify-content-center">
            <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
<?php if(get_field('subcribe_newsletter_title', 'option')) :?>
              <h2><?php the_field('subcribe_newsletter_title', 'option');?></h2>
<?php endif; ?>
<?php if(get_field('subcribe_newsletter_descr', 'option')) :?>
              <p><?php the_field('subcribe_newsletter_descr', 'option');?></p>
<?php endif; ?>
<?php if(get_field('subcribe_newsletter_code_form', 'option')) :?>
              <div class="row d-flex justify-content-center mt-4 mb-4">
                <div class="col-md-8">

<?php $subcribe_newsletter_code_form = get_field('subcribe_newsletter_code_form', 'option');
 echo do_shortcode( $subcribe_newsletter_code_form );  ?>

                <!--   <form action="#" class="subscribe-form">
                    <div class="form-group d-flex">
                      <input type="text" class="form-control" placeholder="Enter email address">
                      <input type="submit" value="Subscribe" class="submit px-3">
                    </div>
                  </form> -->

                </div>
              </div>
 <?php endif; ?>

            </div>
          </div>
        </div>
      </div>
    </section>
