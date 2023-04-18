<?php get_header(); ?>
<main>
			<section>
				<div class="container">
					<div class="row">
						<div id="primary" class="col-xs-12 col-md-9">
						<h1><?php wp_title(''); ?></h1>

<?php if( have_posts() ) : while( have_posts() )  :  the_post(); ?>
			
<?php get_template_part('template-parts/content', 'archive'); ?>

<?php endwhile; endif; ?>


<!-- PAGINERING SER INTE UT SOM I MOCKUP, HUR LÄGGER JAG TILL CSS klass ? -->

<nav class="navigation pagination">
<?php echo paginate_links(); ?> <!-- Fetching pagenate links if they are needed -->
</nav>

</div>
				</div>
			</section>
		</main>

<?php get_footer(); ?>