<!doctype html>
<html lang="en">
<head>

    <?php  wp_head() ?>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body <?php body_class() ?>>
<div id="page" class="site">

    <header id="masthead" class="site-header navbar-static-top " role="banner">
        <div class="container">
            <nav class="navbar navbar-expand-xl p-0">
                <div class="navbar-brand">
                        <a class="site-title" href="<?php echo esc_url( home_url( '/' )); ?>">
                    <img src="http://anitawp.test/wp-content/uploads/2019/02/cropped-bubus_logo-32x32.png" alt="">
                        </a>

                </div>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-nav" aria-controls="" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <?php
                wp_nav_menu(array(
                    'theme_location'    => 'top-menu',
                    'container'       => 'div',
                    'container_id'    => 'main-nav',
                    'container_class' => 'collapse navbar-collapse justify-content-end',
                    'menu_id'         => false,
                    'menu_class'      => 'navbar-nav',
                    'depth'           => 3,
                    'fallback_cb'     => 'wp_bootstrap_navwalker::fallback',
                    'walker'          => new wp_bootstrap_navwalker()
                ));
                ?>

            </nav>
        </div>
    </header><!-- #masthead -->
