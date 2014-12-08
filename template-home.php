<?php /* Template Name: Homepage */ get_header(); ?>
		
	
	<!-- main -->
	<main class="main">

		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<!-- home-slider -->
			<section class="home-slider" id="home">
				<?php masterslider(1); ?>
				<div class="wrap">
					<h1>Choose Victory. Choose Vimle.</h1>
					<a class="button btn-hallow" data-button="contact-open">Contact Us</a>
				</div>
			</section>
			<!-- /home-slider -->

			<!-- home-intro -->
			<section class="home-intro">
				<div class="wrap">
					<h1>Progressive Minds. Innovative Service.</h1>
					<p>Vimle LLC is an online retail company founded in 2012. Our primary office is located in Arizona, USA. We have also established satellite offices in the Philippines and in China. Through the years, we have endeavored to forge a sterling reputation in online business. With over a hundred employees in multiple countries, together we work to deliver quality service to our valued customers in the United States, United Kingdom, and various other countries.</p>
					<a data-button="learn-more" class="button">Learn More</a>
				</div>
			</section>
			<!-- /home-intro -->

			<!-- home-carrer -->
			<section class="home-career" id="careers">
				<div class="wrap">
					<h1>We're curently looking for <b class="bold">Awesome</b> people to join our team.</h1>
					<h2>Current Career Openings:</h2>


					<?php if( have_rows('career_openings') ): ?>
						<?php while ( have_rows('career_openings') ) : the_row(); ?>
							<a data-button="career" data-career="<?php the_sub_field('job_title'); ?>" class="button btn-hallow"><?php the_sub_field('job_title'); ?></a>
						<?php endwhile; ?>
					<?php endif; ?>
						

					<i>Click to see job qualifications and description</i>

					<div class="career-modal">
						<?php if( have_rows('career_openings') ): ?>
						<?php while ( have_rows('career_openings') ) : the_row(); ?>

							<div class="career-content modal-contents" data-career-content="<?php the_sub_field('job_title'); ?>">
								<a data-button="career-close" class="mClose"></a>
								<h3><?php the_sub_field('job_title'); ?></h3>
								<p><?php the_sub_field('job_description'); ?></p>
								<div class="note">You can email your résumé to : <b>careers@vimle.com</b></div>
							</div>

						<?php endwhile; ?>
						<?php endif; ?>
					</div>
				</div>
			</section>
			<!-- /home-carrer -->

			<!-- /home-about -->
			<section class="home-about" id="about">
				<div class="wrap">
					<h1><?php the_field('about_title'); ?></h1>
					<?php the_field('about_description'); ?>
					<a class="button btn-hallow" data-button="contact-open">Contact Us</a>
				</div>
			</section>
			<!-- /home-about -->


			<!-- /home-employees -->
			<section class="home-staff" id="staff">
				<div class="wrap">
					<h1>Awesome People Behind</h1>
					<h2>Vimle Universal Solutions - Philippines</h2>

					<!-- staff-list -->
					<div class="staff-list clear">

						<!-- vimle president -->
						<div class="vpres">
							<div class="staff-img">
								<img src="<?php echo bloginfo('template_url');?>/img/daniel.png" alt="">
							</div>
						</div>
						<!-- /vimle president -->

						<div class="us-staff clear">
							<?php if( have_rows('us_staff') ): ?>
							<?php while ( have_rows('us_staff') ) : the_row(); ?>

								<div class="column-4">
									<div class="staff-img">

										<?php $img = get_sub_field('us_staff_picture'); // check if staff image is set?>
									  	<?php if($img) { ?>
									    	<img src="<?php echo $img; ?>" alt="<?php the_sub_field('us_staff_name'); ?>">
									    <?php } else { ?>
									    	<img src="<?php echo bloginfo('template_url');?>/img/default-staff.png" alt="<?php the_sub_field('us_staff_name'); ?>">
									  	<?php } ?>


									</div>
								</div>

							<?php endwhile; ?>
							<?php endif; ?>
						</div>
						<!-- /us-staff -->

						<div class="ph-staff clear">
							<?php if( have_rows('staff') ): ?>
							<?php while ( have_rows('staff') ) : the_row(); ?>
							
								<div class="column-4">
									<div class="staff-img">

										<?php $img = get_sub_field('staff_picture'); // check if staff image is set?>
									  	<?php if($img) { ?>
									    	<img src="<?php echo $img; ?>" alt="<?php the_sub_field('staff_name'); ?>">
									    <?php } else { ?>
									    	<img src="<?php echo bloginfo('template_url');?>/img/default-staff.png" alt="<?php the_sub_field('staff_name'); ?>">
									  	<?php } ?>

									</div>
								</div>
							
							<?php endwhile; ?>
							<?php endif; ?>
						</div>
						<!-- /ph-staff -->

						<div class="ch-staff clear">
							<?php if( have_rows('ch_staff') ): ?>
							<?php while ( have_rows('ch_staff') ) : the_row(); ?>

								<div class="column-4">
									<div class="staff-img">

										<?php $img = get_sub_field('ch_staff_picture'); // check if staff image is set?>
									  	<?php if($img) { ?>
									    	<img src="<?php echo $img; ?>" alt="<?php the_sub_field('ch_staff_name'); ?>">
									    <?php } else { ?>
									    	<img src="<?php echo bloginfo('template_url');?>/img/default-staff.png" alt="<?php the_sub_field('ch_staff_name'); ?>">
									  	<?php } ?>

									</div>
								</div>

							<?php endwhile; ?>
							<?php endif; ?>
						</div>
						<!-- /ch-staff -->

						<div class="staff-selector clear">
							<button data-button="staff-select" data-staff="us">United States</button>
							<button data-button="staff-select" data-staff="ph">Philippines</button>
							<button data-button="staff-select" data-staff="ch">China</button>
						</div>
						<!-- /staff-selector -->

					</div>
					<!-- /staff-list -->
					
				</div>
			</section>
			<!-- /home-home-staff -->


		<?php endwhile; else: ?>

				<h2><?php _e( 'Sorry, nothing to display.', 'vimle' ); ?></h2>

		<?php endif; ?>

		

	</main>
	<!-- /main -->

	<div class='toTop'></div>

<?php get_footer(); ?>
