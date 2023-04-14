<article>
	<?php the_post_thumbnail('full'); ?>
    <h2 class="title">
    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
    </h2>
    <ul class="meta">
		<li>
			<i class="fa fa-calendar"></i><?php the_date(); ?>
		</li>
		<li>
			<i class="fa fa-user"></i> <?php the_author(); ?>
		</li>
		<li>
			<i class="fa fa-tag"></i> <?php the_category(','); ?>
        </li>
	</ul>
    <p> <?php the_content(); ?> </p>
</article>