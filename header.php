<!DOCTYPE html>
<html lang="tr">
<head>
    <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php
    bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img/favicon.png" type="image/x-icon" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
        <?php
        global $page, $paged;
        wp_title( '|', true, 'right' );
        bloginfo( 'name' );
        $site_description = get_bloginfo( 'description', 'display' );
        if ( $site_description && ( is_home() || is_front_page() ) )
            echo " | $site_description";
        if ( $paged >= 2 || $page >= 2 )
            echo ' | ' . sprintf( __( 'Page %s', 'twentyten' ), max( $paged, $page ) );
        ?>
    </title>

    <?php wp_head(); ?>

    <!-- Styles -->
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/reset.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/fupty.css">

</head>
<body>

<div id="header">

    <div class="container">

        <div class="header-wrapper">

            <div class="logo">
                <?php the_custom_logo(); ?>
            </div>
            <!-- logo -->

            <?php

            wp_nav_menu( array(
                'theme_location'   => 'primary',
                'menu_class'       => 'menu',
            ))

            ?>
            <!-- menu -->

            <div class="hamburger">
                <i class="fas fa-bars toggle"></i>
                <i class="fas fa-times toggle"></i>
            </div>
            <!-- hamburger -->

        </div>
        <!-- header-wrapper -->

    </div>
    <!-- container -->

</div>
<!-- header# -->