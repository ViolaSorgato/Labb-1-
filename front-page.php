<?php
  get_header();
?>

<main>
			<section>
				<div class="container">
					<div class="row">
						<div class="col-xs-12">
							<div class="hero">
								<img src="<?php the_post_thumbnail(); ?>" />
								<div class="text">

								
<!-- VAR LÄGGER JAG TILL DETTA? <h1>Hej och välkommen!</h1> -->
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
					</div>
				</div>
			</section>
		</main>

				
								
<?php
get_footer();
?>