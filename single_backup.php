<?php get_header(); ?>

<div id="main">
<div id="content">

<div id="single-top"></div>


<div id="main-content" class="row">
<div class="col-xs-12">

<?php while ( have_posts() ) : the_post(); ?>

<div class="single-review">

    <table>
        <tr>
            <td>

            </td>
            <td>

            </td>
        </tr>
    </table>

    <div class='detail-image'>
    <?php
      $feature_attr = array(
        'class' => "detail-book-cover",
        'alt'   => trim( strip_tags( $wp_postmeta->_wp_attachment_image_alt ) ),
      );
      the_post_thumbnail( $size, $feature_attr );
    ?>
    </div>

        <div class='detail-title'><?php the_title( '' ); ?></div>
        <div class='detail-author'><?php echo get_post_meta($post->ID, "book_author", $single = true) ?></div><br>
        <div class='detail-publisher'><?php echo get_post_meta($post->ID, "book_publisher", $single = true) ?>, <?php echo get_post_meta($post->ID, "publishing_year", $single = true) ?> </div>

        <div class="detail-body">
          <?php the_content(); ?>
        </div>

</div>

<?php	endwhile; ?>

</div>
</div>


<div id="delimiter">
</div>
<?php get_footer(); ?>