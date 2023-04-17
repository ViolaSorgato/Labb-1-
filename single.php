<?php
  get_header();
?>

<main>
	<section>
		<div class="container">
			<div class="row">
				<div id="primary" class="col-xs-12 col-md-9">
<?php
     if( have_posts() ){

		while( have_posts() ){

			the_post();
			
            get_template_part('template-parts/content', 'article');
		}

	 }
?>		
                </div>
				<aside id="secondary" class="col-xs-12 col-md-3">
				    <div id="sidebar">
		            <?php dynamic_sidebar('sidebarwidget'); ?>
                    </div>
                </aside>
			</div>
		</div>
	</section>
</main>

						
<?php
get_footer();
?>