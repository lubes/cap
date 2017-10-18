<?php
/**
 * Template Name: Solutions Template
 */
?>

<div class="page-header smaller dark_blue">
    <div class="page-header-entry">
        <div class="container">
            <h1>A Blueprint for<br>Sustained Wealth</h1>
        </div>
    </div>
</div>
<div class="page-wrapper">
<section class="about-wrap" id="capabilities">
    <div class="container">
        <div class="page-nav">
            <ul class="filter-col list-unstyled">
                <li><a class="active anchor-link" href="#capabilities">CAPABILITIES</a></li>
                <li><a class="anchor-link" href="#investing">INVESTING</a></li>
                <li><a class="anchor-link" href="#impact">IMPACT INVESTING</a></li>
            </ul>   
        </div>
        <div class="about-block">
            <div class="el-animate el-1 p_el" data-scroll="8">
                <figure><img src="<?php echo get_template_directory_uri();?>/dist/images/arrow.svg" class="img-fluid" /></figure>
            </div>
            <div class="row">
                <div class="col-12 col-sm-12 col-md-4">
                    <div class="about-title"><h1>Capabilities</h1></div>
                </div>
                <div class="col-12 col-sm-12 col-md-8">
                    <div class="about-entry">
                        <h5>WHAT’S ON YOUR BALANCE SHEET?</h5>
                        <span class="break red-break"></span>
                        <?php echo the_field('capabilities_entry_1');?>
                    </div>
                </div>
            </div>
        </div>
        <div class="about-block">
            <div class="el-animate el-2 p_el" data-scroll="8">
                <figure><img src="<?php echo get_template_directory_uri();?>/dist/images/c-mark-white.svg" class="img-fluid" /></figure>
            </div>
            <div class="row">
                <div class="col-12 col-sm-12 col-md-7">
                    <div class="about-entry">
                        <h5>LOWERING RISK BY RAISING AWARENESS</h5>
                        <span class="break red-break"></span>
                        <?php echo the_field('capabilities_entry_2');?>
                    </div>
                </div>
            </div>
        </div>
        <div class="about-block">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-7 offset-md-4">
                    <div class="about-entry">
                        <h5>HOW WE MEASURE UP</h5>
                        <span class="break red-break"></span>
                        <?php echo the_field('capabilities_entry_3');?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="about-wrap our-story" id="investing">
    <div class="container">
        <div class="about-block">
            <div class="el-animate el-1 p_el" data-scroll="8">
                <figure><img src="<?php echo get_template_directory_uri();?>/dist/images/arrow-up.svg" class="img-fluid" /></figure>
            </div>
            <div class="row">
                <div class="col-12 col-sm-12 col-md-4">
                    <div class="about-title"><h1>Investing</h1></div>
                </div>
                <div class="col-12 col-sm-12 col-md-8">
                    <div class="about-entry">
                        <h5>CORE BELIEFS</h5>
                        <span class="break red-break"></span>
                        <?php echo the_field('investing_entry_1');?>
                    </div>
                </div>
            </div>
        </div>
        <div class="about-block">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-10">
                    <div class="about-entry">
                        <h5>PORTFOLIOS MADE BY DESIGN</h5>
                        <span class="break red-break"></span>
                        <?php echo the_field('investing_entry_2');?>
                    </div>
                </div>
            </div>
            <div class="about-entry">
                <p class="italic">Our framework encompasses four distinct steps:</p>
            </div>
            <div class="row">
                <?php while (have_rows('investing_framework')):the_row();?>
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="about-entry smaller">
                        <h6><?php echo the_sub_field('step_title');?></h6>
                        <p><?php echo the_sub_field('step_description');?></p>
                    </div>
                </div>
                <?php endwhile;?>
            </div>
            <div class="about-entry">
                <p class="italic">Our thought process is geared around four distinct concepts:</p>
            </div>
            <div class="row">
                <?php while (have_rows('investing_thoughts')):the_row();?>
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="about-entry smaller">
                        <h6><?php echo the_sub_field('thought_title');?></h6>
                        <p><?php echo the_sub_field('thought_description');?></p>
                    </div>
                </div>
                <?php endwhile;?>
            </div>
            <div class="about-entry">
                <h5>THE CAPROCK DIFFERENCE</h5>
                <span class="break red-break"></span>
            </div>
            <div class="row">
                <?php $i=0; while (have_rows('caprock_difference')):the_row(); $i++; ?>
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="about-entry smaller inview-item offset-<?php echo $i;?>">
                        <figure class="icon"><img src="<?php echo get_template_directory_uri();?>/dist/images/icon-<?php echo $i;?>.svg" class="img-fluid" /></figure>
                        <h6><?php echo the_sub_field('title');?></h6>
                        <p><?php echo the_sub_field('description');?></p>
                    </div>
                </div>
                <?php endwhile;?>
            </div>
        </div>        
        
    </div>
</section>

<section class="about-wrap" id="impact">
    <div class="container">
        <div class="about-block">
            <div class="el-animate el-1 p_el" data-scroll="8">
                <figure><img src="<?php echo get_template_directory_uri();?>/dist/images/diamond.svg" class="img-fluid" /></figure>
            </div>
            <div class="row">
                <div class="col-12 col-sm-12 col-md-4">
                    <div class="about-title"><h1>Impact<br>Investing</h1></div>
                </div>
                <div class="col-12 col-sm-12 col-md-8">
                    <div class="about-entry">
                        <h5>WHY DO WE INVEST FOR IMPACT?</h5>
                        <span class="break red-break"></span>
                        <?php echo the_field('impact_entry_1');?>
                    </div>
                </div>
            </div>
        </div>
        <div class="slider-wrap">
            <div class="timeline-slider">
                <?php $i=0; while ( have_rows('timeline') ) : the_row(); $i++; ?>
                <div class="slide" data-slide="<?php echo $i;?>">
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-4">
                            <span class="date"><?php echo the_sub_field('year');?></span>
                        </div>
                        <div class="col-12 col-sm-12 col-md-7">
                            <div class="timeline-entry">
                                <h5>CAPROCK IMPACT INVESTING TIMELINE</h5>
                                <span class="break white-break"></span> 
                                <p><?php echo the_sub_field('timeline_description');?></p>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endwhile;?>
            </div>
            <div class="navs-wrap"><div class="slide-counter"><span id="current">1</span> / <span id="total"></span></div></div>
        </div>
        <div class="about-block">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-10">
                    <div class="about-entry">
                        <h5>IMPACT THE WORLD AND YOUR RETURNS</h5>
                        <span class="break red-break"></span>
                        <?php echo the_field('impact_entry_2');?>
                    </div>
                </div>
            </div>
        </div>
        <div class="about-block">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-8 offset-md-4">
                    <div class="about-entry">
                        <h5>CHOOSE YOUR LEVEL OF IMPACT</h5>
                        <span class="break red-break"></span>
                        <?php echo the_field('impact_entry_3');?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/content', 'page'); ?>
<?php endwhile; ?>
<a class="footer-cta grey-cta" href="<?php echo site_url();?>/articles">
    <div class="footer-cta-text blue"><span>Read the Articles</span></div>
</a>
</div>