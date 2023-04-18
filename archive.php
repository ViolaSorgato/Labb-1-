<?php get_header(); ?>

<div id="primary" class="col-xs-12 col-md-9">
	<h1>Arkiv: <?php wp_title(''); ?></h1>

	<?php if( have_posts() ) : while( have_posts() )  :  the_post(); ?>
    <?php get_template_part('template-parts/content', 'archive'); ?>

	<?php endwhile; endif; ?>
					
	<nav class="navigation pagination">	
        <?php echo paginate_links(); ?>
    </nav>
</div>

<aside id="secondary" class="col-xs-12 col-md-3">
				    <div id="sidebar">
					<ul>
						<li>
						<?php dynamic_sidebar('sidebar-sök'); ?>
	                    </li>  
					</ul>
					<ul role="navigation">
					<?php dynamic_sidebar('sidebar-sidor'); ?>
					<?php dynamic_sidebar('sidebar-arkiv'); ?>
					<?php dynamic_sidebar('sidebar-kategorier'); ?>			
					</ul>
                    </div>
                </aside>
						
<?php get_footer(); ?>