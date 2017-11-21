<?php
$filters_1 = '
<li><a class="active filter-link" data-filter="all">EVERYONE</a></li>
<li><a class="filter-link" data-filter="client-advisors">CLIENT ADVISOR</a></li>
<li><a class="filter-link" data-filter="investments">INVESTMENTS</a></li>';  
$filters_2 = '
<li><a class="filter-link" data-filter="operations">OPERATIONS</a></li>
<li><a class="filter-link" data-filter="client-experience">CLIENT EXPERIENCE</a></li>';?>

<section class="team-wrap">
    <div class="page-header smaller red">
        <div class="page-header-entry">
            <div class="container">
                <h1>Our Family</h1>
            </div>
        </div>
    </div>
    <div class="page-wrapper">
    <div class="filter-header">
        <div class="container">
            <div class="row">
                
                <div class="col-12 col-sm-12 col-md-8 col-lg-6">
                    <p>Before we get to know your family, come get to know ours. You’ll find our expertise is as diverse as our portfolios.</p>
                    <span class="break red-break"></span>
                </div>
                
                <div class="col-12 col-sm-12 col-md-4 col-lg-4 offset-lg-2">                    
                
                    <div class="mobile-filters hidden-md-up">
                        <a class="filter-btn" data-toggle="collapse" href="#sort_by" aria-expanded="false" aria-controls="collapseExample">SORT BY +</a>
                        <div class="collapse" id="sort_by">
                            <div class="mobile-filter-wrap">
                                <ul class="filter-col list-unstyled">
                                <?php echo $filters_1; echo $filters_2; ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                    
                    <div class="post-filters hidden-sm-down hidden-lg-up">
                        <ul class="filter-col list-unstyled">
                            <?php echo $filters_1; ?>
                            <?php echo $filters_2; ?>
                        </ul>
                    </div>
                    
                    <div class="post-filters hidden-md-down">
                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-6">
                                <ul class="filter-col list-unstyled">
                                    <?php echo $filters_1; ?>
                                </ul>
                            </div>
                            <div class="col-12 col-sm-12 col-md-6">
                                <ul class="filter-col list-unstyled">
                                    <?php echo $filters_2; ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                  

                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row team-members">
        <?php $args = array( 'posts_per_page' => -1, 'post_type'=>'team' );
        $myposts = get_posts( $args );  $i = 0;
        foreach ( $myposts as $post ) : setup_postdata( $post );$i++; ?>
            <article <?php post_class('col-6 col-sm-6 col-md-4 col-lg-3 team-member inview-item team_category-all'); ?>>
                <a class="team-link" href="<?php the_permalink();?>">
                    <figure class="bio-image">
                        <!--<img src="<?php echo the_post_thumbnail_url();?>" class="img-fluid" />-->
                        <img src="<?php echo the_field('hover_image');?>" class="img-fluid hover-effect" />
                        <!--<img src="<?php echo the_field('hover_image');?>" class="img-fluid overlay-image" />-->
                    </figure>
                </a>
                <header>
                <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                    <ul class="list-unstyled">
                    <?php $terms = get_the_terms( $post->ID, 'team_category' ); foreach($terms as $term) { ?>
                        <li><?php echo $term->name;?></li>
                    <?php } ?>   
                    </ul>
                </header>
                <div class="entry-summary">
                    <?php the_excerpt(); ?>
                </div>
            </article>
        <?php endforeach;  wp_reset_postdata();?>              
        </div>
    </div>
    </div>
</section>
<div class="page-wrapper">
    <a class="footer-cta blue-cta" href="<?php echo site_url();?>/solutions">
        <div class="footer-cta-text white"><span>See Our Solutions</span></div>
    </a>
</div>