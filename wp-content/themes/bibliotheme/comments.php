<?php 
    if ( post_password_required() ) {
        return;
    }
?>
<code>comments.php</code>
<div id="comments">
    <?php 
        do_action( 'generate_inside_comments' );
    ?>
    <?php 
        if(have_comments()) :
    ?>
    <h3 class="comments-title">
    <?php
			$comments_number = get_comments_number();
			$comments_title = apply_filters( 'generate_comment_form_title', sprintf( // WPCS: XSS OK.
				/* translators: 1: number of comments, 2: post title */
				esc_html( _nx(
					'%1$s thought on &ldquo;%2$s&rdquo;',
					'%1$s thoughts on &ldquo;%2$s&rdquo;',
					$comments_number,
					'comments title',
					'bibliotheme'
				) ),
				number_format_i18n( $comments_number ),
				get_the_title()
			) );

			echo esc_html( $comments_title );
			?>
    </h3>
    if ( ! comments_open() && '0' != get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) : ?>
		<p class="no-comments"><?php _e( 'Comments are closed.', 'bibliotheme' );  ?></p>
	<?php endif;

	comment_form();
	?>
</div>