<?php get_header(); ?>

<div id="primary" class="col-xs-12 col-md-9">
	<h1><?php wp_title(''); ?></h1>

	<?php if( have_posts() ) : while( have_posts() )  :  the_post(); ?>
    <?php get_template_part('template-parts/content', 'article'); ?>

	<?php endwhile; endif; ?>
					
	<nav class="navigation pagination">	
        <?php echo paginate_links(); ?>
    </nav>
</div>

<aside id="secondary" class="col-xs-12 col-md-3">
	<div id="sidebar">
		<?php dynamic_sidebar('sidebarwidget'); ?>		
	</div>
</aside>
						
<?php get_footer(); ?>