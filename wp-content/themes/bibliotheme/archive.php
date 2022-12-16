<?php 
    get_header();
?>
<code>archive.php</code>
<h1>Archives</h1>
<?php 
    if(have_posts()){
        echo "<ul>";
        do_action( 'generate_archive_title' );

        while(have_posts()): the_post(); ?>
            
            <li><a href="<?php the_permalink(); ?>">
                <?php the_title(); ?>
            </a></li>
        <?php endwhile;
        echo "</ul>";
    }
    else {
        get_template_part("no-results", 'index');
    }
?>

