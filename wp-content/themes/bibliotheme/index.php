<?php 
    get_header();
?>
<div class="container">
    <code>index.php</code>
    <section class="articles">
    <?php 
        if(have_posts()){
            
            while(have_posts()): the_post();
                
                get_template_part( 'content');

            endwhile;
        }
        else {
            get_template_part("no-results", 'index');
        }
    ?>
    </section>

    <?php get_sidebar(); ?>
</div>

<?php 
    
    get_footer();
?>