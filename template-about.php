<?php
/**
 * Template Name: About Template
 */
?>

<div class="page-header smaller dark_blue about-pattern">
    <div class="page-header-entry">
        <div class="container">
            <h1>Families need<br>an Advocate</h1>
        </div>
    </div>
</div>
<div class="page-wrapper">
<section class="about-wrap">
    <div class="container">
        <div class="about-block">
            <div class="el-animate el-1 p_el" data-scroll="8">
                <figure><img src="<?php echo get_template_directory_uri();?>/dist/images/arrow.svg" class="img-fluid" /></figure>
            </div>
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-4">
                    <div class="about-title"><h1>Our Vision</h1></div>
                </div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-7">
                    <div class="about-entry">
                        <h5>GUIDING PRINCIPLES</h5>
                        <span class="break red-break"></span>
                        <?php echo the_field('vision_entry_1');?>
                    </div>
                </div>
            </div>
        </div>
        <div class="about-block">
            <div class="el-animate el-2 p_el" data-scroll="8">
                <figure><img src="<?php echo get_template_directory_uri();?>/dist/images/arrow-burst.svg" class="img-fluid" /></figure>
            </div>
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-8">
                    <div class="about-entry">
                        <h5>EVOLUTION OF THE FAMILY OFFICE</h5>
                        <span class="break red-break"></span>
                        <?php echo the_field('vision_entry_2');?>
                    </div>
                </div>
            </div>
        </div>
        <div class="about-block">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-8 offset-lg-4">
                    <div class="about-entry">
                        <h5>WE’RE ADVOCATES, NOT SALESPEOPLE</h5>
                        <span class="break red-break"></span>
                        <?php echo the_field('vision_entry_3');?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="about-wrap our-story">
    <div class="container">
        <div class="about-block">
            <div class="el-animate el-1 p_el" data-scroll="8">
                <figure><img src="<?php echo get_template_directory_uri();?>/dist/images/c-mark.svg" class="img-fluid" /></figure>
            </div>
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-4">
                    <div class="about-title"><h1>Our Story</h1></div>
                </div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-8">
                    <div class="about-entry">
                        <?php echo the_field('story_entry');?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/content', 'page'); ?>
<?php endwhile; ?>

<a class="footer-cta red-cta" href="<?php echo site_url();?>/team">
    <div class="footer-cta-text white"><span>Meet the Team</span></div>
</a>
</div>