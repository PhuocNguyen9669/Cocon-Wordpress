<?php
// ADD ASSETS HEAD
add_action('wp_head', 'add_theme_assets_for_head', 50);
function add_theme_assets_for_head()
{
?>
    
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php themeUrl(); ?>/assets/css/common.css">
    <?php if (is_single() || (is_category()) || (is_archive('new'))) : ?>
        <link rel="stylesheet" type="text/css" href="<?php themeUrl(); ?>/assets/css/detail.css">
    <?php endif;
}
?>