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
    <?php get_template_part('templates/blog'); ?>
<?php } ?>
<?php the_posts_navigation(); ?>
