<?php
/**
Template Name: main-page-tamplate
**/
?>
<?php
get_header();
?>


<?php
$header_pic = get_field('header_fon_pic');
$header_pic_link = $header_pic[url];
				 // whisper_debug($header_pic[url]);
				 // whisper_debug($header_pic[title]);
				 //  whisper_debug($header_pic[alt]);
if($header_pic_link) :
	?>
	<div class="hero-wrap js-fullheight" style="background-image: url(<?php echo esc_url($header_pic_link); ?>);" data-stellar-background-ratio="0.5">
	<?php endif; ?>

	<div class="overlay"></div>
	<div class="container">
		<div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center" data-scrollax-parent="true">
			<div class="col-md-10 text-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
				<?php if(get_field('header_title')) :?>
					<h2 class="subheading" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">
						<?php esc_attr(the_field('header_title'));?></h2>
				<?php endif; ?>

				<h1 class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">
					<?php while( has_sub_field('header_up') ):
						$header_slide_fon = get_sub_field('header_up_desk');
						?>
						<span><?php echo esc_attr( $header_slide_fon ); ?></span>
					<?php endwhile; ?>
				</h1>
<?php if(get_field('header_link_ankor') && get_field('header_link_page')) :?>
				<p><a href="<?php esc_url(the_field('header_link_page'));?>" class="btn btn-primary py-3 px-4">
					<?php esc_attr(the_field('header_link_ankor'));?></a></p>
<?php endif; ?>

			</div>
		</div>
	</div>
</div>

<section class="ftco-section ftco-no-pb services-section">
	<div class="container">
		<div class="row no-gutters d-flex">
<?php while( has_sub_field('work_benefits') ):
		$work_benefits_icon = get_sub_field('work_benefits_icon');
		$work_benefits_title = get_sub_field('work_benefits_title');
		$work_benefits_title_link = get_sub_field('work_benefits_title_link');
		$work_benefits_descr = get_sub_field('work_benefits_descr');
		?>
			<div class="col-md-3 text-center services align-self-stretch ftco-animate p-4">
				<div class="icon"><span class="<?php echo esc_attr($work_benefits_icon); ?>"></span></div>
				<div class="media-body">
					<h3 class="heading mb-3"><a href="<?php echo esc_url($work_benefits_title_link); ?>"><?php echo esc_attr( $work_benefits_title ); ?></a></h3>
					<p><?php echo esc_attr($work_benefits_descr); ?></p>
				</div>
			</div>
<?php endwhile; ?>
		</div>
	</div>
</section>

<!-- <?php
$lawfirm_picture = get_field('lawfirm_picture');
				 whisper_debug($lawfirm_picture[url]);
				 ?> -->
<section class="ftco-counter" id="section-counter">
	<div class="container-fluid">
		<div class="row d-flex">
			<div class="col-md-6 d-flex">

				<div class="img d-flex align-self-stretch align-items-center justify-content-center" style="background-image:url(<?php $lawfirm_picture = get_field('lawfirm_picture'); echo esc_url( $lawfirm_picture[url] ); ?>);">

<?php if(get_field('lawfirm_video')) :?>
					<a href="<?php esc_url( the_field('lawfirm_video') );?>" class="icon-video popup-vimeo d-flex justify-content-center align-items-center">
						<span class="icon-play"></span>
					</a>
<?php endif; ?>
				</div>
			</div>


			<div class="col-md-6 px-5 py-5">
				<div class="row justify-content-start pt-3 pb-3">
					<div class="col-md-12 heading-section ftco-animate">
						<?php if(get_field('lawfirm_fun_facts')) :?>
						<span class="subheading"><?php the_field('lawfirm_fun_facts');?></span>
						<?php endif; ?>
						<?php if(get_field('lawfirm_fun_title')) :?>
						<h2 class="mb-4"><?php the_field('lawfirm_fun_title');?></h2>
					<?php endif; ?>
					<?php if(get_field('lawfirm_fun_descr')) :?>
						<p><?php the_field('lawfirm_fun_descr');?></p>
					<?php endif; ?>
					</div>
				</div>
				<div class="row">
<?php while( has_sub_field('lawfirm_anim_number') ):
$lawfirm_anim_number_icon = get_sub_field('lawfirm_anim_number_icon');
$lawfirm_anim_number_num = get_sub_field('lawfirm_anim_number_num');
$lawfirm_anim_number_descr = get_sub_field('lawfirm_anim_number_descr');
				?>
					<div class="col-md-6 justify-content-center counter-wrap ftco-animate">
						<div class="block-18 text-center py-4 bg-light mb-4">
							<div class="text">
								<div class="icon d-flex justify-content-center align-items-center">
									<span class="<?php echo esc_attr( $lawfirm_anim_number_icon ); ?>"></span>
								</div>
								<strong class="number" data-number="<?php echo esc_attr( $lawfirm_anim_number_num ); ?>">0</strong>
								<span><?php echo esc_attr( $lawfirm_anim_number_descr ); ?></span>
							</div>
						</div>
					</div>
<?php endwhile; ?>
				</div>
			</div>
		</div>
	</div>
</section>




<section class="ftco-section bg-light">
	<div class="container">
		<div class="row justify-content-center mb-5 pb-3">
			<div class="col-md-7 text-center heading-section ftco-animate">
<?php if(get_field('practice_areas_descr')) :?>
				<span class="subheading"><?php the_field('practice_areas_descr');?></span>
<?php endif; ?>
<?php if(get_field('practice_areas_titlle')) :?>
				<h2 class="mb-4"><?php the_field('practice_areas_titlle');?></h2>
<?php endif; ?>

			</div>
		</div>

		<div class="row d-flex justify-content-center">

		<?php
			$posts = get_posts( array (
				'post_type' => 'practice',
				'numberposts' => 10,
				'order' => 'ASC',
			));
			if($posts):
// lawasf_debug($posts);
				?>
		<?php foreach ($posts as $post ): ?>
			<div class="col-md-3 col-lg-2 text-center">
				<div class="practice-area ftco-animate">
					<div class="icon d-flex justify-content-center align-items-center">
<?php if(get_field("practice_areas_icon")): ?>
						<span class="<?= the_field('practice_areas_icon') ?>"></span>
<?php endif; ?>
					</div>
					<h3><a href="<?php the_permalink(); ?>"><?= $post->post_title ?></a></h3>
				</div>
			</div>
<?php endforeach; //practice-areas  ?>
<?php endif; //practice-areas
		wp_reset_postdata();  ?>


		</div>
	</div>
</section>

<section class="ftco-section bg-secondary">
	<div class="container-fluid">
		<div class="row justify-content-center mb-5 pb-3">
			<div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
<?php if(get_field('attorneys_areas_descr')) :?>
				<span class="subheading"><?php the_field('attorneys_areas_descr');?></span>
<?php endif; ?>
<?php if(get_field('attorneys_areas_titlle')) :?>
				<h2 class="mb-4"><?php the_field('attorneys_areas_titlle');?></h2>
<?php endif; ?>
			</div>
		</div>
			<?php
		$posts = get_posts( array (
			'post_type' => 'attorneys',
			'numberposts' => 4
		));
		if($posts):
// lawasf_debug($posts);
			?>
		<div class="row">
<?php foreach ($posts as $post ): ?>


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

									<!-- <img src="images/person_1.jpg" alt=""> -->
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




		</div>
<?php endif; //attorneys
wp_reset_postdata();  ?>



	</div>
</section>


<section class="ftco-consultation">
	<div class="container-fluid">
		<div class="row d-md-flex">
			<div class="half d-flex justify-content-center align-items-center img" style="background-image: url(<?php $lawfirm_picture = get_field('mainpage_fos_picture'); echo esc_url( $lawfirm_picture[url] ); ?>);">
				<div class="overlay"></div>
				<div class="desc text-center">
					<div class="icon"><span class="flaticon-auction"></span></div>
<?php if(get_field('mainpage_fos_descr') && get_field('mainpage_fos_name') && get_field('mainpage_fos_links')   ) :?>
					<h1><a href="<?php the_field('mainpage_fos_links');?>"><?php the_field('mainpage_fos_name');?> <br><span><?php the_field('mainpage_fos_descr');?></span></a></h1>
<?php endif; ?>


				</div>
			</div>
			<div class="half p-3 p-md-5 ftco-animate">

<?php if(get_field('mainpage_fos_title')) :?>
				<h3 class="mb-4"><?php the_field('mainpage_fos_title');?></h3>
<?php endif; ?>
<?
 if(get_field('mainpage_fos')) :
$shotcode_fos = get_field('mainpage_fos');
 echo do_shortcode($shotcode_fos);
 endif; ?>

			</div>
		</div>
	</div>
</section>




<section class="ftco-section testimony-section bg-secondary">
	<div class="container">
		<div class="row justify-content-center mb-5 pb-3">
			<div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
		<?php if(get_field('happy_clients_descr')) :?>
				<span class="subheading"><?php the_field('happy_clients_descr');?></span>
<?php endif; ?>
<?php if(get_field('happy_clients_title')) :?>
				<h2 class="mb-4"><?php the_field('happy_clients_title');?></h2>
<?php endif; ?>
			</div>
		</div>
		<div class="row ftco-animate">
			<div class="col-md-12">
				<div class="carousel-testimony owl-carousel ftco-owl">

		<?php
			$posts = get_posts( array (
				'post_type' => 'testimonial'
//'numberposts' => 6
			));
			if($posts):
// lawasf_debug($posts);
				?>
<?php foreach ($posts as $post ): ?>
					<div class="item">
						<div class="testimony-wrap text-center py-4 pb-5">
							<div class="user-img mb-4" style="background-image: url(<?php $thumb_id = get_post_thumbnail_id();
										$thumb_url = wp_get_attachment_image_src($thumb_id,'testimonials-thumb', false);
										echo $thumb_url[0];   ?>)">
								<span class="quote d-flex align-items-center justify-content-center">
									<i class="icon-quote-left"></i>
								</span>
							</div>
							<div class="text p-3">
								<p class="mb-4">
								<?php
$content = get_the_excerpt();// или get_the_content()
$trimmed_content = wp_trim_words( $content, 19, '' );
echo $trimmed_content;
?>

								</p>
								<p class="name"><?= $post->post_title ?></p>
<?php if(get_field('happy_clients_proffi')) :?>
								<span class="position"><?= the_field('happy_clients_proffi') ?></span>
<?php endif; ?>
							</div>
						</div>
					</div>
	<?php endforeach; //testimonials  ?>
	<?php endif; //counseling
		wp_reset_postdata();  ?>



				</div>
			</div>
		</div>
	</div>
</section>

<section class="ftco-section bg-light">
	<div class="container">
		<div class="row justify-content-center mb-5 pb-3">
			<div class="col-md-7 heading-section text-center ftco-animate">

<?php if(get_field('blog_descr')) :?>
				<span class="subheading"><?php the_field('blog_descr');?></span>
<?php endif; ?>

<?php if(get_field('blog_title')) :?>
				<h2><?php the_field('blog_title');?></h2>
<?php endif; ?>

			</div>
		</div>
		<div class="row d-flex">
			<?php
			$posts = get_posts( array(
				'numberposts' => 3,
    //      'category'    => 'blog',
				'orderby'     => 'date',
				'order'       => 'DESC',
				'post_type'   => 'post',
  'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
) );

			foreach( $posts as $post ):
				setup_postdata($post);
				?>



			<div class="col-md-4 d-flex ftco-animate">
				<div class="blog-entry justify-content-end">
					<a href="blog-single.html" class="block-20" style="background-image: url(<?php $thumb_id = get_post_thumbnail_id();
										$thumb_url = wp_get_attachment_image_src($thumb_id,'mainblogpage-thamb', false);
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

<?php
endforeach;
wp_reset_postdata();
?>



		</div>
	</div>
</section>


<section class="ftco-gallery">
	<div class="container-wrap">
		<div class="row no-gutters">


		<?php
			$posts = get_posts( array (
				'post_type' => 'gallery',
'numberposts' => 4
			));
			if($posts):
// lawasf_debug($posts);
				?>
<?php foreach ($posts as $post ): ?>




			<div class="col-md-3 ftco-animate">
				<a href="<?php $thumb_id = get_post_thumbnail_id();
										$thumb_url = wp_get_attachment_image_src($thumb_id,'maingallery-thamb', false);
										echo $thumb_url[0];   ?>" class="gallery image-popup img d-flex align-items-center" style="background-image: url(<?php $thumb_id = get_post_thumbnail_id();
										$thumb_url = wp_get_attachment_image_src($thumb_id,'maingallery-thamb', false);
										echo $thumb_url[0];   ?>);">
					<div class="icon mb-4 d-flex align-items-center justify-content-center">
						<span class="icon-instagram"></span>

					</div>
				</a>
			</div>

<?php endforeach; //gallery  ?>
	<?php endif; //gallery
		wp_reset_postdata();  ?>



		</div>
	</div>
</section>

<?php get_template_part('template-parts/content-subcribe'); ?>

<?php
get_footer();
?>
