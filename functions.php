<?php




// Core small functions
include(trailingslashit( get_template_directory() ) . 'functions/core.php');

// Add js to admin area
include(trailingslashit( get_template_directory() ) . 'functions/admin-additions.php');

// Function to Add Body Classes to templates
include(trailingslashit( get_template_directory() ) . 'functions/body-classes.php');

// Clean up the WordPress Head
include(trailingslashit( get_template_directory() ) . 'functions/clean-wp-head.php');

// Add Custom Editor Styles for the WYSIWYG
include(trailingslashit( get_template_directory() ) . 'functions/custom-editor-style.php');

// Remove Comments
include(trailingslashit( get_template_directory() ) . 'functions/disable-comments.php');

// Disable Emojis
include(trailingslashit( get_template_directory() ) . 'functions/disable-emojis.php');

// Get <head> <title> to behave like other themes
include(trailingslashit( get_template_directory() ) . 'functions/head-title.php');

// Remove height/width attributes on images so they can be responsive
include(trailingslashit( get_template_directory() ) . 'functions/image-remove-height-weight.php');

// Login page stuff - Direct to options page - Redirect to site URL
include(trailingslashit( get_template_directory() ) . 'functions/login-page.php');

// Add active class to menu items
include(trailingslashit( get_template_directory() ) . 'functions/menu-add-active-class.php');

// Change what shows in the Appearance menu
include(trailingslashit( get_template_directory() ) . 'functions/remove-appearance-options.php');

// Options Pages
include(trailingslashit( get_template_directory() ) . 'functions/options-pages.php');

// Add Social Media Options Page and Function - ACF Mini plugin
include(trailingslashit( get_template_directory() ) . 'functions/social-media.php');

// Remove the read more "..."
include(trailingslashit( get_template_directory() ) . 'functions/remove-read-more-dots.php');

// Remove Widgets
include(trailingslashit( get_template_directory() ) . 'functions/remove-widgets.php');

// Remove WP version from RSS
include(trailingslashit( get_template_directory() ) . 'functions/remove-wp-version-rss.php');

//Allows Editors to edit Appearance items (Menus)
include(trailingslashit( get_template_directory() ) . 'functions/role-editor.php');

// Add custom menus
include(trailingslashit( get_template_directory() ) . 'functions/custom-menus.php');

// Custom ACF WYSIWYG
include(trailingslashit( get_template_directory() ) . 'functions/wysiwyg-acf.php');

// Custom Default WYSIWYG
include(trailingslashit( get_template_directory() ) . 'functions/wysiwyg-default.php');

// Add Image sizes
include(trailingslashit( get_template_directory() ) . 'functions/add-image-sizes.php');

// Pagination
include(trailingslashit( get_template_directory() ) . 'functions/pagination.php');

// Add Lead Class to first P tag from WYSIWYG
//include(trailingslashit( get_template_directory() ) . 'functions/lead-class.php');

// Add Sidebars and Widget Areas
//include(trailingslashit( get_template_directory() ) . 'functions/sidebars.php');

// Remove P Tags from around Images
include(trailingslashit( get_template_directory() ) . 'functions/remove-image-p-tags.php');

// Search Only Posts
//include(trailingslashit( get_template_directory() ) . 'functions/search-only-posts.php');

// Tag Cloud Filter
include(trailingslashit( get_template_directory() ) . 'functions/tag-cloud.php');

// Enqueueing and Moving Scripts
include(trailingslashit( get_template_directory() ) . 'functions/scripts.php');

// Enqueueing Styles
include(trailingslashit( get_template_directory() ) . 'functions/styles.php');

// Add Blog Types (Aside, Gallery, etc)
include(trailingslashit( get_template_directory() ) . 'functions/blog-types.php');

// Unknown Functions
//include(trailingslashit( get_template_directory() ) . 'functions/unknown.php');

// Rewrite Posts to News
//include(trailingslashit( get_template_directory() ) . 'functions/rewrite-posts.php');

// Change the image attachment "link to" none by default
include(trailingslashit( get_template_directory() ) . 'functions/image-attachment.php');

// Customize the WordPress Menu on the Back End
include(trailingslashit( get_template_directory() ) . 'functions/wordpress-menu.php');

// Add body class to non super-admins
include(trailingslashit( get_template_directory() ) . 'functions/non-admin-class.php');

// Clean up my address display string to put inside the google popup box
include(trailingslashit( get_template_directory() ) . 'functions/google-map-text.php');

// Custom format dropdown for WYSIWYG
include(trailingslashit( get_template_directory() ) . 'functions/wysiwyg-format.php');

// Yoast
include(trailingslashit( get_template_directory() ) . 'functions/yoast.php');

// Ajax Posts
include(trailingslashit( get_template_directory() ) . 'functions/ajax-posts.php');

// Hide the "Posts" page in Pages view.
include(trailingslashit( get_template_directory() ) . 'functions/hide-blog-in-pages.php');

// Move gravity jquery to footer
include(trailingslashit( get_template_directory() ) . 'functions/gravity.php');


//------------------------------------------------------------------------------

// Post Types

// Events
//include(trailingslashit( get_template_directory() ) . 'functions/post-types/events.php');


//------------------------------------------------------------------------------

// ACF Related Modules

// Custom ACF Modules
//include(trailingslashit( get_template_directory() ) . 'functions/acf/modules.php');


// ACF: Events Post Type
//include(trailingslashit( get_template_directory() ) . 'functions/acf/post-types/events.php');

// ACF: Posts Post Type - Excerpt
include(trailingslashit( get_template_directory() ) . 'functions/acf/post-types/posts.php');








function my_password_form() {
    global $post;
    $label = 'pwbox-'.( empty( $post->ID ) ? rand() : $post->ID );
    $o = '<form action="' . esc_url( site_url( 'wp-login.php?action=postpass', 'login_post' ) ) . '" method="post">
    ' . __( "To view this protected post, enter the password below:" ) . '
    <label for="' . $label . '">' . __( "Password:" ) . ' </label><input name="post_password" id="' . $label . '" type="password" size="20" maxlength="20" /><input type="submit" name="Submit" value="' . esc_attr__( "Submit" ) . '" />
    </form>
    ';
    return $o;
}
add_filter( 'the_password_form', 'my_password_form' );






// Add class to the next/previous post links and also add the span tags inside
add_filter('next_post_link', 'post_link_attributes');
add_filter('previous_post_link', 'post_link_attributes');
 
function post_link_attributes($output) {
    $content = preg_replace_callback( '~<a (.*?) rel="(.*?)">(.*?)</a>~', '_add_span2', $output );
    return $content;
}

function _add_span2( $matches ) {
    if ( ! ( $title = strip_tags( $matches[2] ) ) ) { // If we only have an image inside the anchor
        return '<a class="btn btn-primary next-prev '.$matches[2].'" ' . $matches[1] . ' rel="'.$matches[2].'">' . $matches[3] . '</a>';
    } else {
        return '<a class="btn btn-primary next-prev '.$matches[2].'" ' . $matches[1] . ' rel="'.$matches[2].'"><span>' . $matches[3] . '</span></a>';
    }
}





















































































?>
