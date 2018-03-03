<?php
require_once('modal/class.Base.php');
require_once('modal/class.Testimony.php');
require_once(STYLESHEETPATH . '/includes/wordpress-tweaks.php');
// Load custom visual composer templates
loadVCTemplates();
add_action( 'wp_enqueue_scripts', 'p_enqueue_styles');
function p_enqueue_styles() {
    wp_enqueue_style( 'bootstrap-css', get_stylesheet_directory_uri() . '/css/bootstrap.min.css?' . filemtime(get_stylesheet_directory() . '/css/bootstrap.min.css'));
    wp_enqueue_style( 'font-awesome', get_stylesheet_directory_uri() . '/css/font-awesome.min.css?' . filemtime(get_stylesheet_directory() . '/css/font-awesome.css'));
    wp_enqueue_style( 'understrap-theme', get_stylesheet_directory_uri() . '/style.css?' . filemtime(get_stylesheet_directory() . '/style.css'));
    wp_enqueue_style( 'google_font_open_sans', 'https://fonts.googleapis.com/css?family=Open+Sans:400,600');
    wp_enqueue_style( 'google_font_quarrel', 'https://fonts.googleapis.com/css?family=Lovers+Quarrel:400');
    wp_enqueue_style( 'google_font_sedgwick', 'https://fonts.googleapis.com/css?family=Sedgwick+Ave:400');
    wp_enqueue_style( 'google_font_oswald', 'https://fonts.googleapis.com/css?family=Oswald:400,600');
    wp_enqueue_style( 'slick', get_stylesheet_directory_uri() . '/includes/slick-carousel/slick/slick.css');
    wp_enqueue_style( 'slick-theme', get_stylesheet_directory_uri() . '/includes/slick-carousel/slick/slick-theme.css');
    wp_enqueue_script('bootstrap-js', get_stylesheet_directory_uri() . '/js/bootstrap.min.js?' . filemtime(get_stylesheet_directory() . '/js/bootstrap.min.js'), array('jquery'));
    wp_enqueue_script( 'waypoint', get_stylesheet_directory_uri() . '/js/noframework.waypoints.min.js');
    wp_enqueue_script('understap-theme', get_stylesheet_directory_uri() . '/js/theme.js?' . filemtime(get_stylesheet_directory() . '/js/theme.js'), array('jquery'));
    wp_enqueue_script( 'slick', get_stylesheet_directory_uri() . '/includes/slick-carousel/slick/slick.js');
}
function understrap_remove_scripts() {
    wp_dequeue_style( 'understrap-styles' );
    wp_deregister_style( 'understrap-styles' );

    wp_dequeue_script( 'understrap-scripts' );
    wp_deregister_script( 'understrap-scripts' );

    // Removes the parent themes stylesheet and scripts from inc/enqueue.php
}
add_action( 'wp_enqueue_scripts', 'understrap_remove_scripts', 20 );

function getTestimonials() {
    $testimonials = Array();
    $posts_array = get_posts([
        'post_type' => 'testimony',
        'post_status' => 'publish',
        'numberposts' => -1,
        'orderby' => 'ID',
        'order' => 'DESC',
        'meta_query' => [
            [
                'key' => 'wpcf-hide',
                'value' => 0
            ]
        ]
    ]);
    foreach ($posts_array as $post) {
        $testimony = new Testimony($post);
        $testimonials[] = $testimony;
    }
    return $testimonials;
}
function displayTestimonials() {
    $html = '';
    $testimonials = getTestimonials();
    shuffle($testimonials);
    $html = '<div class="testimonials-wrapper">';
    foreach ($testimonials as $testimony) {
        $html .= '<div>' . $testimony->getContent() . '</div>';
    }
    $html .= '</div>';
    return $html;
}
