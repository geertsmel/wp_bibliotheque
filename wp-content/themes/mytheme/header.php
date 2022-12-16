<!DOCTYPE html>
<html <?php language_attributes() ?>>
<head>
    <meta charset="UFT-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= get_stylesheet_directory_uri() . '/style.css' ?>">
    <?php wp_head() ?>
    <title><?php bloginfo('name') ?> <?php wp_title(' - ') ?></title>
</head>
<body <?php body_class() ?>>
<header>
    <?php wp_nav_menu([
        'theme_location' => 'primary_menu',
        'container' => 'nav',
        'menu_class' => 'container',
        'menu_id' => 'primary-menu'
    ]) ?>
    
</header>
<div class="container">
