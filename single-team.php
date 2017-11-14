<?php
$employee_title = get_field('employee_title');
$employee_bio = get_field('employee_bio');
$employee_background = get_field('employee_background');
$responsibilities = get_field('responsibilities');
$linkedin = get_field('linked_in');
$twitter = get_field('twitter');
$email = get_field('email');
$articles = get_field('related_articles');
?>
<div class="page-header team-header <?php echo the_field('color');?> larger"></div>
<div class="page-wrapper">
<section class="team-bio">
<div class="container">
    <div class="row">
        
        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-9">
            <?php while (have_posts()) : the_post(); ?>
            <article <?php post_class(); ?>>
                
                <header class="bio-header">
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-5">
                            <figure class="bio-image">
                                <img src="<?php echo the_field('hover_image');?>" class="img-fluid" />
                            </figure>
                        </div>
                        <div class="col-12 col-sm-12 col-md-8 col-lg-8 col-xl-7">
                            <div class="team-name">
                                <h1 class="entry-title"><?php the_title(); ?></h1>
                            </div>
                            
                            <?php if($employee_title):?><p><?php echo $employee_title;?></p><?php endif;?>
                            <?php if($linkedin || $twitter || $email) :?>
                            <ul class="employee-socials list-unstyled">
                                <?php if($linkedin):?>
                                    <li><a href="<?php echo $linkedin;?>" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                <?php endif;?>
                                <?php if($twitter):?>
                                    <li><a href="<?php echo $twitter;?>" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <?php endif;?>
                                <?php if($email):?>
                                    <li><a href="mailto:<?php echo $email;?>" target="_blank"><i class="fa fa-envelope" aria-hidden="true"></i></a></li>
                                <?php endif;?>
                            </ul>
                            <?php endif;?>
                        </div>
                    </div>
                </header>
                
            </article>
            <?php endwhile; ?>
        </div>
        
        <div class="col-12 col-sm-12 col-md-9">
            <?php while (have_posts()) : the_post(); ?>
            <article <?php post_class(); ?>>
                
                <!--
                <header class="bio-header">
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-6 col-lg-5 col-xl-5">
                            <figure class="bio-image">
                                <img src="<?php echo the_field('hover_image');?>" class="img-fluid" />
                            </figure>
                        </div>
                        <div class="col-12 col-sm-12 col-md-6 col-lg-7 col-xl-7">
                            <h1 class="entry-title"><?php the_title(); ?></h1>
                            <p><?php echo $employee_title;?></p>
                            <ul class="employee-socials list-unstyled">
                                <?php if($linkedin):?>
                                    <li><a href="<?php echo $linkedin;?>" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                <?php endif;?>
                                <?php if($twitter):?>
                                    <li><a href="<?php echo $twitter;?>" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <?php endif;?>
                                <?php if($email):?>
                                    <li><a href="mailto:<?php echo $email;?>" target="_blank"><i class="fa fa-envelope" aria-hidden="true"></i></a></li>
                                <?php endif;?>
                            </ul>
                        </div>
                    </div>
                </header>
                -->
                

                
                
                <div class="entry-content">
                    <?php if($employee_bio):?>
                    <div class="entry">
                        <?php echo $employee_bio;?>
                    </div>
                    <?php endif;?>
                    <?php if($employee_background):?>
                    <div class="entry">
                        <h5>Background:</h5>
                        <?php echo $employee_background;?>
                    </div>
                    <?php endif;?>
                </div>
                <footer>
                    <?php wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>
                </footer>
            </article>
            <?php endwhile; ?>
        </div>
        <div class="col-12 col-sm-12 col-md-3">
            <div class="side-bar">
                <div class="side-entry">
                    <div class="side-header">
                        <h5>RESPONSIBILITIES</h5>
                    </div>
                    <div class="responsibilities">
                    <?php echo $responsibilities; ?>
                    </div>
                </div>
                <?php if($articles):?>
                <div class="side-entry">
                    <div class="side-header">
                        <h5>RELATED ARTICLES</h5>
                    </div>
                    <div class="related-articles">
                    <?php foreach( $articles as $article ) { ?>
                        <a href="<?php echo get_permalink( $article->ID );?>"><?php echo get_the_title( $article->ID );?></a>
                    <?php } ?>
                    </div>
                </div>
                <?php endif;?>
            </div>
        </div>
    </div>
</div>
</section>
<a class="footer-cta grey-cta smaller no-pattern" href="<?php echo site_url();?>/team">
    <div class="footer-cta-text red go-back"><span>Back to Team</span></div>
</a>
</div>