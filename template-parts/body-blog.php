<section class="blog blog-main">
        <div class="blog__container-main">
            <h2 class="blog__title text-center padding-bottom padding-top">My Latest Blog</h2>
            <div class="blog__content-group">
            <?php
//add custom query instead the default one which is have_posts
$homeCustomQuery = new WP_Query(array(
    'posts_per_page' => 2,
));

while ($homeCustomQuery->have_posts()) {
    $homeCustomQuery->the_post();?>
                <div class="blog__content-single">
                    <div class="blog__image"><?php the_post_thumbnail('large')?></div>
                    <div class="blog__content">
                    <a href="<?php the_permalink()?>"><h3><?php the_title();?></h3></a>
                    <span><?php the_time('F.j.y')?></span>
                    <p class="padding-top "><?php echo wp_trim_words(get_the_content(), 60) ?>
                    </p>
                    <p class="padding-bottom"><a href="<?php the_permalink()?>">Read more</a></p>
                    </div>
                </div>
            <?php }?>
            <?php wp_reset_postdata()?>
            </div>
        </div>
    </section>