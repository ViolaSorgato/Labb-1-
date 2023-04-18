<!-- Lägger tull styling och method till get_search_form. Method ska vara get -->

<form method="get" id="searchform" class="searchform">
	<label for="search" class="screen-reader-text"> Sök efter:<?php echo home_url( '/' ); ?></label>
	<input type="text" name="s" id="search" value="<?php the_search_query(); ?>" />
	<input type="submit" value="Sök" />
</form>