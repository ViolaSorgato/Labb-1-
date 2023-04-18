<!-- Fallback sidan, den visas om inget annat laddas -->

<?php get_header(); ?>

<!-- Lägger till div och bild -->
<div class="col-xs-12">
	<div class="hero">
		<?php the_post_thumbnail(); ?>
			<div class="text">

<!-- Loopar genom innehåll -->	
    <?php if( have_posts() ) : while( have_posts() )  :  the_post(); ?>
	<?php get_template_part('template-parts/content', 'welcome'); ?>
	<?php endwhile; endif; ?>							

        </div>
	</div>
</div>
								
<?php get_footer(); ?>