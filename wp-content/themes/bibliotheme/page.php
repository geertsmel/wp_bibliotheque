<?php 
    get_header();
?>

<div class="container">
    <code>page.php</code>

    <section class="articles">
        <?php 
            while(have_posts()):
                the_post();
                get_template_part('content', 'page');

                if(comments_open()|| '0' != get_comment()) : ?>
                <div class="comments-area">
					<?php comments_template(); ?>
				</div>

				<?php endif;?>

        <?php endwhile; ?>
    </section>
    <?php 
    get_sidebar();
    ?>
</div>
<?php 
    get_footer();
?>