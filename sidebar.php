<aside id="sidebar" role="complementary">
<?php if ( is_active_sidebar( 'primary-widget-area' ) ) : ?>
<div>
<ul class="xoxo">
	<li>Sidebar Active</li>
<?php wp_get_archives('type=postbypost&limit=15'); ?>
</ul>
</div>
<?php endif; ?>
</aside>