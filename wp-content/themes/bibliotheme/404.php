<?php 
    get_headers();
?>

<div class="container">
    <div class="content">
        <p>
            <?php echo apply_filters( 'generate_404_title', __( 'Oops! That page can&rsquo;t be found.', 'generatepress' ) );?>
        </p>
    </div>
    <?php 
        generate_construct_sidebars();
    ?>
</div>
<?php 
    get_footer();
?>