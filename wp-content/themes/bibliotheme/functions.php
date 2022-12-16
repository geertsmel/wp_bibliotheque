<?php 

/**
 * Bibliotheme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage Bibliotheme
 * @since 1.0
 */

    function bibliotheme_setup(){
        load_theme_textdomain( 'bibliotheme' );

        register_nav_menus(
            array(
                'primary'    => __( 'Menu supérieur', 'bibliotheme' ),
                'social' => __( 'Social Links Menu', 'bibliotheme' ),
            )
        );
        
    }
    add_action( 'after_setup_theme', 'bibliotheme_setup' );
    


    function bibliotheme_widgets_init(){
        register_sidebar(
            array(
                'name'          => __( ' Sidebar', 'bibliotheme' ),
                'id'            => 'sidebar-1',
                'description'   => __( 'Ajouter un widget et il apparaitra dans la sidebar.', 'bibliotheme' ),
                'before_widget' => '<section id="%1$s" class="widget %2$s">',
                'after_widget'  => '</section>',
                'before_title'  => '<h2 class="widget-title">',
                'after_title'   => '</h2>',
            )
        );
    
        register_sidebar(
            array(
                'name'          => __( 'Footer 1', 'bibliotheme' ),
                'id'            => 'sidebar-2',
                'description'   => __( 'Ajouter un widget et apparaitra dans le 1er footer.', 'bibliotheme' ),
                'before_widget' => '<section id="%1$s" class="widget %2$s">',
                'after_widget'  => '</section>',
                'before_title'  => '<h2 class="widget-title">',
                'after_title'   => '</h2>',
            )
        );
    
        register_sidebar(
            array(
                'name'          => __( 'Footer 2', 'bibliotheme' ),
                'id'            => 'sidebar-3',
                'description'   => __( 'Ajouter un widget et il apparaitra dans le deuxième footer.', 'bibliotheme' ),
                'before_widget' => '<section id="%1$s" class="widget %2$s">',
                'after_widget'  => '</section>',
                'before_title'  => '<h2 class="widget-title">',
                'after_title'   => '</h2>',
            )
        );
    }
    add_action( 'widgets_init', 'bibliotheme_widgets_init' );
?>