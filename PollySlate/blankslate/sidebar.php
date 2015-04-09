<aside id="sidebar" role="complementary">
<?php if ( is_active_sidebar( 'primary-widget-area' ) ) : ?>
<div id="primary" class="widget-area">
<ul class="xoxo">
<h3>sidebar.php</h3>
<?php dynamic_sidebar( 'primary-widget-area' ); ?>
</ul>
</div>
<?php endif; ?>
</aside>