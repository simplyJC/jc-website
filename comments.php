<section class="comment-container">
    <?php
if (!have_comments()) {
    ?><span class="blog__comments-label">No comments yet:</span><?php
} else {

    ?><span class="blog__comments-label"><?php echo comments_number();
    ?></span><?php
}

wp_list_comments(array(
    'avatar_size' => 50,
    'style' => 'div',
));

if (comments_open()) {
    comment_form(array(
        'class_form' => '',
        'title_reply_before' => '<h3 id="reply-title" class="comment-reply-title">',
        'label_submit' => 'Submit',
        'class_form' => 'article__form',
    ));
}?>
</section>

