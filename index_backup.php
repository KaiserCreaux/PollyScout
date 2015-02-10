<?php get_header(); ?>

<div id="main">
<div id="content">

  <div id="featured-content" class="row">
    <span class="featured-container col-sm-12">
        <?php if (have_posts()) : ?>
        <?php $post = $posts[0]; $c=0;?>
        <?php while (have_posts()) : the_post(); ?>
        <?php $c++;
        if( !$paged && $c == 1) :?>
        <?php
          $feature_attr = array(
                'class' => "featured-book-cover",
            'alt'   => trim( strip_tags( $wp_postmeta->_wp_attachment_image_alt ) ),
          );
          the_post_thumbnail( $size, $feature_attr );
        ?>
        <span class="featured-book-text">

          <span class="featured-title"><?php the_title( '<a href="' . esc_url( get_permalink() ) . '" rel="bookmark">','</a>' ); ?></span>
          <span class="featured-book-author">
            By: <?php the_author(); ?>
          </span>
          <span class="featured-book-body">
            <?php the_excerpt(); ?>
          </span>
          <a href='<?php the_permalink() ?>'>
          <div class="read-more-button">
            <span class="read-more">
              Read More
            </span>
          </div>
          </a>

        </span>
    </span>
  </div>

      <div class="row">
          <div id="separator" class="col-xs-12">
          </div>
      </div>
      <div id="main-content-header" class="row">

            <div class="col-sm-3">
                <h3 class="reviewers-heading">Reviewers</h3>
            </div>
            <div class="col-sm-9">
                <h3 class="recent">Recent</h3>
            </div>
      </div>

      <div id="main-content" class="row">
          <div class="col-sm-3 reviewers-list">
            <?php wp_list_authors(array(
                'hide_empty'  => false,
              )
            ); ?>


          </div>

          <div id="" class="col-sm-9">
            <div id="grid" data-columns>
              <?php else :?>

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
                      <span class="review-author"><?php the_author(); ?></span>
                  </div>
              </div>
              <?php endif;?>
              <?php endwhile; ?>
            </div>
          </div>
      </div>
  </div>
<?php endif; ?>
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
