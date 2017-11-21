<div class="articles-header">
    <div class="row">
        <div class="col-12 col-sm-12 col-md-6 push-md-6 col-lg-6 push-lg-0 col-lg-6">
            <form role="search" method="get" id="searchform" class="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
                <input type="text" placeholder="Search" value="<?php echo get_search_query(); ?>" name="s" id="s" class="form-control" />
                <input class="btn btn-none" type="submit" id="searchsubmit" value="<?php echo esc_attr_x( '', 'submit button' ); ?>" />
            </form>                
        </div>
        <div class="col-12 col-sm-12 col-md-6 pull-md-6 col-lg-6 pull-lg-0 col-xl-4 offset-xl-2">
            <?php
            $filters_1 = '
            <li><a class="active filter-link link-everything" href="'. site_url().'/articles" data-filter="all">EVERYTHING</a></li>
            <li><a class="filter-link link-press" data-filter="press" href="'. site_url().'/category/press">PRESS</a></li>
            <li><a class="filter-link link-insights" data-filter="insights" href="'. site_url().'/category/insights">INSIGHTS</a></li>';
            $filters_2 = '
            <li><a class="filter-link link-company-news" data-filter="company-news" href="'. site_url().'/category/company-news">COMPANY NEWS</a></li>
            <li><a class="filter-link link-impact-investing" data-filter="impact-investing" href="'. site_url().'/category/impact-investing">IMPACT INVESTING</a></li>
            <li><a class="filter-link link-video" data-filter="video" href="'. site_url().'/category/video">VIDEO</a></li>'; ?>
            <div class="mobile-filters hidden-md-up">
                <a class="filter-btn" data-toggle="collapse" href="#sort_by" aria-expanded="false" aria-controls="collapseExample">SORT BY +</a>
                <div class="collapse" id="sort_by">
                    <div class="mobile-filter-wrap">
                        <ul class="filter-col list-unstyled">
                        <?php echo $filters_1; echo $filters_2; ?>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="post-filters hidden-sm-down">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                        <ul class="filter-col list-unstyled">
                            <?php echo $filters_1; ?>
                        </ul>
                    </div>
                    <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                        <ul class="filter-col list-unstyled">
                            <?php echo $filters_2; ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>