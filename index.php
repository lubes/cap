<?php get_template_part('templates/page', 'header'); ?>
<section class="articles-wrap">
<div class="container">
    <div class="articles-header">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-6">
                <!-- Search Form -->
                <form role="search" method="get" id="searchform"
                    class="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
                        <input type="text" placeholder="Search" value="<?php echo get_search_query(); ?>" name="s" id="s" class="form-control" />
                        <input class="btn btn-none" type="submit" id="searchsubmit"
                            value="<?php echo esc_attr_x( '', 'submit button' ); ?>" />
                </form>                
            </div>
            <div class="col-12 col-sm-12 col-md-4 offset-md-2">
                <div class="post-filters">
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-6">
                            <ul class="filter-col list-unstyled">
                                <li><a class="active filter-link" data-filter="all">EVERYTHING</a></li>
                                <li><a class="filter-link" data-filter="press">PRESS</a></li>
                                <li><a class="filter-link" data-filter="insights">INSIGHTS</a></li>
                            </ul>
                        </div>
                        <div class="col-12 col-sm-12 col-md-6">
                            <ul class="filter-col list-unstyled">
                                <li><a class="filter-link" data-filter="company-news">COMPANY NEWS</a></li>
                                <li><a class="filter-link" data-filter="impact-investing">IMPACT INVESTING</a></li>
                                <li><a class="filter-link" data-filter="video">VIDEO</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <ul class="post-blocks">
        <?php // for ($i = 0; $i < 2; $i++) { ?>
        <?php $args = array( 'posts_per_page' => 4, 'post_type'=> 'post' );
        $myposts = get_posts( $args );  $i = 0;
        foreach ( $myposts as $post ) : setup_postdata( $post );$i++; ?>
            <li <?php post_class('post-block category-all'); ?> style="background:url(<?php if(has_post_thumbnail) { echo the_post_thumbnail_url(); }?>) no-repeat center;background-size: cover;">
                <a class="post-content <?php if(!has_post_thumbnail()) { echo the_field('color'); }?>" href="<?php echo the_permalink();?>">
                    <div class="post-content-meta">         
                    <p><?php $term_list = wp_get_post_terms($post->ID, 'category'); if($term_list[0]->name == 'Featured') { echo $term_list[1]->name; } else { echo $term_list[0]->name; } ?> / <?php the_time('m.d.Y') ?></p>                       
                        <h3><?php echo the_title();?></h3>
                    </div>
                </a>        
            </li>
        <?php endforeach;  wp_reset_postdata();?>     
        <?php // } ?>
    </ul>
<div class="clearfix"></div>
<section class="all-posts">
    <div class="container">
        <div class="row">
            <?php while (have_posts()) : the_post(); ?>
              <?php get_template_part('templates/content', get_post_type() != 'post' ? get_post_type() : get_post_format()); ?>
            <?php endwhile; ?>
        </div>
    </div>
</section>
</div>
</section>
<?php the_posts_navigation(); ?>
 