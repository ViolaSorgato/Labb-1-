<!-- Sidan som visar sökresultat -->

<?php get_header(); ?>

<main>
    <section>
        <div class="container">
	        <div class="row">
		        <div id="primary" class="col-xs-12 col-md-8 col-md-offset-2">
                    <!-- Dynamisk titel för sökresultat -->
                    <h1> <?php echo"Sökresultat för: "; the_search_query(); ?>  </h1>
                    <div class="searchform-wrap">
                    <?php get_search_form(); ?>
                    </div>
                </div>
            </div>

 <!-- Loopar genom innehåll -->	
<?php if( have_posts() ) : while( have_posts() )  :  the_post(); ?>			
<?php get_template_part('template-parts/content', 'article'); ?>
<?php endwhile; endif; ?>


<!-- Paginering -->
<nav class="navigation pagination">	
        <?php echo paginate_links(); ?>
    </nav>				
</div>

<?php get_footer(); ?>
