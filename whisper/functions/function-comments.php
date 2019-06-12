<?php
if ( ! function_exists( 'inspiration_comment' ) ) :
function inspiration_comment( $comment, $args, $depth ) {
    $GLOBALS['comment'] = $comment;
    switch ( $comment->comment_type ) :
        case '' :
    ?>
    <li <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>">

        <div class="comment-box" id="comment-<?php comment_ID(); ?>">

<div class="c-head">
<?php printf( __( '%s ', 'medhosp' ), sprintf( '<cite class="fn">%s</cite>', get_comment_author_link() ) ); ?>
/ <span>
<?php printf( __( '%1$s', 'medhosp' ), get_comment_date() ); ?></span>
</div>

<div class="comment-content-box">
<div class="c-grav">    <?php echo get_avatar( $current_user->user_email, 200, '', '', array('class'=>'c-grav_img', 'extra_attr'=>'style="border: 4px solid #e3e3e3;-webkit-border-radius: 4px;border-radius: 4px;"') ); ?> </div>
<div class="c-body">  <?php comment_text(); ?>
      </div>

        <?php if ( $comment->comment_approved == '0' ) : ?>
            <em><?php _e( 'Ваш комментарий ожидает проверки.', 'medhosp' ); ?></em>
            <br />
        <?php endif; ?>
</div>
        <div class="reply">
            <?php comment_date('l, j : m : Y, G:i:s'); ?> / <?php comment_reply_link( array_merge( $args, array( 'depth' => $depth, 'max_depth' => $args['max_depth'] ) ) ); ?> / <?php edit_comment_link( __( 'Изменить', 'medhosp' ), ' ' ); ?>
        </div><!-- .reply -->
    </div><!-- #comment-##  -->

    <?php
            break;
        case 'pingback'  :
        case 'trackback' :
    ?>
    <li class="post pingback">
        <p><?php _e( 'Пинбэк:', 'medhosp' ); ?> <?php comment_author_link(); ?><?php edit_comment_link( __('(Редактировать)', 'medhosp'), ' ' ); ?></p>
    <?php
            break;
    endswitch;
}
endif;