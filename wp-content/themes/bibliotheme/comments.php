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
    <?php if(have_comments()) : ?>
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
		<ol class="comment-list">
			<?php
				wp_list_comments(
					array(
						'avatar_size' => 100,
						'style'       => 'ol',
						'short_ping'  => true,
						'reply_text'  =>   __( 'Répondre', 'bibliotheme' ),
					)
				);
			?>
		</ol>

		<?php
		the_comments_pagination(
			array(
				'prev_text' =>  array( 'icon' => 'arrow-left' )  . '<span class="screen-reader-text">' . __( 'Previous', 'bibiotheme' ) . '</span>',
				'next_text' => '<span class="screen-reader-text">' . __( 'Next', 'biblotheme' ) . '</span>' .  array( 'icon' => 'arrow-right' ),
			)
		);

	endif;// have comments ?>

	<?php if ( ! comments_open() && '0' != get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) : ?>
		<p class="no-comments"><?php _e( 'Comments are closed.', 'bibliotheme' );  ?></p>
	<?php endif; ?>
		
	<?php comment_form(); ?>
</div>