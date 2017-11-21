<div class="page-header article-header small <?php echo the_field('color');?>"></div>
<div class="page-wrapper">
    <div class="container">
        <div class="single-post-wrap">
            <?php get_template_part('templates/content-single', get_post_type()); ?> 
        </div>
    </div>
    <a class="footer-cta smaller grey-cta no-pattern" href="<?php echo site_url();?>/articles">
        <div class="footer-cta-text red go-back"><span>Back to Articles</span></div>
    </a>
</div>