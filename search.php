<?php get_template_part('templates/page', 'header'); ?>
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
