<?php get_header(); ?>

<div id="main">
    <div id="content">

    <div class="row">
        <span class="about-container col-sm-12">
        <?php if (have_posts()) : ?>
        <?php $post = $posts[0]; $c=0;?>
        <?php while (have_posts()) : the_post(); ?>
        <?php $c++;
        if( !$paged && $c == 1) :?>

        <div class="about-book-text">

          <span class="about-body">
            <p><?php the_content(); ?></p>
          </span>

            <?php else :?>
            <?php endif;?>
            <?php endwhile; ?>

        </div>
    </span>
        </div>

        <div class="row">
            <div id="about-separator" class="col-xs-12">
                <a href="mailto:scout@scoutpoetry.com.com?subject=scout%20poetry">scout@scoutpoetry.com</a>

            </div>
        </div>
        <div id="main-content" class="row">
            <div class="bios-container">
            <div class="col-sm-12 bios-body">
                <p><center><span class="about-title">Editors</span></center></p>

                <p>
                    Kathleen Ossip is the author of <i>The Do-Over; The Cold War</i>, which was one of <i>Publishers Weekly's</i> best books of 2011; <i>The Search Engine</i>, which was selected by Derek Walcott for the American Poetry Review/Honickman First Book Prize; and <i>Cinephrastics</i>, a chapbook of movie poems.  Her poems have appeared in <i>Best American Poetry</i>, <i>Best American Magazine Writing</i>, <i>the Washington Post</i>, <i>Paris Review</i>, <i>Poetry</i>, <i>The Believer</i>, <i>A Public Space</i>, and <i>Poetry Review</i> (London). She teaches at The New School and she has received a fellowship from the New York Foundation for the Arts.
                </p><br>
                <p>
                    Spencer Short is the author of <i>Tremolo</i>, a winner of the 2000 National Poetry Series competition. He is a graduate of The Iowa Writers' Workshop and the University of Chicago Law School.
                </p><br>
                <p>
                    If you are interested in reviewing for us, please send us an introduction and two sample reviews at <a href="mailto:scout@scoutpoetry.com">scout@scoutpoetry.com</a>
                </p>
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

    };
</script>

<div id="delimiter">
</div>
<?php get_footer(); ?>
