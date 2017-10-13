<?php while (have_posts()) : the_post();
$color = get_field('color');
$source_image = get_field('source_image');
$people = get_field('author');
?>
<article <?php post_class(); ?>>
    <div class="post-meta">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-8 col-lg-9">
                    <div class="post-content-meta blue">         
                    <p><?php $term_list = wp_get_post_terms($post->ID, 'category'); if($term_list[0]->name == 'Featured') { echo $term_list[1]->name; } else { echo $term_list[0]->name; } ?> / <?php the_time('m.d.Y') ?>
                        <span class="author">
                        <?php if($people) { echo 'By ';
                                           
                            foreach( $people as $person ) { ?>
                                <a href="<?php echo get_permalink( $person->ID );?>"><?php echo get_the_title( $person->ID );?></a>
                            <?php }             
                                          
                        } ?></span>
                        </p>                       
                    </div>
            </div>
            <div class="col-12 col-sm-12 col-md-4 col-lg-3">
                <figure class="source-img">
                    <img src="<?php echo $source_image;?>" class="img-fluid" />
                </figure>
            </div>
        </div>
    </div>
    <header>
        <h1 class="entry-title"><?php the_title(); ?></h1>
    </header>
    <div class="entry-content">
        <?php the_content(); ?>
    </div>
    <footer>
        <?php wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>
    </footer>
</article>
<?php endwhile; ?>
