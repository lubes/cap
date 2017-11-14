<?php while (have_posts()) : the_post();
$color = get_field('color');
$source_image = get_field('source_image');
$logo_size = get_field('logo_size');
$people = get_field('author');
$read_more_url = get_field('read_more_url');
$read_more_title = get_field('read_more_title');
?>
<article <?php post_class(); ?>>
    <div class="post-meta">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-8 col-lg-9">
                <div class="post-content-meta blue">   
                <p><?php $term_list = wp_get_post_terms($post->ID, 'category');
                    if($term_list[0]->name == 'Featured'){
                        echo $term_list[1]->name;
                        if($term_list[2]) { echo ', '; echo $term_list[2]->name; }
                        if($term_list[3]) { echo ', '; echo $term_list[3]->name; }
                    } else {
                        the_terms( $post->name, 'category' );
                    } ?>
                    <span class="sep"> / </span><?php the_time('m.d.Y') ?>
                    <span class="author">
                    <?php if($people) { echo '<span class="sep"> / </span>'; echo 'By ';
                        foreach( $people as $person ) { ?>
                            <a href="<?php echo get_permalink( $person->ID );?>"><?php echo get_the_title( $person->ID );?></a>
                        <?php }             
                    } ?>
                    <?php if(get_field('author_option')):?>
                        <?php echo '/ '; echo the_field('author_option');?>
                    <?php endif; ?>    
                    </span>
                    </p>                       
                </div>
            </div>
            <?php if($source_image):?>
            <div class="hidden-sm-down col-12 col-sm-12 col-md-4 col-lg-3">
                <figure class="source-img <?php echo $logo_size;?>">
                    <img src="<?php echo $source_image;?>" class="" />
                </figure>
            </div>
            <?php endif;?>
        </div>
    </div>
    <header>
        <h1 class="entry-title"><?php the_title(); ?></h1>
    </header>
    <div class="entry-content">
        <?php if(get_field('video_id')):?>
        <div class="embed-responsive embed-responsive-16by9">
            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/<?php echo the_field('video_id');?>" allowfullscreen></iframe>
        </div>        
        <?php endif;?>
        <?php the_content(); ?>
        <?php if($read_more_url):?>
            <a class="read-more" href="<?php echo $read_more_url;?>" target="_blank"><?php echo $read_more_title;?></a>
        <?php endif;?>
    </div>
    <footer>
        <?php wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>
    </footer>
</article>
<?php endwhile; ?>
