<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Whisper
 */

?>

<div class="row mt-5 pt-5">
  <div class="col-md-12">

<?php if(get_field('our_legal_advisors_title', 'option')) :?>
    <h2 class="mb-4 font-weight-bold"><?php the_field('our_legal_advisors_title', 'option');?></h2>
    <?php endif; ?>
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