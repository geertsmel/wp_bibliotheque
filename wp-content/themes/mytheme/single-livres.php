<?php get_header() ?>

<?php if(have_posts()): the_post() ?>
    <h1><?php the_title() ?></h1>
    <?php the_content() ?>
<?php endif ?>

<?php
    global $pods;
    $member_slug  = pods_url_variable(-1);
    $livre = new Pod('livres', $member_slug);
    $args = [
        'post_type' => 'livres',
        'post_status' => ['publish'],
        'meta_query' => [
            'relation' => 'AND', [
                'key'     => 'auteur',
                'value'   => $livre->get_field('auteur')[0]['ID']
            ]
        ]
    ];
    $loop = new WP_Query($args);
?>

<?php if($loop->post_count > 0): ?>
<section>
    <h2>Autres livres du même auteur</h2>
    <?php while($loop->have_posts()): $loop->the_post() ?>
        <p><?php the_title() ?></p>
    <?php endwhile; ?>
</section>
<?php endif ?>

<?php get_footer() ?>