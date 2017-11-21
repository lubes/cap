<?php
/**
 * Template Name: Contact Template
 */
?>

<div class="page-header smaller dark_blue about-pattern">
    <div class="page-header-entry">
        <div class="container">
            <h1>How can we<br>help you?</h1>
        </div>
    </div>
</div>
<div class="page-wrapper">
<div class="container">
    <div class="filter-header">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-6 col-lg-5 col-xl-6">
                <p>We are ready to serve your family.<br>Let’s connect.</p>
                <span class="break red-break hidden-sm-down"></span>
            </div>
            <div class="col-12 col-sm-12 col-md-5 offset-md-1 col-lg-5 offset-lg-1 col-xl-4 offset-xl-1">
                <div class="post-filters">
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-6 col-lg-6 offset-lg-6">
                            <ul class="filter-col list-unstyled contact-list">
                                <li class="list-title">GENERAL INQUIRIES</li>
                                <li><a class="contact-link">800-344-6458</a></li>
                                <li><a class="contact-link" href="mailto:info@thecaprockgroup.com">info@thecaprockgroup.com</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<section class="doc contact-wrap">
    <div class="container">
        <?php while ( have_rows('locations') ) : the_row(); ?>
        <?php $location = get_sub_field('address');?>
        <div class="location inview-item" style="background:url(<?php the_sub_field('image');?>) no-repeat center;background-size:cover;">
            <div class="location-entry">
                <div class="location-inner">
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-5 col-lg-12">
                            <h3 class="location-title"><?php the_sub_field('title');?></h3>
                            <div class="clearfix"></div>
                            <a href="http://www.google.com/maps/preview#!q=<?=urlencode( $location['address'] )?>" target="_blank" class="btn btn-red btn-link btn-icon hidden-lg-up">VIEW MAP</a>
                        </div>
                        <div class="col-12 col-sm-12 col-md-7 col-lg-12">
                            <p><?php the_sub_field('custom_address_title');?></p>
                            <ul class="list-unstyled">
                                <li><span>T:</span> <?php the_sub_field('phone');?></li>
                                <li><span>F:</span> <?php the_sub_field('fax');?></li>
                            </ul>
                            <a href="http://www.google.com/maps/preview#!q=<?=urlencode( $location['address'] )?>" target="_blank" class="btn btn-red btn-link btn-icon hidden-md-down">VIEW MAP</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php endwhile; ?>
    </div>
</section>
</div>