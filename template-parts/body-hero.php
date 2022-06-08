<section class="hero__container">
        <div class="hero">
            <div class="hero__image-container"><?php the_post_thumbnail();?></div>
                   <div class="hero-content">
               <h1 class="hero__title"><?php the_content();?></h1>
               <p class="hero__excerpt"><?php custom_show_page_excerpt('about-me', 30);
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