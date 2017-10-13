<?php
use Roots\Sage\Setup;
use Roots\Sage\Wrapper;
?>
<!doctype html>
<html <?php language_attributes(); ?>>
    <?php get_template_part('templates/head'); ?>
    <body>
    <!--[if IE]>
      <div class="alert alert-warning">
        <?php _e('You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.', 'sage'); ?>
      </div>
    <![endif]-->
    <div id="barba-wrapper">
        <div <?php body_class('barba-container'); ?> data-namespace="<?php echo this_page();?>">
        <?php do_action('get_header');get_template_part('templates/header');?>
            <div class="wrap" role="document">
                <div class="content">
                    <main class="main">
                        <?php include Wrapper\template_path(); ?>
                    </main>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/barba.js/1.0.0/barba.min.js" type="text/javascript"></script>  
    <?php
        do_action('get_footer');
        get_template_part('templates/footer');
        wp_footer();
    ?>  
    </body>
</html>
