<?php get_template_part('templates/page', 'header');?>
<div class="page-wrapper">
    <?php get_template_part('templates/blog'); ?>
    <div class="container">
        <div class="pagers">
            <?php the_posts_pagination( array(
            'mid_size' => 2,
            'prev_text' => __( 'PREVIOUS <span class="arrow arrow-left"></span>', 'textdomain'),
            'next_text' => __( 'NEXT  <span class="arrow arrow-right">', 'textdomain'),
            ));?>
        </div>
    </div>
</div>