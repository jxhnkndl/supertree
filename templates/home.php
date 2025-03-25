<?php /* Template Name: Home */ ?>

<?php get_header(); ?>

<?php 
  $main_headline = get_field( 'headline' );
  $media_heading = get_field( 'media_section_heading' );
  $about_heading = get_field( 'biography_section_heading');
  $biography = get_field( 'biography' );
  $concerts_heading = get_field( 'concerts_section_heading' );
  $contact_heading = get_field( 'contact_section_heading' );
  $contact_body = get_field( 'contact_section_body' );
  $instagram_url = get_field( 'instagram_profile_url' );
  $youtube_url = get_field( 'youtube_page_url');
?>

<main>
  <!-- Hero Section -->
  <section class="hero-section">
    <video class="hero-section-video-container" autoplay muted loop>
      <source src="<?php echo get_template_directory_uri(  ) . '/assets/video/supertree-hero-video.mp4' ?>">
    </video>
    <div class="hero-section-content-container side-padding">
      <div class="hero-section-logo-container">
        <img src="<?php echo get_template_directory_uri() . '/assets/images/supertree_logo.png' ?>" alt="Supertree is a powerhouse 90s alternative rock cover band" class="hero-section-logo-img">
      </div>
      <a class="btn cta-btn-mobile">Book Now</a>
    </div>
  </section>

  <!-- Headline Section -->
  <section class="headline-section">
    <div class="side-padding">
      <div class="container headline-container">
        <div class="headline-icon-container">
          <img src="<?php echo get_template_directory_uri() . '/assets/images/triple-infinity-orange.svg' ?>" alt="Triple infinity symbol" class="headline-icon">
        </div>
        <h1 class="headline"><?php echo esc_html( $main_headline ); ?></h1>
      </div>
    </div>
  </section>
</main>

<?php get_footer(); ?>