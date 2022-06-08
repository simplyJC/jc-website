
<?php get_header()?>

<?php
// Start the loop.

while (have_posts()): the_post();
endwhile;
?>
<div class="content-main-container">
    <div class="content-container">
        <h1 class ="content__title-single"><?php the_title()?></h1>
        <p class="content__full" ><?php the_content()?></p>
    </div>
</div>
<!-- Check if there is Parent of the child page -->
<?php
$parentID = wp_get_post_parent_id(get_the_ID());
if ($parentID) {?>
   <a class="text-center" href="<?php echo get_permalink($parentID); ?>">Go back to <?php echo get_the_title($parentID);

    ?></a>
<?php }?>
<!-- Check if the page is About me -->
<?php if (get_the_ID() == 7) {
    ?>
     <a class="text-center" href="<?php echo site_url('/about-me/privacy-policy/') ?>">View Privacy Policy</a>
<?php
}?>

<?php
// show list of pages link under specified condition of array under About me or id is  7
//wp_list_pages( array(
//     'title_li' => '',
//     'child_of' => 7
// )
// );
?>
<?php get_footer()?>
page.php

