<code>content.php</code>
<article <?php post_class(); ?>>
    <?php 
        the_title( sprintf( '<h2 class="entry-title" itemprop="headline"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' );
    ?>

    <?php if ( false ) : ?>

    <div class="resume" itemprop="text">
        <?php the_excerpt(); ?>
    </div><!-- .resume -->

    <?php else : ?>

    <div class="content" itemprop="text">
        <?php
        the_content();

        wp_link_pages( array(
            'before' => '<div class="page-links">' . __( 'Pages:', 'bibliotheme' ),
            'after'  => '</div>',
        ) );
        ?>
    </div><!-- .content -->

    <?php endif; ?>
</article>