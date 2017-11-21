<?php
use Roots\Sage\Setup;
use Roots\Sage\Wrapper;
?>
<!doctype html>
<html <?php language_attributes(); ?>>
    <?php get_template_part('templates/head'); ?>
    <body>
    <div id="mainContainer" <?php body_class(); ?>
    <div class="loader"></div>
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
    <?php do_action('get_footer');get_template_part('templates/footer');wp_footer();?>  
    </div>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-26790600-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
      gtag('config', 'UA-26790600-1');
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDwthfpVNhd5zzCn5Q_nbMHTcIO9tXGdIY"
    type="text/javascript"></script>
    </body>
</html>
