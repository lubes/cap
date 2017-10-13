<?php
/**
 * Template Name: About Template
 */
?>

<div class="page-header smaller dark_blue">
    <div class="page-header-entry">
        <div class="container">
            <h1>Families need<br>an Advocate</h1>
        </div>
    </div>
</div>
<section class="about-wrap">
    <div class="container">
        <div class="about-block">
            <div class="el-animate el-1 p_el" data-scroll="8">
                <figure><img src="<?php echo get_template_directory_uri();?>/dist/images/arrow.svg" class="img-fluid" /></figure>
            </div>
            <div class="row">
                <div class="col-12 col-sm-12 col-md-4">
                    <div class="about-title"><h1>Our Vision</h1></div>
                </div>
                <div class="col-12 col-sm-12 col-md-8">
                    <div class="about-entry">
                        <h5>GUIDING PRINCIPLES</h5>
                        <span class="break red-break"></span>
                        <p>We’ve created a set principles based on years of experience helping families.</p>
                        <ul>
                            <li>Families want impartial advice, but rarely get it</li>
                            <li>Families want impartial advice, but rarely get it</li>
                            <li>Families want impartial advice, but rarely get it</li>
                            <li>Families want impartial advice, but rarely get it</li>
                            <li>Families want impartial advice, but rarely get it</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="about-block">
            <div class="el-animate el-2 p_el" data-scroll="8">
                <figure><img src="<?php echo get_template_directory_uri();?>/dist/images/arrow-burst.svg" class="img-fluid" /></figure>
            </div>
            <div class="row">
                <div class="col-12 col-sm-12 col-md-7">
                    <div class="about-entry">
                        <h5>EVOLUTION OF THE FAMILY OFFICE</h5>
                        <span class="break red-break"></span>
                        <p>Private family offices emerged in the late 19th century when a handful of elite families amassed staggering wealth. To ensure it was passed on to future generations, these families organized private offices, staffed with full-time attorneys, accountants, and investment specialists. This structure ensured unbiased advice, comprehensive counsel, and diverse investments, with each discipline being managed by an expert who was responsible for growing and protecting the family’s wealth. The recent wealth explosion has once again created a demand for private family offices, but despite their value, the costs can often be too high for some. And so, multi-family offices were created with similar advantages of a private office, but at a more affordable price.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="about-block">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-7 offset-md-4">
                    <div class="about-entry">
                        <h5>WE’RE ADVOCATES, NOT SALESPEOPLE</h5>
                        <span class="break red-break"></span>
                        <p>The thing about traditional brokerages and banks is they function like sales organizations, peddling their own financial products. You get the best of what they have, but not necessarily the best solution for you. The bottom line is…these firms mostly watch out for their bottom line. Our family office is quite the opposite. We’re not salespeople. We’re advocates and financial partners who provide objective advice on the entirety of your wealth. We value transparency at every stage and strive to build long-term relationships built on trust and mutual respect. If that appeals to you, then let’s talk.</p>
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
                <div class="col-12 col-sm-12 col-md-4">
                    <div class="about-title"><h1>Our Story</h1></div>
                </div>
                <div class="col-12 col-sm-12 col-md-8">
                    <div class="about-entry">
                        <p>Established in 2005, Caprock is a privately owned, multi-family office with locations in Newport Beach, Seattle, San Jose, Park City and Boise. We are an SEC-registered investment advisor, managing roughly $3b in assets. We develop customized wealth strategies for individuals and families who don’t have the bandwidth or expertise to do it on their own. Our decisions are based on unbiased, rational analysis with one goal in mind:  to protect and grow your wealth. </p>
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
    <div class="footer-cta-text">Meet the Team</div>
</a>