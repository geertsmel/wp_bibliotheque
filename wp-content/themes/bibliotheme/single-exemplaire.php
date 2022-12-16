<?php get_header() ?>
<?php 
    $id_exemplaire = "";
?>
<code>single-exemplaire.php</code>
<div class="container">
    <section class="articles">
        <article>
<?php if(have_posts()): the_post() ?>
    <?php 
        $id_exemplaire = get_the_id();
    ?>
    <h1><?php the_title() ?></h1>
    <div class="content">
    <?php the_content() ?>
    </div>
    <a href="http://localhost:8888/bibliotheque/wp-admin/post.php?post=<?=$id_exemplaire?>&action=edit">Réserver le livre</a>
<?php endif ?>



</article>
</section>
<?php 
    get_sidebar();
?>
</div>

<?php get_footer() ?>