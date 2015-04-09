<?php
/**
 * The template for displaying 404 pages (Not Found)
 */
get_header(); ?>

	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">

			<div class="page-wrapper">
				<div class="page-content">
					<h2 class="text-center"><?php _e( 'Politics is broken. So is this link.', 'polly' ); ?></h2>
					<p class="text-center"><?php _e( 'It looks like nothing was found at this location. (404 error)', 'polly' ); ?></p>

				</div><!-- .page-content -->
			</div><!-- .page-wrapper -->

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>