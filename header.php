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
<!-- Lägger till dynamisk logo -->
					<div class="col-xs-8 col-sm-6">
					    <a class="logo" href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a>
					</div>

<!-- Dynamisk sökfält som leder till söksidan -->
					<div class="col-sm-6 hidden-xs">
						<?php get_search_form(); ?>
					</div>

<!-- Container och styling till hamburgaremeny -->
		            <div class="col-xs-4 text-right visible-xs">
						<div class="mobile-menu-wrap">
						    <i class="fa fa-search"></i>
							<i class="fa fa-bars menu-icon"></i>
                        </div>
                    </div>
				</div>
			</div>
        </header>

<!-- Dynamisk sökfält som leder till söksidan -->
        <div class="mobile-search">
		<?php get_search_form(); ?>
        </div>

		<nav id="nav">
			<div class="container">
				<div class="row">
					<div class="col-xs-12">

<!-- Huvudmeny som leder till vissa andra sidor-->
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

<!-- Öppnar main och divvar som stängs i footer		 -->
<main>
	<section>
		<div class="container">
			<div class="row">