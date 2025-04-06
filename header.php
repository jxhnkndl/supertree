<!DOCTYPE html>
<html lang="<?php bloginfo('language') ?>">
<head>
	<meta charset="<?php bloginfo('charset') ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php wp_head(); ?>
</head>
<body>
	<!-- Main Header -->
	<header class="header">
		<div class="header-container">
			<div class="header-main-nav">
				<!-- Brand Link -->
				<a href="#" class="header-logo-link" aria-label="Return to home page">
					<div class="header-logo">
						<img src="<?php echo get_template_directory_uri() . '/assets/images/triple-infinity-orange.svg' ?>" alt="Supertree is a powerhouse 90s alternative rock cover band" class="logo-icon"/>
						Supertree
					</div>
				</a>
				<!-- Desktop Nav Links -->
				<nav class="desktop-nav">
					<ul>
						<li><a href="#media">Media</a></li>
						<li><a href="#about">About</a></li>
						<li><a href="#contact">Contact</a></li>
						<!-- <li class="desktop-nav-link-container">
							<a href="#about" class="desktop-nav-link">About</a>
						</li>
						<li class="desktop-nav-link-container">
							<a href="#concerts" class="desktop-nav-link">Concerts</a>
						</li>
						<li class="desktop-nav-link-container">
							<a href="#contact" class="desktop-nav-link">Contact</a>
						</li> -->
					</ul>
				</nav>
			</div>
			<!-- Desktop Header CTA Button -->
			<a href="#contact" class="header-cta-btn">Book Now</a>
		</div>
	</header>
	<!-- Mobile Hamburger Menu Button -->
	<button class="hamburger-menu" aria-expanded="false">
		<div class="menu-bars">
			<div class="menu-bar menu-bar-top"></div>
			<div class="menu-bar menu-bar-bottom"></div>
		</div>
	</button>
	<!-- Mobile Nav Drawer -->
	<nav class="mobile-nav">
		<ul>
			<li>
				<a href="#media">Media</a>
				<div class="nav-mobile-link-divider"></div>
			</li>
			<li>
				<a href="#about">About</a>
				<div class="nav-mobile-link-divider"></div>
			</li>
			<li>
				<a href="#concerts">Concerts</a>
				<div class="nav-mobile-link-divider"></div>
			</li>
			<li>
				<a href="#contact">Contact</a>
				<div class="nav-mobile-link-divider"></div>
			</li>
			<li>
				<a href="https://www.youtube.com/@supertreemusic">YouTube</a>
				<div class="nav-mobile-link-divider"></div>
			</li>
			<li>
				<a href="https://www.instagram.com/supertree_music/">Instagram</a>
			</li>
		</ul>
		<div class="nav-mobile-footer-icon-container">
			<img src="<?php echo get_template_directory_uri() . '/assets/images/triple-infinity-white.svg' ?>" alt="Triple infinity" class="nav-footer-icon">
		</div>
	</nav>