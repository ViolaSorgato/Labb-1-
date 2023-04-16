<?php get_header(); ?>
<main>
			<section>
				<div class="container">
					<div class="row">
						<div id="primary" class="col-xs-12 col-md-9">
							<h1>Blogg</h1>

<?php if( have_posts() ) : while( have_posts() )  :  the_post(); ?>
			
<?php get_template_part('template-parts/content', 'archive'); ?>

<?php endwhile; endif; ?>

<nav class="navigation pagination"><?php echo the_posts_pagination(); ?> </nav>

</div>
				</div>
			</section>
		</main>

<?php get_footer(); ?>