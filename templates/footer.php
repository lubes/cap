<?php $copyright = '
    <div class="footer-entry">
        <p>©The Caprock Group. All rights reserved. The Caprock Group is an SEC Registered Investment Adviser. This communication is not a solicitation or offer to sell investment advisory services except in states where we are registered or where an exemption or exclusion from such registration exists. All written content is for informational purposes only and may not constitute a complete description of available investment services. Investment in securities involves the risk of loss. Past performance is no guarantee of future returns.</p>
    </div>
';?>   
<?php $bcorp = '
    <figure>
        <img src="'.get_template_directory_uri().'/dist/images/bcorp.png" class="img-fluid" />
    </figure>
';?>  
<?php $links = '
    <ul class="list-unstyled">
        <li><a href="'.get_site_url().'">Home</a></li>
        <li><a href="'.site_url().'/about">About</a></li>
        <li><a href="'.site_url().'/team">Team</a></li>
        <li><a href="'.site_url().'/solutions">Solutions</a></li>
        <li><a href="'.site_url().'/articles">Articles</a></li>
        <li><a href="'.site_url().'/contact">Contact</a></li>
    </ul>
';?>  
<?php $login = '
    <a href="#" target="_blank" class="btn btn-blue btn-icon btn-lg">Client Login</a>
';?>
<footer class="content-info">
    <div class="container">  
        <!-- Desktop Footer -->
        <div class="desktop-footer">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12  col-lg-7 col-xl-8">
                    <?php echo $copyright;?>
                </div>
                <div class="col-12 col-sm-12 col-md-4 col-lg-1 col-xl-1">
                    <?php echo $bcorp;?>
                </div>
                <div class="col-12 col-sm-12 col-md-4 col-lg-2 col-xl-1">
                    <?php echo $links;?>
                </div>
                <div class="col-12 col-sm-12 col-md-4 col-lg-2 col-xl-2">
                    <?php echo $login;?>
                 </div>
            </div>
        </div>
        <!-- Tablet Footer -->
        <div class="tablet-footer">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-7">
                    <?php echo $login;?>
                </div>
                <div class="col-12 col-sm-12 col-md-3">
                    <?php echo $links;?>
                </div>
                <div class="col-12 col-sm-12 col-md-2">
                    <?php echo $bcorp;?>
                </div>
                <div class="col-12 col-sm-12 col-md-12">
                    <?php echo $copyright;?>
                </div>
            </div>
        </div>
        <!-- Tablet Footer -->
        <div class="phone-footer">
            <div class="row">
                <div class="col-6">
                    <?php echo $links;?>
                </div>
                <div class="col-6">
                    <?php echo $bcorp;?>
                </div>
                <div class="col-12">
                    <?php echo $login;?>
                </div>
                <div class="col-12">
                    <?php echo $copyright;?>
                </div>
            </div>
        </div>
    </div>
</footer>
