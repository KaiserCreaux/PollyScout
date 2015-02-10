<?php get_header(); ?>

<?php
$curauth = (isset($_GET['author_name'])) ? get_user_by('slug', $author_name) : get_userdata(intval($author));
?>

<div id="main">
<div id="content">

<div id="featured-content" class="row">
  <div class="col-sm-12">
    <div class="bio-container">

        <table>
            <tr>
                <td>
                    <img src="<? echo get_avatar_url(get_avatar( $curauth->ID, 150 )); ?>" align="left" class="featured-book-cover" />
                </td>
                <td>
                    <span class="featured-book-text">
                    <span class="author-name"><?php echo $curauth->first_name;; ?>&nbsp;<?php echo $curauth->last_name;; ?></span>
                    <span class="author-bio">
                    <?php echo $curauth->description;; ?>
                    </span>
                    </span>
                </td>
            </tr>
        </table>
    </div>
  </div>
</div>
  <div class="row">
      <div id="separator" class="col-xs-12">
      </div>
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

<?php get_footer(); ?>
