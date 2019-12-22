<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Sophia</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/css?family=Lato:400,700&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Playfair+Display:400i,700i&display=swap" rel="stylesheet">

	<!-- <link rel="stylesheet" href="css/normalize.css"> -->
	<!-- <link rel="stylesheet" href="css/fonts.css"> -->
	<!-- <link rel="stylesheet" href="style.css"> -->
	<?php wp_head(); ?> 
</head>
<body>
	
<header>
	<section class="control">
		<div class="control-block wrap">
			<div class="control-phone">
				<span class="phone-faw"></span>
				<span class="phone-number">Call +001 555 801 	</span>
			</div>
			<div class="control-menu">
				<ul class="control-menu-list">
					<li class="control-menu__item"><a href="#!">WELCOME MSG!</a></li>
					<li class="control-menu__item"><a href="#!">MY ACCOUNT</a></li>
					<li class="control-menu__item"><a href="#!">MY WHISTLIST</a></li>
					<li class="control-menu__item"><a href="#!">LOGIN</a></li>
				</ul>
			</div>
		</div>
	</section>
	<section class="header-nav wrap">
		<nav class="header-navigation">
			<?php wp_nav_menu( array(
				'container'       => 'ul',
				'container_class' => 'header-nav-list',
				'menu_class'      => 'header-nav-list',
				'menu_id'         => '',
				'echo'            => true,
				'fallback_cb'     => 'wp_page_menu',
				'before'          => '',
				'after'           => '',
				'link_before'     => '',
				'link_after'      => '',
				'items_wrap'      => '<ul id = "%1$s" class = "%2$s">%3$s</ul>',
				'depth'           => 0,
				'walker'          => '',
			) ); ?>
<!-- 			<ul class="header-nav-list">			 
				<li class="header-nav__item"><a href="#!">Home</a></li>
				<li class="header-nav__item"><a href="#!">Gallery</a></li>
				<li class="header-nav__item"><a href="#!">Categories</a></li>
				<li class="header-nav__item"><a href="#!">Pages</a></li>
			</ul>
 -->	

		</nav>
		<div class="header-logo"><a href="#!">Shophia</a></div>
		<!-- <div class="header-logo"><a href="#!"><?php the_custom_logo(  ) ?></a></div> -->
			
		<div class="header-social-btn">
			<ul class="header-social">
				<li><a href="#!" class="header-social__item"></a></li>
				<li><a href="#!" class="header-social__item"></a></li>
				<li><a href="#!" class="header-social__item"></a></li>
				<li><a href="#!" class="header-social__item"></a></li>
			</ul>
			<a href="#!" class="header-btn">RUPIAH</a>
		</div>
	</section>
</header>
<?php wp_reset_postdata(); ?>	