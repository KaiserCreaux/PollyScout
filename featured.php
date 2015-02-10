<div class="featured-post clearfix">
        <figure class="post-thumbnail">
                <?php if ( has_post_thumbnail() ) { the_post_thumbnail('scout-featured-thumb'); } ?>
        </figure>
        <div class="post-entry">

                <h3 class="post-title"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h3>
            <?php the_excerpt(); ?>
            <?php the_content(__('(more...)')); ?>
        </div>

</div>