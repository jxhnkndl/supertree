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

$videos_args = array(
    'post_type' => 'video',
    'order' => 'ASC'
);

$videos_query = new WP_Query( $videos_args );

$concerts_args = array(
    'post_type' => 'concert',
    'order' => 'ASC'
);

$concerts_query = new WP_Query( $concerts_args );
?>

<main>
    <!-- Hero Section -->
    <section class="hero-section">
        <video class="hero-section-video" autoplay muted loop>
            <source src="<?php echo get_template_directory_uri(  ) . '/assets/video/supertree-hero-video.mp4' ?>">
        </video>
        <div class="hero-section-content-container side-padding">

                <figure class="hero-section-logo-container">
                    <img src="<?php echo get_template_directory_uri() . '/assets/images/supertree_logo.png' ?>" alt="Supertree is a powerhouse 90s alternative rock cover band">
                </figure>
                <a class="btn cta-btn-mobile">Book Now</a>

        </div>
    </section>
    <!-- Headline Section -->
    <section class="headline-section">
        <div class="side-padding">
            <div class="container headline-container">
                <div class="headline-icon-container">
                    <img src="<?php echo get_template_directory_uri() . '/assets/images/triple-infinity-orange.svg' ?>" alt="Triple infinity symbol">
                </div>
                <h1 class="headline"><?php echo esc_html( $main_headline ); ?></h1>
            </div>
        </div>
    </section>
    <!-- Media Section -->
    <section class="media-section">
        <div class="side-padding">
            <div class="container media-container">
                <div class="section-heading-container">
                    <img src="<?php echo get_template_directory_uri() . '/assets/images/triple-infinity-blue.svg' ?>" alt="Triple infinity symbol">
                    <h2><?php echo $media_heading ?></h2>
                </div>
                <div class="video-grid">
                <?php 
                    if ( $videos_query->have_posts() ) :
                        while ( $videos_query->have_posts() ) : $videos_query->the_post();
                            $youtube_url = get_field( 'youtube_url' );
                            $song_title = get_field( 'song_title' );
                            $artist = get_field( 'artist' );

                            // Create container and embed YouTube video
                            echo '<div class="video-container">';
                            echo '<a href="' . $youtube_url . '" target="_blank" class="video-container-link">';
                            echo '<iframe src="' . $youtube_url . '" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>';
                            echo '</a>';
                            echo '<p class="video-title">"' . $song_title . '"  •  ' . $artist . '</p>';
                            echo '</div>';
                        endwhile;
                    endif;
                ?>
                </div>
            </div>
        </div>
    </section>
    <!-- About Section -->
    <section class="about-section">
        <div class="side-padding">
            <div class="container about-container">
                <div class="section-heading-container">
                    <img src="<?php echo get_template_directory_uri() . '/assets/images/triple-infinity-orange.svg' ?>" alt="Triple infinity symbol">
                    <h2><?php echo $about_heading ?></h2>
                </div>
                <div class="biography">
                    <?php echo $biography; ?>
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>