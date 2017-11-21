<article <?php post_class( 'post-block col-12 col-sm-12 col-md-12 col-lg-6 inview-item category-all grid-item'); ?>>
    <div class="post-content-meta dark">      
        <p><?php echo the_terms( $post->name, 'category' ); ?> / <?php the_time('m.d.Y') ?></p>
    </div>
    <header>
        <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php echo the_title(); ?><?php//$title = get_the_title();// echo mb_strimwidth($title, 0, 65, '...');?></a></h2>
    </header>
</article>