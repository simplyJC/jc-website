<main>

    <section class="hero__container">
        <div class="hero">
            <?php the_post_thumbnail();?>
                   <div class="hero-content">
               <h1>I am an Aspiring Front&nbsp End Developer <br> Jehrom&nbspCabusao </h1>
               <p><?php custom_show_page_excerpt('about-me');
?></p>
               <a href="<?php echo site_url('/about-me') ?>"><button class="hero__btn">Read more...</button></a>
                   </div>
        </div>
       <?php

// custom_show_page_title(7);
// custom_show_page_excerpt('about-me');

// $id = 7;
// $p = get_post($id);
// echo apply_filters('the_title', $p->post_title);
?>

    </section>
    <section  class="skills">
        <h2 class="skills__title">Skills</h2>
        <h3 class="skills__sub-title">Advanced:</h3>
        <div class="skills__container">
            <div class="skills__icon-1" style=" background-image: url(<?php echo get_theme_file_uri('images/html.png'); ?>);"></div>
            <div class="skills__icon-1" style=" background-image: url(<?php echo get_theme_file_uri('images/css.png'); ?>);"></div>
            <div class="skills__icon-1" style=" background-image: url(<?php echo get_theme_file_uri('images/js.png'); ?>);"></div>

        </div>
         <h3 class="skills__sub-title">Beginner:</h3>
         <div class="skills__container-2">
            <div class="skills__icon" style=" background-image: url(<?php echo get_theme_file_uri('images/wp.png'); ?>);"></div>
            <div class="skills__icon" style=" background-image: url(<?php echo get_theme_file_uri('images/typescript.png'); ?>);"></div>
            <div class="skills__icon" style=" background-image: url(<?php echo get_theme_file_uri('images/react.png'); ?>);"></div>
            <div class="skills__icon" style=" background-image: url(<?php echo get_theme_file_uri('images/git.png'); ?>);"></div>
             <div class="skills__icon" style=" background-image: url(<?php echo get_theme_file_uri('images/gulp.png'); ?>);"></div>
        </div>
    </section>
    <section class="blog">
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
    </section>

</main>