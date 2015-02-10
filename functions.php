<?php


if ( ! function_exists( 'scout_setup' ) ) :
/**
 * Twenty Fourteen setup.
 *
 * Set up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support post thumbnails.
 *
 * @since Twenty Fourteen 1.0
 */


add_theme_support( 'post-thumbnails' );
set_post_thumbnail_size( 672, 372, true );

function get_avatar_url($get_avatar){
    preg_match('/src="(.*?)"/i', $get_avatar, $matches);
    return $matches[1];
}
function jptweak_remove_share() {
    remove_filter( 'the_content', 'sharing_display',19 );
    remove_filter( 'the_excerpt', 'sharing_display',19 );
    if ( class_exists( 'Jetpack_Likes' ) ) {
        remove_filter( 'the_content', array( Jetpack_Likes::init(), 'post_likes' ), 30, 1 );
    }
}

add_action( 'loop_start', 'jptweak_remove_share' );
function scout_setup() {

	// This theme styles the visual editor to resemble the theme style.
	//add_editor_style( array( 'css/editor-style.css', scout_font_url(), 'genericons/genericons.css' ) );

	// Add RSS feed links to <head> for posts and comments.
	//add_theme_support( 'automatic-feed-links' );

	// Enable support for Post Thumbnails, and declare two sizes.
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 672, 372, true );
//	add_image_size( 'scout-full-width', 1038, 576, true );
//

	// Add support for featured content.
//	add_theme_support( 'featured-content', array(
//		'featured_content_filter' => 'scout_get_featured_posts',
//		'max_posts' => 6,
//	) );

}
endif;


if ( ! function_exists( 'scout_list_authors' ) ) :
/**
 * Print a list of all site contributors who published at least one post.
 *
 * @since Twenty Fourteen 1.0
 */
function scout_list_authors() {
	$contributor_ids = get_users( array(
		'fields'  => 'ID',
		'orderby' => 'post_count',
		'order'   => 'DESC',
		'who'     => 'authors',
	) );

	foreach ( $contributor_ids as $contributor_id ) :
		$post_count = count_user_posts( $contributor_id );

	?>
	<span class="reviewer-name"><?php echo get_the_author_meta( 'display_name', $contributor_id ); ?></span><br>

	<?php
	endforeach;
}
endif;

?>