<?php get_header(); ?>
<section id="content" role="main" class="row container-fluid">

    <div class="col-sm-3 spacer">
    </div>
	<div class="col-sm-6">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<?php get_template_part( 'entry' ); ?>
		<?php endwhile; endif; ?>
		<?php get_template_part( 'nav', 'below' ); ?>
	</div>
    <div class="col-sm-3 phone">
	<?php get_sidebar(); ?>
	</div>
</section>
<?php get_footer(); ?>
