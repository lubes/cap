<section class="articles-wrap">
    <div class="container">
        <!-- Blog Header -->
        <?php get_template_part('templates/blog-header'); ?>
        <!-- Blog Page -->
        <?php if(is_home('blog') && !is_paged()):?>
        <ul class="post-blocks">
            <?php $args = array( 'posts_per_page' => 8, 'post_type'=> 'post', 'category' => 12 );
            $myposts = get_posts( $args );  $i = 0;
            foreach ( $myposts as $post ) : setup_postdata( $post );$i++; ?>
            <li <?php post_class('post-block category-all'); ?> style="background:url(<?php if(has_post_thumbnail) { echo the_post_thumbnail_url(); }?>) no-repeat center;background-size: cover;">
                <a class="post-content <?php if(!has_post_thumbnail()) { echo the_field('color'); }?>" href="<?php echo the_permalink();?>">
                    <div class="post-content-meta">         
                    <p><?php $term_list = wp_get_post_terms($post->ID, 'category'); if($term_list[0]->name == 'Featured') { echo $term_list[1]->name; } else { echo $term_list[0]->name; } ?> / <?php the_time('m.d.Y') ?></p>                       
                        <h3><span><?php echo the_title();?></span></h3>
                    </div>
                </a>        
            </li>
            <?php endforeach;  wp_reset_postdata();?>     
        </ul>
        <?php endif;?>
        <div class="clearfix"></div>
        
        <!-- Search Page -->
        <?php if(is_search()):?>
            <h2 class="search-header">Search Results:</h2>
        <?php endif;?>
        
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

