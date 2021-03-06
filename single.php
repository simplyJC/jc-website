<?php get_header()?>
<main class="content-main-container">

  <div class="content__main-title text-center">
    <h1>Welcome to my Blog</h1>
  </div>
  <section class="content-container">


    <?php while (have_posts()) {
    the_post();?>
    <article  class="content">
      <h2 class="content__title">
        <a href="<?php the_permalink();?>"> <?php the_title();?> </a>
      </h2>
      <div>
        <p class="content__posted-by"> Posted by <?php the_author_posts_link()?> on <?php the_time('n.j.y')?> in <?php echo get_the_category_list(', '); ?>
        </p>
      </div>
      <div class="content__excerpt">
          <div class="content__img "><?php the_post_thumbnail('large');?></div>
          <span class="content__caption"><?php the_post_thumbnail_caption()?></span>
          <?php the_content();?>
      </div>
       <?php comments_template();?>
    </article>
    <?php }?>
  </section>
</main>
<?php get_footer()?>