<!-- Mallsida till Undersida 3
Innehåll: titel och text-->

<?php get_header(); ?>

		<main>
			<section>
				<div class="container">
					<div class="row">
						<div id="primary" class="col-xs-12">
						<h1><?php the_title(); ?></h1>
						<p><?php the_content(); ?></p>
						</div>
					</div>
				</div>
			</section>
		</main>
			
<?php get_footer(); ?>