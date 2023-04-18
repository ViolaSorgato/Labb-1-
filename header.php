<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8" />
<title><?php wp_title(); ?></title>

<link href="<?php echo get_stylesheet_uri(); ?>" >  
<?php wp_head() ?>
</head>

<body>

	<div id="wrap">

		<header id="header">
			<div class="container">
				<div class="row">
					<div class="col-xs-8 col-sm-6">
					    <a class="logo" href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a>
					</div>

					<div class="col-sm-6 hidden-xs">
						<?php get_search_form(); ?>
					</div>

		            <div class="col-xs-4 text-right visible-xs">
						<div class="mobile-menu-wrap">
						    <i class="fa fa-search"></i>
							<i class="fa fa-bars menu-icon"></i>
                        </div>
                    </div>
				</div>
			</div>
        </header>

        <div class="mobile-search">
		<?php get_search_form(); ?>
        </div>

		<nav id="nav">
			<div class="container">
				<div class="row">
					<div class="col-xs-12">

<?php
wp_nav_menu(
    array(
        'menu' => 'primary',
        'container' => '',
        'theme_location' => 'primary',
        'items-wrap' => '<ul id="" class="menu">€3$s</ul>'
    )
    );
?>
					</div>
				</div>
			</div>
		</nav>

<main>
	<section>
		<div class="container">
			<div class="row">