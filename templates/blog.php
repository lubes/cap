<section class="articles-wrap">
<div class="container">
    <div class="articles-header">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-6 push-md-6 col-lg-6 push-lg-0 col-lg-6">
                <form role="search" method="get" id="searchform" class="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
                    <input type="text" placeholder="Search" value="<?php echo get_search_query(); ?>" name="s" id="s" class="form-control" />
                    <input class="btn btn-none" type="submit" id="searchsubmit" value="<?php echo esc_attr_x( '', 'submit button' ); ?>" />
                </form>                
            </div>
            <div class="col-12 col-sm-12 col-md-6 pull-md-6 col-lg-6 pull-lg-0 col-xl-4 offset-xl-2">
                
                    <?php
                    $filters_1 = '
                    <li><a class="active filter-link" data-filter="all">EVERYTHING</a></li>
                    <li><a class="filter-link" data-filter="press">PRESS</a></li>
                    <li><a class="filter-link" data-filter="insights">INSIGHTS</a></li>';
                    $filters_2 = '
                    <li><a class="filter-link" data-filter="company-news">COMPANY NEWS</a></li>
                    <li><a class="filter-link" data-filter="impact-investing">IMPACT INVESTING</a></li>
                    <li><a class="filter-link" data-filter="video">VIDEO</a></li>'; ?>
                    <div class="mobile-filters hidden-md-up">
                        <a class="filter-btn" data-toggle="collapse" href="#sort_by" aria-expanded="false" aria-controls="collapseExample">SORT BY +</a>
                        <div class="collapse" id="sort_by">
                            <div class="mobile-filter-wrap">
                                <ul class="filter-col list-unstyled">
                                <?php echo $filters_2; echo $filters_1; ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                
                <div class="post-filters hidden-sm-down">
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                            <ul class="filter-col list-unstyled">
                                <?php echo $filters_1; ?>
                            </ul>
                        </div>
                        <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                            <ul class="filter-col list-unstyled">
                                <?php echo $filters_2; ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php if(is_home('blog')):?>
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
    <?php if(is_search()):?>
        <h2 class="search-header">Search Results:</h2>
    <?php endif;?>
    <section class="all-posts">
        <div class="container">
            <div class="row">
                <?php if(is_home('blog')){?>
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

