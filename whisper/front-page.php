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
				<span class="subheading">Practice Areas</span>
				<h2 class="mb-4">Practice Areas</h2>
			</div>
		</div>
		<div class="row d-flex justify-content-center">
			<div class="col-md-3 col-lg-2 text-center">
				<div class="practice-area ftco-animate">
					<div class="icon d-flex justify-content-center align-items-center">
						<span class="flaticon-family"></span>
					</div>
					<h3><a href="#">Family Law</a></h3>
				</div>
			</div>
			<div class="col-md-3 col-lg-2 text-center">
				<div class="practice-area ftco-animate">
					<div class="icon d-flex justify-content-center align-items-center">
						<span class="flaticon-auction"></span>
					</div>
					<h3><a href="#">Business Law</a></h3>
				</div>
			</div>
			<div class="col-md-3 col-lg-2 text-center">
				<div class="practice-area ftco-animate">
					<div class="icon d-flex justify-content-center align-items-center">
						<span class="flaticon-shield"></span>
					</div>
					<h3><a href="#">Insurance Law</a></h3>
				</div>
			</div>
			<div class="col-md-3 col-lg-2 text-center">
				<div class="practice-area ftco-animate">
					<div class="icon d-flex justify-content-center align-items-center">
						<span class="flaticon-handcuffs"></span>
					</div>
					<h3><a href="#">Criminal Law</a></h3>
				</div>
			</div>
			<div class="col-md-3 col-lg-2 text-center">
				<div class="practice-area ftco-animate">
					<div class="icon d-flex justify-content-center align-items-center">
						<span class="flaticon-house"></span>
					</div>
					<h3><a href="#">Property Law</a></h3>
				</div>
			</div>
			<div class="col-md-3 col-lg-2 text-center">
				<div class="practice-area ftco-animate">
					<div class="icon d-flex justify-content-center align-items-center">
						<span class="flaticon-employee"></span>
					</div>
					<h3><a href="#">Employment Law</a></h3>
				</div>
			</div>
			<div class="col-md-3 col-lg-2 text-center">
				<div class="practice-area ftco-animate">
					<div class="icon d-flex justify-content-center align-items-center">
						<span class="flaticon-fire"></span>
					</div>
					<h3><a href="#">Fire Accident</a></h3>
				</div>
			</div>
			<div class="col-md-3 col-lg-2 text-center">
				<div class="practice-area ftco-animate">
					<div class="icon d-flex justify-content-center align-items-center">
						<span class="flaticon-money"></span>
					</div>
					<h3><a href="#">Financial Law</a></h3>
				</div>
			</div>
			<div class="col-md-3 col-lg-2 text-center">
				<div class="practice-area ftco-animate">
					<div class="icon d-flex justify-content-center align-items-center">
						<span class="flaticon-medicine"></span>
					</div>
					<h3><a href="#">Drug Offenses</a></h3>
				</div>
			</div>
			<div class="col-md-3 col-lg-2 text-center">
				<div class="practice-area ftco-animate">
					<div class="icon d-flex justify-content-center align-items-center">
						<span class="flaticon-handcuffs"></span>
					</div>
					<h3><a href="#">Sexual Offenses</a></h3>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="ftco-section bg-secondary">
	<div class="container-fluid">
		<div class="row justify-content-center mb-5 pb-3">
			<div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
				<span class="subheading">Our Attorney</span>
				<h2 class="mb-4">Our Legal Attorneys</h2>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-3 col-sm-6">
				<div class="block-2 ftco-animate">
					<div class="flipper">
						<div class="front" style="background-image: url(/images/person_1.jpg);">
							<div class="box">
								<h2>Richard Anderson</h2>
								<p>Civil Lawyer</p>
							</div>
						</div>
						<div class="back">
							<!-- back content -->
							<blockquote>
								<p>&ldquo;Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.&rdquo;</p>
							</blockquote>
							<div class="author d-flex">
								<div class="image mr-3 align-self-center">
									<img src="images/person_1.jpg" alt="">
								</div>
								<div class="name align-self-center">Richard Anderson <span class="position">Civil Lawyer</span></div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-sm-6">
				<div class="block-2 ftco-animate">
					<div class="flipper">
						<div class="front" style="background-image: url(/images/person_2.jpg);">
							<div class="box">
								<h2>Jefford Maxillin</h2>
								<p>Business Lawyer</p>
							</div>
						</div>
						<div class="back">
							<!-- back content -->
							<blockquote>
								<p>&ldquo;Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.&rdquo;</p>
							</blockquote>
							<div class="author d-flex">
								<div class="image mr-3 align-self-center">
									<img src="images/person_2.jpg" alt="">
								</div>
								<div class="name align-self-center">Jefford Maxillin<span class="position">Business Lawyer</span></div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-sm-6">
				<div class="block-2 ftco-animate">
					<div class="flipper">
						<div class="front" style="background-image: url(/images/person_3.jpg);">
							<div class="box">
								<h2>Carlos Obing</h2>
								<p>Criminal Defense</p>
							</div>
						</div>
						<div class="back">
							<!-- back content -->
							<blockquote>
								<p>&ldquo;Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.&rdquo;</p>
							</blockquote>
							<div class="author d-flex">
								<div class="image mr-3 align-self-center">
									<img src="images/person_3.jpg" alt="">
								</div>
								<div class="name align-self-center">Carlos Obing <span class="position">Criminal Defense</span></div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-sm-6">
				<div class="block-2 ftco-animate">
					<div class="flipper">
						<div class="front" style="background-image: url(/images/person_4.jpg);">
							<div class="box">
								<h2>Nathan Smith</h2>
								<p>Insurance Lawyer</p>
							</div>
						</div>
						<div class="back">
							<!-- back content -->
							<blockquote>
								<p>&ldquo;Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.&rdquo;</p>
							</blockquote>
							<div class="author d-flex">
								<div class="image mr-3 align-self-center">
									<img src="images/person_4.jpg" alt="">
								</div>
								<div class="name align-self-center">Nathan Smith <span class="position">Insurance Lawyer</span></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>


<section class="ftco-consultation">
	<div class="container-fluid">
		<div class="row d-md-flex">
			<div class="half d-flex justify-content-center align-items-center img" style="background-image: url(images/bg_1.jpg);">
				<div class="overlay"></div>
				<div class="desc text-center">
					<div class="icon"><span class="flaticon-auction"></span></div>
					<h1><a href="index.html">Whisper <br><span>Law Firm Website</span></a></h1>
				</div>
			</div>
			<div class="half p-3 p-md-5 ftco-animate">
				<h3 class="mb-4">Free Consultation</h3>
				<form action="#">
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
						<input type="submit" value="Send message" class="btn btn-primary">
					</div>
				</form>
			</div>
		</div>
	</div>
</section>

<section class="ftco-section testimony-section bg-secondary">
	<div class="container">
		<div class="row justify-content-center mb-5 pb-3">
			<div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
				<span class="subheading">Testimonial</span>
				<h2 class="mb-4">Happy Clients</h2>
			</div>
		</div>
		<div class="row ftco-animate">
			<div class="col-md-12">
				<div class="carousel-testimony owl-carousel ftco-owl">
					<div class="item">
						<div class="testimony-wrap text-center py-4 pb-5">
							<div class="user-img mb-4" style="background-image: url(images/person_1.jpg)">
								<span class="quote d-flex align-items-center justify-content-center">
									<i class="icon-quote-left"></i>
								</span>
							</div>
							<div class="text p-3">
								<p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
								<p class="name">Arthur Browner</p>
								<span class="position">Client</span>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="testimony-wrap text-center py-4 pb-5">
							<div class="user-img mb-4" style="background-image: url(images/person_2.jpg)">
								<span class="quote d-flex align-items-center justify-content-center">
									<i class="icon-quote-left"></i>
								</span>
							</div>
							<div class="text p-3">
								<p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
								<p class="name">Arthur Browner</p>
								<span class="position">Client</span>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="testimony-wrap text-center py-4 pb-5">
							<div class="user-img mb-4" style="background-image: url(images/person_3.jpg)">
								<span class="quote d-flex align-items-center justify-content-center">
									<i class="icon-quote-left"></i>
								</span>
							</div>
							<div class="text p-3">
								<p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
								<p class="name">Arthur Browner</p>
								<span class="position">Client</span>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="testimony-wrap text-center py-4 pb-5">
							<div class="user-img mb-4" style="background-image: url(images/person_4.jpg)">
								<span class="quote d-flex align-items-center justify-content-center">
									<i class="icon-quote-left"></i>
								</span>
							</div>
							<div class="text p-3">
								<p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
								<p class="name">Arthur Browner</p>
								<span class="position">Client</span>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="testimony-wrap text-center py-4 pb-5">
							<div class="user-img mb-4" style="background-image: url(images/person_3.jpg)">
								<span class="quote d-flex align-items-center justify-content-center">
									<i class="icon-quote-left"></i>
								</span>
							</div>
							<div class="text p-3">
								<p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
								<p class="name">Arthur Browner</p>
								<span class="position">Client</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="ftco-section bg-light">
	<div class="container">
		<div class="row justify-content-center mb-5 pb-3">
			<div class="col-md-7 heading-section text-center ftco-animate">
				<span class="subheading">Our Blog</span>
				<h2>Recent Blog</h2>
			</div>
		</div>
		<div class="row d-flex">
			<div class="col-md-4 d-flex ftco-animate">
				<div class="blog-entry justify-content-end">
					<a href="blog-single.html" class="block-20" style="background-image: url('images/image_1.jpg');">
					</a>
					<div class="text p-4 float-right d-block">
						<div class="topper d-flex align-items-center">
							<div class="one py-2 pl-3 pr-1 align-self-stretch">
								<span class="day">15</span>
							</div>
							<div class="two pl-0 pr-3 py-2 align-self-stretch">
								<span class="yr">2019</span>
								<span class="mos">January</span>
							</div>
						</div>
						<h3 class="heading mt-2"><a href="#">All you want to know about industrial laws</a></h3>
						<p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
					</div>
				</div>
			</div>
			<div class="col-md-4 d-flex ftco-animate">
				<div class="blog-entry justify-content-end">
					<a href="blog-single.html" class="block-20" style="background-image: url('images/image_2.jpg');">
					</a>
					<div class="text p-4 float-right d-block">
						<div class="topper d-flex align-items-center">
							<div class="one py-2 pl-3 pr-1 align-self-stretch">
								<span class="day">12</span>
							</div>
							<div class="two pl-0 pr-3 py-2 align-self-stretch">
								<span class="yr">2019</span>
								<span class="mos">January</span>
							</div>
						</div>
						<h3 class="heading mt-2"><a href="#">All you want to know about industrial laws</a></h3>
						<p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
					</div>
				</div>
			</div>
			<div class="col-md-4 d-flex ftco-animate">
				<div class="blog-entry">
					<a href="blog-single.html" class="block-20" style="background-image: url('images/image_3.jpg');">
					</a>
					<div class="text p-4 float-right d-block">
						<div class="topper d-flex align-items-center">
							<div class="one py-2 pl-3 pr-1 align-self-stretch">
								<span class="day">10</span>
							</div>
							<div class="two pl-0 pr-3 py-2 align-self-stretch">
								<span class="yr">2019</span>
								<span class="mos">January</span>
							</div>
						</div>
						<h3 class="heading mt-2"><a href="#">All you want to know about industrial laws</a></h3>
						<p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>


<section class="ftco-gallery">
	<div class="container-wrap">
		<div class="row no-gutters">
			<div class="col-md-3 ftco-animate">
				<a href="images/image_1.jpg" class="gallery image-popup img d-flex align-items-center" style="background-image: url(images/image_1.jpg);">
					<div class="icon mb-4 d-flex align-items-center justify-content-center">
						<span class="icon-instagram"></span>
					</div>
				</a>
			</div>
			<div class="col-md-3 ftco-animate">
				<a href="images/image_2.jpg" class="gallery image-popup img d-flex align-items-center" style="background-image: url(images/image_2.jpg);">
					<div class="icon mb-4 d-flex align-items-center justify-content-center">
						<span class="icon-instagram"></span>
					</div>
				</a>
			</div>
			<div class="col-md-3 ftco-animate">
				<a href="images/image_3.jpg" class="gallery image-popup img d-flex align-items-center" style="background-image: url(images/image_3.jpg);">
					<div class="icon mb-4 d-flex align-items-center justify-content-center">
						<span class="icon-instagram"></span>
					</div>
				</a>
			</div>
			<div class="col-md-3 ftco-animate">
				<a href="images/image_4.jpg" class="gallery image-popup img d-flex align-items-center" style="background-image: url(images/image_4.jpg);">
					<div class="icon mb-4 d-flex align-items-center justify-content-center">
						<span class="icon-instagram"></span>
					</div>
				</a>
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
