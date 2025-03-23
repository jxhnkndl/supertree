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
        <a href="#" class="header-logo-link">
          <div class="header-logo">
            <img src="<?php echo get_template_directory_uri() . '/assets/images/triple-infinity-orange.svg' ?>" alt="Supertree is a powerhouse 90s alternative rock cover band" class="logo-icon"/>
            Supertree
          </div>
        </a>
        <!-- Desktop Nav Links -->
        <nav class="nav-desktop">
          <ul class="nav-desktop-links">
            <li class="nav-desktop-link-container">
              <a href="#media" class="nav-desktop-link">Media</a>
            </li>
            <li class="nav-desktop-link-container">
              <a href="#about" class="nav-desktop-link">About</a>
            </li>
            <li class="nav-desktop-link-container">
              <a href="#concerts" class="nav-desktop-link">Concerts</a>
            </li>
            <li class="nav-desktop-link-container">
              <a href="#contact" class="nav-desktop-link">Contact</a>
            </li>
          </ul>
        </nav>
      </div>
      <!-- Desktop Header CTA Button -->
      <a href="#contact" class="header-cta-btn">Book Now</a>
    </div>
  </header>