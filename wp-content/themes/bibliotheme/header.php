<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
    <link rel="stylesheet" href="<?= get_stylesheet_directory_uri() . '/style.css' ?>">
    <title><?php bloginfo('name') ?> <?php wp_title(' - ') ?></title>
</head>
<body <?php body_class(); ?>>
    <header>
        <nav id="primary-menu">
        <?php wp_nav_menu([
            'theme_location' => 'primary',
            'menu_class' => 'navbar',
            'menu_id' => 'primary-menu',
            // 'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
            // 'item_spacing' => 'preserve',
        ]); ?>
        </nav>
        
    </header>
    

        