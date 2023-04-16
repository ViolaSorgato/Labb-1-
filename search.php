<?php get_header(); ?>

<h1> <?php echo"Sökresultat för: "; the_search_query(); ?>  </h1>

<?php if( have_posts() ) : while( have_posts() )  :  the_post(); ?>
			
<?php get_template_part('template-parts/content', 'article'); ?>

<?php endwhile; endif; ?>

<nav class="navigation pagination"><?php echo the_posts_pagination(); ?> </nav>


<?php get_footer(); ?>