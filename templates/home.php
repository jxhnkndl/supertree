<?php /* Template Name: Home */ ?>

<?php get_header(); ?>

<main>
  <section class="hero-section">
    <video class="hero-section-video-container" autoplay muted loop>
      <source src="<?php echo get_template_directory_uri(  ) . '/assets/video/supertree-hero-video.mp4' ?>">
    </video>
    <div class="hero-section-content-container side-padding">
      <div class="hero-section-logo-container">
        <img src="<?php echo get_template_directory_uri() . '/assets/images/supertree_logo.png' ?>" alt="Supertree is a powerhouse 90s alternative rock cover band" class="hero-section-logo-img">
      </div>
      <button class="btn cta-btn-mobile">Book Now</button>
    </div>
  </section>
</main>

<?php get_footer(); ?>