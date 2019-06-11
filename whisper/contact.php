<?php
/**
Template Name: contact-page-tamplate
Template Post Type: post, page
**/
?>
<?php
get_header();
?>

    <section class="hero-wrap hero-wrap-2" style="background-image: url(<?php $thumb_id = get_post_thumbnail_id(); $thumb_url = wp_get_attachment_image_src($thumb_id,'singlepage-thamb', false); echo $thumb_url[0];   ?>);" data-stellar-background-ratio="0.5">
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


    <section class="ftco-section contact-section">
      <div class="container">
        <div class="row d-flex mb-5 contact-info">
          <div class="col-md-12 mb-4">
<?php if(get_field('contact_page_title')) :?>
            <h2 class="h3"><?php the_field('contact_page_title');?></h2>
<?php endif; ?>
          </div>
          <div class="w-100"></div>
          <div class="col-md-3">
<?php if(get_field('contact_page_adress')) :?>
            <p><span>Адресс:</span> <?php the_field('contact_page_adress');?></p>
<?php endif; ?>
          </div>
          <div class="col-md-3">
<?php if(get_field('contact_page_phone')) :?>
            <p><span>Телефон:</span> <a href="tel:<?php $contacts_info_phone = get_field('contact_page_phone'); echo str_replace(array( " ", "(", ")", "-"), "", $contacts_info_phone ); ?>"><?php the_field('contact_page_phone');?></a></p>
  <?php endif; ?>

          </div>
          <div class="col-md-3">
<?php if(get_field('contact_page_email')) :?>
            <p><span>Email:</span> <a href="mailto:<?php the_field('contact_page_email');?>"><?php the_field('contact_page_email');?></a></p>
  <?php endif; ?>

          </div>
          <div class="col-md-3">
<?php if(get_field('contact_page_website')) :?>
            <p><span>Вебсайт:</span> <a href="<?php the_field('contact_page_website');?>"><?php $contact_page_website = get_field('contact_page_website'); echo str_replace(array( " ", "(", ")", "/", "https:", "http:", "https://", "http://"), "", $contact_page_website ); ?></a></p>
<?php endif; ?>

          </div>
        </div>
        <div class="row block-9">
          <div class="col-lg-6 order-md-last d-flex">

<?
 if(get_field('contact_page_forma')) :
$shotcode_fos = get_field('contact_page_forma');
 echo do_shortcode($shotcode_fos);
 endif; ?>

          <!--   <form action="#" class="bg-light p-5 contact-form">
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Your Name">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Your Email">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Subject">
              </div>
              <div class="form-group">
                <textarea name="" id="" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
              </div>
              <div class="form-group">
                <input type="submit" value="Send Message" class="btn btn-primary py-3 px-5">
              </div>
            </form> -->

          </div>

          <div class="col-lg-6 d-flex">
          	<div id="maps" class="bg-whites">

         <?php if(get_field('contact_yandex_maps')) :?>
          <?php the_field('contact_yandex_maps');?>
<?php endif; ?>
            </div>
          </div>
        </div>
      </div>
    </section>

  <?php get_template_part('template-parts/content-subcribe'); ?>

   <?php
get_footer();
?>