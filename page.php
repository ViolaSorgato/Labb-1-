<!-- Generell mall till sidor, om man vill lägga till nya-->

<?php get_header(); ?>

<?php
     if( have_posts() ){

		while( have_posts() ){

			the_post();
			the_content();
		}

	 }
	 ?>
						
<?php get_footer(); ?>