<?php get_header(); ?>

<div id="main">
<div id="content">
    <div id="archive-content" class="row">
    <span class=" col-sm-12">
    </span>
    </div>
      <div id="main-content-header" class="row">

            <div class="col-sm-3">
                <h3 class="reviewers-heading">Reviewers</h3>
            </div>
            <div class="col-sm-9">
                <h3 class="recent">Archived Reviews</h3>
            </div>
      </div>
    <div id="main-content" class="row">
        <div class="col-sm-3 reviewers-list">
            <?php wp_list_authors('show_fullname=1&optioncount=0&orderby=email&order=ASC&hide_empty=0&exclude=1'); ?>


        </div>
        <div id="" class="col-sm-9">
            <div id="grid" data-columns>

                <?php
                $args = array( 'posts_per_page' => 30, 'orderby' => 'post_date'  );
                $myposts = get_posts( $args );
                foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
                <div class="pin">
                    <a href="<?php the_permalink() ?>">
                        <?php


                  $attr = array(
                    'class' => "lower-book-cover",
                        'alt'   => trim( strip_tags( $wp_postmeta->_wp_attachment_image_alt ) ),
                        );
                        the_post_thumbnail( $size, $attr );
                        ?></a>
                    <div class="pin-text">
                        <span class="review-title"><?php the_title( '<a href="' . esc_url( get_permalink() ) . '" rel="bookmark">','</a>' ); ?></span>
                        <span class="review-author"><?php echo get_post_meta($post->ID, "book_author", $single = true) ?></span>
                    </div>
                </div>

                <?php endforeach;
                wp_reset_postdata();?>

            </div>
        </div>

</div>
</div>
<script>
  window.onload = function(){
    console.log("loaded page");
//    var container = document.querySelector('#coverContainer');
//    console.log(container);
//    var msnry = new Masonry( container, {
//      // options
//      columnWidth: 270,
//      itemSelector: '.pin',
//      gutter: 10
//    });
  };
</script>

<div id="delimiter">
</div>
<?php get_footer(); ?>
