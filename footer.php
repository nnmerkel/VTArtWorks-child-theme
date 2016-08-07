/*
 * 07 Aug 2016
 * This code is a backup of the modifications to the default files contained in the WordPress TwentySixteen theme
 *
 * If the theme is ever updated, it will erase the modifications. The following will need to be placed in the proper places in the "footer.php" file
*/



/*
 * Snippet #1
 * Code that sets up HTML for footer widget areas for the VTArtWorks child theme
 *
 * The ".site-info" <div> also needs to be commented out
*/

<!--markup for custom footer widgets; ALL must be populated for it to work-->
<aside class="fatfooter" role="complementary">
    <div class="first quarter left widget-area">
        <?php dynamic_sidebar('first-footer-widget-area'); ?>
    </div><!-- .first .widget-area -->
 
    <div class="second quarter widget-area">
        <?php dynamic_sidebar('second-footer-widget-area'); ?>
    </div><!-- .second .widget-area -->
 
    <div class="third quarter widget-area">
        <?php dynamic_sidebar('third-footer-widget-area'); ?>
    </div><!-- .third .widget-area -->
 
    <div class="fourth quarter right widget-area">
        <?php dynamic_sidebar('fourth-footer-widget-area'); ?>
    </div><!-- .fourth .widget-area -->
</aside><!-- #fatfooter -->
