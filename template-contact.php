<?php
/**
 * Template Name: Contact Template
 */
?>

<div class="page-header smaller dark_blue">
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
                <p>We are ready to serve your family. Let’s connect.</p>
                <span class="break red-break"></span>
            </div>
            <div class="col-12 col-sm-12 col-md-6 col-lg-5 offset-lg-1 col-xl-4 offset-xl-1">
                <div class="post-filters">
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-6 offset-md-6">
                            <ul class="filter-col list-unstyled">
                                <li>GENERAL INQUIRIES</li>
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
                <h3 class="location-title"><?php the_sub_field('title');?></h3>
                <p><?php echo $location['address']; ?></p>
                <ul class="list-unstyled">
                    <li><span>T:</span> <?php the_sub_field('phone');?></li>
                    <li><span>F:</span> <?php the_sub_field('fax');?></li>
                </ul>
                <a href="https://www.google.com/maps?saddr=My+Location&daddr=<?php $location = get_sub_field('address'); echo $location['lat'] . ',' . $location['lng']; ?>" target="_blank" class="btn btn-red btn-link btn-icon">VIEW MAP</a>
                </div>
            </div>
        </div>
        <?php endwhile; ?>
    </div>
</section>
</div>