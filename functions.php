<?php
function gulpwp_register_styles()
{
    wp_enqueue_style('gulpwp-google-fonts', "https://fonts.googleapis.com/css2?family=Lato:wght@400;700&family=Lora:wght@600&display=swap");
    wp_enqueue_style('gulpwp-css', get_template_directory_uri() . "/dist/style.css", array(), '1.0', 'all');
}
add_action('wp_enqueue_scripts', 'gulpwp_register_styles');

function gulpwp_register_scripts()
{
    wp_enqueue_script('gulpwp-js', get_template_directory_uri() . "/dist/main.js", array(), "1,0", false);
}

add_action('wp_enqueue_scripts', 'gulpwp_register_scripts');
