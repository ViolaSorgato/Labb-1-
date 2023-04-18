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
			</div>
		</div>
	</section>
</main>

						
<?php
get_footer();
?>