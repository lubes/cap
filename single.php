<div class="page-header smaller <?php echo the_field('color');?>"></div>
<div class="container">
    <div class="single-post-wrap">
        <?php get_template_part('templates/content-single', get_post_type()); ?> 
    </div>
</div>
<a class="footer-cta grey-cta" href="<?php echo site_url();?>/articles">
    <div class="footer-cta-text blue"><span>Back to Articles</span></div>
</a>