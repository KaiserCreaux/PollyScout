<?php get_header(); ?>

<div id="main">
<div id="content">

<div id="single-top"></div>


<div id="main-content" class="row">
<div class="col-xs-12">

<?php while ( have_posts() ) : the_post(); ?>

<div class="single-review">

    <table class="single-review-table">
        <tr>
            <td class="top-align">
                <?php
                  $feature_attr = array(
                    'class' => "detail-book-cover",
                    'alt'   => trim( strip_tags( $wp_postmeta->_wp_attachment_image_alt ) ),
                  );
                  the_post_thumbnail( $size, $feature_attr );
                ?>
                <?php
                if ( function_exists( 'sharing_display' ) ) {
                    sharing_display( '', true );
                }
                ?><br>
                <span class="sharing-links">share:</span>
                <a href="" id="facebook-share"><img class="sharing-icon" src="http://scoutpoetry.com/wp-content/uploads/2015/01/facebook.png"></a>
                <a href="" id="twitter-share"><img class="sharing-icon" src="http://scoutpoetry.com/wp-content/uploads/2015/01/twitter.png"></a>

            </td>
            <td>
                <div class='detail-title'><?php the_title( '' ); ?></div>
                <div class='detail-author'><?php echo get_post_meta($post->ID, "book_author", $single = true) ?></div><br>
                <div class='detail-publisher'><?php echo get_post_meta($post->ID, "book_publisher", $single = true) ?>, <?php echo get_post_meta($post->ID, "publishing_year", $single = true) ?> </div>

                <div class="detail-body">
                    <?php the_content(); ?>
                </div>
            </td>
        </tr>
    </table>
</div>

<?php	endwhile; ?>
    <script>

        var fb = document.getElementsByClassName("share-facebook");
//        fb[1].innerHTML = '<img src="http://scoutpoetry.com/wp-content/uploads/2015/01/facebook.png">';
        var twitter = document.getElementsByClassName("share-twitter");
//        twitter[1].innerHTML ='<img src="http://scoutpoetry.com/wp-content/uploads/2015/01/twitter.png">';
//        console.log(fb[1].href);

        document.getElementById('facebook-share').href = fb[1].href;
        document.getElementById('twitter-share').href = twitter[1].href;

    </script>

</div>
</div>

</div>
</div>

<div id="delimiter">
</div>
<?php get_footer(); ?>

