<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
    <!--[if lt IE 9]>
    <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
    <![endif]-->
    <?php wp_head(); ?>

</head>

<body class="home" id="home">

<header class="header">
    <div class="header-wrapper">
        <div class="container">
            <div class="header-items">
                <div class="mobile-show-menu">
                    <button type="button" class="navbar-toggle no-focus" data-target="collapseing"
                            data-toogle="collapseing">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>

                <?php

                    wp_nav_menu(array(
                        'menu' => 'mobile-menu',
                        'container' => 'div',
                        'container_class' => 'collapseing',
                        'container_id' => 'toogleMenu',
                        'menu_class' => 'mobile-menu bd-links',
                        'echo' => true,
                        'before' => '',
                        'after' => '',
                        'link_before' => '',
                        'link_after' => '',
                    ));

                if (has_custom_header()):

                    $url = get_header_image();
                    $title = get_bloginfo('title');

                    echo <<<HTML
                    
                     <a href="#home" class="logo">
                        <img src="{$url}" alt="{$title}">
                    </a>

HTML;
                endif;

                    wp_nav_menu(array(
                        'menu' => 'header-menu',
                        'container' => 'div',
                        'container_class' => 'r',
                        'container_id' => 'r',
                        'menu_class' => 'nav',
                        'echo' => true,
                        'before' => '',
                        'after' => ''
                    ));


                ?>

            </div>
        </div>
    </div>
</header>