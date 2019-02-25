<!doctype html>
<html lang="en">
<head>

    <?php  wp_head() ?>
</head>
<body <?php body_class() ?>>
<header class="sticky-top">
    <?php wp_nav_menu([
            'theme-location'=> 'top-menu',
    ]) ?>
</header>
