<div class="page-header smallest article-header grey">
    <div class="page-header-entry">
        <div class="container">
            <h1>Articles</h1>
        </div>
    </div>
</div>
<?php if (!have_posts()) { ?>
    <div class="no-results">
        <div class="container">
            <h2 class="search-header"><?php _e('Sorry, no results were found.', 'sage'); ?></h2>
        </div>
    </div>
<?php  } else { ?>

    <div class="container">
        <?php get_template_part('templates/blog-header'); ?>
        <h2 class="search-header">Search Results</h2>
    </div>

    <section class="articles-wrap">
        <div class="container">
            <!-- All Posts -->
            <section class="all-posts">
                <div class="container">
                    <div class="row grid">
                        <?php if(is_home('blog') && !is_paged()) { ?>

                        <?php $my_query = new WP_Query( 'cat=-12&orderby=date&order=DESC' ); ?>

                            <?php while ( $my_query->have_posts() ) : $my_query->the_post(); ?>
                                <?php get_template_part('templates/content', get_post_type() != 'post' ? get_post_type() : get_post_format()); ?>
                            <?php endwhile; ?>

                        <?php } else { ?>

                            <?php while (have_posts()) : the_post(); ?>
                              <?php get_template_part('templates/content', get_post_type() != 'post' ? get_post_type() : get_post_format()); ?>
                            <?php endwhile; ?>   

                        <?php } ?>
                    </div>
                </div>
            </section>
        </div>
    </section>

<?php } ?>
<div class="container">
    <div class="pagers">
        <?php the_posts_pagination( array(
            'mid_size' => 2,
            'prev_text' => __( 'PREVIOUS <span class="arrow arrow-left"></span>', 'textdomain' ),
            'next_text' => __( 'NEXT  <span class="arrow arrow-right">', 'textdomain' ),
        ) ); ?>
    </div>
</div>
