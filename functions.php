/*
 * 07 Aug 2016
 * This code is a backup of the modifications to the default files contained in the WordPress TwentySixteen theme
 *
 * If the theme is ever updated, it will erase the modifications. The following will need to be placed in the proper places in the "functions.php" file
*/



/*
 * Snippet #1
 * Code that initializes footer widget areas for the VTArtWorks child theme
*/

//create an area for footer widgets - added by evan merkel
function footer_widgets_init() {
    // First footer widget area, located in the footer. Empty by default.
    register_sidebar( array(
        'name' => __( 'First Footer Widget Area', 'vtartworks' ),
        'id' => 'first-footer-widget-area',
        'description' => __( 'The first footer widget area', 'vtartworks' ),
        'before_widget' => '<div id="%1$s" class="widget-container %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );

    // Second Footer Widget Area, located in the footer. Empty by default.
    register_sidebar( array(
        'name' => __( 'Second Footer Widget Area', 'vtartworks' ),
        'id' => 'second-footer-widget-area',
        'description' => __( 'The second footer widget area', 'vtartworks' ),
        'before_widget' => '<div id="%1$s" class="widget-container %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );

    // Third Footer Widget Area, located in the footer. Empty by default.
    register_sidebar( array(
        'name' => __( 'Third Footer Widget Area', 'vtartworks' ),
        'id' => 'third-footer-widget-area',
        'description' => __( 'The third footer widget area', 'vtartworks' ),
        'before_widget' => '<div id="%1$s" class="widget-container %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );

    // Fourth Footer Widget Area, located in the footer. Empty by default.
    register_sidebar( array(
        'name' => __( 'Fourth Footer Widget Area', 'vtartworks' ),
        'id' => 'fourth-footer-widget-area',
        'description' => __( 'The fourth footer widget area', 'vtartworks' ),
        'before_widget' => '<div id="%1$s" class="widget-container %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );
}
//initialize the footer widgets
add_action( 'widgets_init', 'footer_widgets_init' );


/*
 *Snippet #2
 * enqueue fontawesome so it can be used across the theme.
 *
 * also needs th rest of the fontawesome files placed in the "wp-content" folder
*/

// Add FontAwesome, used in the main stylesheet.
wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/fontawesome/font-awesome.css', array(), '4.6.3' );