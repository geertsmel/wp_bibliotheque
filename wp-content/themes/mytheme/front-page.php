<?php get_header() ?>

<?php while(have_posts()): the_post() ?>
    <a href="<?php the_permalink() ?>">
        <div class="card mb-3">
            <div class="card-body">
                <h2><?php the_title() ?></h2>
                <p><?php the_excerpt() ?></p>

                <!-- <?php the_post_thumbnail('large') ?> -->
                <!-- <img src="<?php get_the_post_thumbnail_url() ?>"> -->
                <?php /* the_author() the_date() the_contenu() the_tags() the_category() */ ?>
            </div>
        </div>
    </a>
<?php endwhile ?>

<?php get_footer() ?>