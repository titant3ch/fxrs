<?php get_header(); ?>

<div id="page">
<div id="masonry">

    <?php get_sidebar(); ?>

    <section id="singular">

        <h1 class="search-title">Searching for: <?php the_search_query(); ?> - <?php echo $wp_query->found_posts; ?> <?php _e( 'Result(s) Found', 'locale' ); ?></h1>

    </section>

    <section class="container" id="search">

        <?php while ( have_posts() ) : the_post() ?>
        <section>
            <div class="content">
                <h3><?php the_title(); ?></h3>
                <h4><?php the_time('F j, Y'); ?></h4>
                <?php the_excerpt(); ?>
            </div>
        </section>
        <?php endwhile; ?>

    </section>

        <a href="#0" class="cd-top">Top</a>

    </section>

</div>

<?php get_footer(); ?>