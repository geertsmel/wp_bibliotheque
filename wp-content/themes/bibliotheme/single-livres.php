<?php get_header() ?>
<code>single-livres.php</code>
<?php 
    $id_livre;
?>
<div class="container">
    <section class="articles">


    <article>

<?php if(have_posts()): the_post() ?>
<?php 
    $id_livre = get_the_id();
    // var_dump($id);
?>
    <h1><?php the_title() ?></h1>
    <div class="content">
        <?php the_content() ?>
    </div>

    <?php 
    
    // var_dump($id);
    $args2 = [
        'post_type' => 'exemplaire',
        'post_status' => ['publish'],
        'meta_query' => [
                'relation' => 'AND', [
                'key'     => 'livre',
                'value'   => $id_livre
            ]
            ,
            [
                'relation' => 'AND', [
                'key'     => 'client',
                'value' => '',
                'compare' => 'not exists'
                
            ]
            ]
        ]
    ];
    $loop2 = new WP_Query($args2);
    // var_dump($loop2);
?>
    <?php if($loop2->post_count > 0): ?>
    <section>
        <h2>Exemplaires de ce livre</h2>
        <?php while($loop2->have_posts()): $loop2->the_post() ?>
            <p><a href="<?php the_permalink() ?>"><?php the_title() ?></a></p>
        <?php endwhile; ?>
    </section>
    <?php else : ?>
        <p>Il n'y a plus d'exemplaires disponibles</p>
    <?php endif ?>
    
<?php endif ?>

<?php
    global $pods;
    $member_slug  = pods_url_variable(-1);
    // var_dump($member_slug);
    // var_dump(get_the_id());
    $livre = new Pod('livres', $id_livre);
    // var_dump($livre->get_field('auteur')[0]['ID']);
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
    // var_dump($loop);
?>

<?php if($loop->post_count > 0): ?>
<section>
    <h2>Autres livres du même auteur</h2>
    <?php while($loop->have_posts()): $loop->the_post() ?>
        <p><a href="<?php the_permalink() ?>"><?php the_title() ?></a></p>
    <?php endwhile; ?>
</section>
<?php endif ?>


</article>
</section>
<?php 
    get_sidebar();
?>
</div>

<?php get_footer() ?>