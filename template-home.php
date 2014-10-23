<?php /* Template Name: Homepage */ get_header(); ?>
		
	
	<!-- main -->
	<main class="main">

		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<!-- home-slider -->
			<section class="home-slider" id="home">
				<?php masterslider(1); ?>
				<div class="wrap">
					<h1>Choose Victory. Choose Vimle.</h1>
					<button class="btn-hallow">Contact Us</button>
				</div>
			</section>
			<!-- /home-slider -->

			<!-- home-intro -->
			<section class="home-intro">
				<div class="wrap">
					<h1>Progressive Minds. Innovative Service.</h1>
					<p>Vimle LLC is an online retail company founded in 2012. Our primary office is located in Arizona, USA. We have also established satellite offices in the Philippines and in China. Through the years, we have endeavored to forge a sterling reputation in online business. With over a hundred employees in multiple countries, together we work to deliver quality service to our valued customers in the United States, United Kingdom, and various other countries.</p>
					<button>Learn More</button>
				</div>
			</section>
			<!-- /home-intro -->

			<!-- home-carrer -->
			<section class="home-career" id="careers">
				<div class="wrap">
					<h1>We're curently looking for <b class="bold">Awesome</b> people to join our team.</h1>
					<h2>Current Career Openings:</h2>
					<button class="btn-hallow" data-modal="career">Brand Manager</button>
					<i>Click to see job qualifications and description</i>
				</div>
			</section>
			<!-- /home-carrer -->

			<!-- /home-about -->
			<section class="home-about">
				<div class="wrap">
					<h1>We are vimle.</h1>
					<p>Founded in 2012, Vimle LLC has been involved in online selling with many different brands.</p>
					
					<p>The company's grand design is made up of individual strategies that serves as a guide to achieve our visions and goals. We believe that the key component of success is not just to work hard, but also to work smart.</p> 
					
					<p>The company is spearheaded by dynamic leaders and managers who maintain a very conducive environment for everyone's personal and career growth. Our employees possess outstanding skills, show competence and reliability, are always hungry for new experiences and knowledge, and have great and interesting 
					characters.</p>
					
					<p>We care for our customers more than anyone else. Our dedication to bring only the best is outstanding and remarkable that we get a lot of humbling compliments from customers and suppliers.</p> 
					
					<p>Excitement, energy, passion and perseverance are key components in dealing with the roller coaster of highs and lows that online selling can stumble upon, and it takes a stable company to deal with these variances in a committed and focused way.</p>
					<button class="btn-hallow">Learn More</button>
				</div>
			</section>
			<!-- /home-about -->


			<!-- /home-employees -->
			<section class="home-staff">
				<div class="wrap">
					<h1>Awesome People Behind</h1>
					<h2>Vimle Universal Solutions - Philippines</h2>

					<div class="staff-list clear">
						<div class="column-4">
							<div class="staff-img">
								<h3>Name</h3>
								<p>Job Title</p>
							</div>
						</div>
						<div class="column-4">
							<div class="staff-img">
								<h3>Name</h3>
								<p>Job Title</p>
							</div>
						</div>
						<div class="column-4">
							<div class="staff-img">
								<h3>Name</h3>
								<p>Job Title</p>
							</div>
						</div>
						<div class="column-4">
							<div class="staff-img">
								<h3>Name</h3>
								<p>Job Title</p>
							</div>
						</div>
						<div class="column-4">
							<div class="staff-img">
								<h3>Name</h3>
								<p>Job Title</p>
							</div>
						</div>
						<div class="column-4">
							<div class="staff-img">
								<h3>Name</h3>
								<p>Job Title</p>
							</div>
						</div>
						<div class="column-4">
							<div class="staff-img">
								<h3>Name</h3>
								<p>Job Title</p>
							</div>
						</div>
						<div class="column-4">
							<div class="staff-img">
								<h3>Name</h3>
								<p>Job Title</p>
							</div>
						</div>
						<div class="column-4">
							<div class="staff-img">
								<h3>Name</h3>
								<p>Job Title</p>
							</div>
						</div>
						<div class="column-4">
							<div class="staff-img">
								<h3>Name</h3>
								<p>Job Title</p>
							</div>
						</div>
						<div class="column-4">
							<div class="staff-img">
								<h3>Name</h3>
								<p>Job Title</p>
							</div>
						</div>
						<div class="column-4">
							<div class="staff-img">
								<h3>Name</h3>
								<p>Job Title</p>
							</div>
						</div>
						<div class="column-4">
							<div class="staff-img">
								<h3>Name</h3>
								<p>Job Title</p>
							</div>
						</div>
						<div class="column-4">
							<div class="staff-img">
								<h3>Name</h3>
								<p>Job Title</p>
							</div>
						</div>
						<div class="column-4">
							<div class="staff-img">
								<h3>Name</h3>
								<p>Job Title</p>
							</div>
						</div>
					</div>
					
				</div>
			</section>
			<!-- /home-home-staff -->


		<?php endwhile; else: ?>

				<h2><?php _e( 'Sorry, nothing to display.', 'tranx' ); ?></h2>

		<?php endif; ?>

	</main>
	<!-- /main -->

<?php get_footer(); ?>
