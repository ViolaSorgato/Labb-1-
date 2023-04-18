<?php
  get_header();
?>


<div class="col-xs-12">
	<div class="hero">
		<?php the_post_thumbnail(); ?>
			<div class="text">

								
<?php
     if( have_posts() ){

		while( have_posts() ){

			the_post();
			
            get_template_part('template-parts/content', 'welcome');
		}

	 }
	 ?>
        </div>
	</div>
</div>
			
								
<?php
get_footer();
?>