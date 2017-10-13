<section class="team-wrap">
    <div class="page-header smaller red">
        <div class="page-header-entry">
            <div class="container">
                <h1>Our Family</h1>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="filter-header">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-6">
                    <p>Before we get to know your family, come get to know ours. You’ll find our expertise is as diverse as our portfolios.</p>
                    <span class="break red-break"></span>
                </div>
                <div class="col-12 col-sm-12 col-md-4 offset-md-2">
                    <div class="post-filters">
                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-6">
                                <ul class="filter-col list-unstyled">
                                    <li><a class="active filter-link" data-filter="all">EVERYONE</a></li>
                                    <li><a class="filter-link" data-filter="client-advisors">CLIENT ADVISORS</a></li>
                                    <li><a class="filter-link" data-filter="investments">INVESTMENTS</a></li>
                                </ul>
                            </div>
                            <div class="col-12 col-sm-12 col-md-6">
                                <ul class="filter-col list-unstyled">
                                    <li><a class="filter-link" data-filter="operations">OPERATIONS</a></li>
                                    <li><a class="filter-link" data-filter="client-experience">CLIENT EXPERIENCE</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <?php while (have_posts()) : the_post(); ?>
                <article <?php post_class('col-12 col-sm-12 col-md-4 col-lg-3 team-member inview-item team_category-all'); ?>>
                    <a class="team-link" href="<?php the_permalink();?>">
                        <figure class="bio-image">
                            <img src="<?php echo the_post_thumbnail_url();?>" class="img-fluid" />
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
            <?php endwhile; ?>
        </div>
    </div>
</section>
<a class="footer-cta blue-cta" href="<?php echo site_url();?>/solutions">
    <div class="footer-cta-text white"><span>See Our Solutions</span></div>
</a>