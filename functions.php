<?php


/*Theme Name: Shore Fun Rentals
Author: Beth Griffith, Web 170
Author URL: ideasbybg.com
Description: This is my demo theme for the Web 170 class (learning WP)
*/

//Register my menus//

register_nav_menus(array(
'main-menu' => __( 'Main' ),
));

//Enable Featured Images & Post Thumbnails
add_theme_support('post-thumbnails');

add_post_type_support ('page', 'excerpt');

?>