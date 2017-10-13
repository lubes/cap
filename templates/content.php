<article <?php post_class( 'post-block col-12 col-sm-12 col-md-6 inview-item category-all'); ?>>
    <div class="post-content-meta dark">      
        <p><?php $term_list = wp_get_post_terms($post->ID, 'category');echo $term_list[0]->name ;?> / <?php the_time('m.d.Y') ?></p>
    </div>
    <header>
        <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    </header>
</article>
