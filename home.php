<?php get_header()?>

  <div class="content-main-container">
  
    <div class="content__main-title text-center"><h1>Welcome to my Blog</h1></div>
    <div class="content-container">
  
  
      <?php while (have_posts()) {
        the_post();?>
      <div  class="content">
        <h2 class="content__title">
          <a href="<?php the_permalink();?>"> <?php the_title();?> </a>
        </h2>
        <div>
          <p class="content__posted-by"> Posted by <?php the_author_posts_link()?> on <?php the_time('n.j.y')?> in <?php echo get_the_category_list(', '); ?>
          </p>
        </div>
        <div class="content__excerpt">
          <?php the_excerpt();?>
          <p class="content__link"><a href="<?php the_permalink();?>">Continue Reading &raquo;
            </a></p>
        </div>
      </div>
      <?php }
    //shows pages
    ?>
    </div>
  </div>
  <div class="text-center"><?php echo paginate_links();
    ?></div>
<?php get_footer()?>
HOME