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
					<a class="button" href="#about">Learn More</a>
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
			<section class="home-staff">
				<div class="wrap">
					<h1>Awesome People Behind</h1>
					<h2>Vimle Universal Solutions - Philippines</h2>

					<!-- staff-list -->
					<div class="staff-list clear">

						<!-- vimle president -->
						<div class="vpres">
							<div class="staff-img" style="background-image: url(<?php echo bloginfo('template_url');?>/img/daniel.png);">
								<div class="staff-des">
									<h3>Daniel Audunsson</h3>
									<p>President</p>
								</div>
							</div>
						</div>
						<!-- /vimle president -->

						<div class="ph-staff clear">
							<?php if( have_rows('staff') ): ?>
							<?php while ( have_rows('staff') ) : the_row(); ?>
							
								<div class="column-4">
									<div class="staff-img" style="background-image: url(<?php the_sub_field('staff_picture'); ?>);">
										<div class="staff-des">
											<h3><?php the_sub_field('staff_name'); ?></h3>
											<p><?php the_sub_field('job_title'); ?></p>
										</div>
									</div>
								</div>
							
							<?php endwhile; ?>
							<?php endif; ?>
						</div>

						<div class="ch-staff clear">
						<?php if( have_rows('ch_staff') ): ?>
						<?php while ( have_rows('ch_staff') ) : the_row(); ?>

							<div class="column-4">
								<div class="staff-img" style="background-image: url(<?php the_sub_field('ch_staff_picture'); ?>);">
									<div class="staff-des">
										<h3><?php the_sub_field('ch_staff_name'); ?></h3>
										<p><?php the_sub_field('ch_job_title'); ?></p>
									</div>
								</div>
							</div>

						<?php endwhile; ?>
						<?php endif; ?>
						</div>

						<div class="us-staff clear">
						<?php if( have_rows('us_staff') ): ?>
						<?php while ( have_rows('us_staff') ) : the_row(); ?>

							<div class="column-4">
								<div class="staff-img" style="background-image: url(<?php the_sub_field('us_staff_picture'); ?>);">
									<div class="staff-des">
										<h3><?php the_sub_field('us_staff_name'); ?></h3>
										<p><?php the_sub_field('us_job_title'); ?></p>
									</div>
								</div>
							</div>

						<?php endwhile; ?>
						<?php endif; ?>
						</div>


						<div class="staff-selector clear">
							<button data-button="staff-select" data-staff="ph">Philippines</button>
							<button data-button="staff-select" data-staff="ch">China</button>
							<button data-button="staff-select" data-staff="us">United States</button>
						</div>

					</div>
					<!-- /staff-list -->

					
					
				</div>
			</section>
			<!-- /home-home-staff -->


		<?php endwhile; else: ?>

				<h2><?php _e( 'Sorry, nothing to display.', 'tranx' ); ?></h2>

		<?php endif; ?>

		<!-- contact-form-modal -->
		<?php echo do_shortcode('[contact-form-7 id="9" title="Contact Us"]'); ?>
		<!-- /contact-form-modal -->

	</main>
	<!-- /main -->

<?php get_footer(); ?>
