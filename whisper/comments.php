<?php
/**
 * The template for displaying comments
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage whisper
 * @since 1.0.0
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
*/
if (comments_open()) { ?>
  <h3 class="comments-caption"><a name="comments"><?php comments_number('Комментарии', '1 комментарий', '% комментариев'); ?> читателей статьи "<?php the_title();?>"</a></h3>
    <?php if (get_comments_number() == 0) { ?>
      <ul class="list">
        <li>Оставьте первый комментарий - автор старался</li>
      </ul>
    <?php } else { ?>
    <ol class="commentlist">
      <?php
        function verstaka_comment($comment, $args, $depth){
          $GLOBALS['comment'] = $comment; ?>
          <li <?php comment_class(); ?> id="li-comment-<?php comment_ID() ?>">
            <div id="comment-<?php comment_ID(); ?>">
<div class="comment-box">
<div class="comment-author vcard">
<?php echo get_avatar( $current_user->user_email, 60, '', '', array('class'=>'pull-left', 'extra_attr'=>'style="margin: -4px 7px;"') ); ?>
</div>
<div class="comment-contents">
 <?php printf(__('<cite class="fn">%s</cite>'), get_comment_author_link()) ?>
 <div class="comment-meta commentmetadata">
                  <span><?php printf(__('%1$s at %2$s'), get_comment_date('l, F j, Y'),  get_comment_time()) ?></span>
</div>
<?php if ($comment->comment_approved == '0') : ?>
                <em><?php _e('Ваш комментарий ожидает одобрения.') ?></em>
                <br>
<?php endif; ?>
<?php comment_text() ?>

 <div class="reply">
       <?php comment_reply_link(array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
</div>
</div>



</div>


            </div>
      <?php }
        $args = array(
          'reply_text' => 'Ответить',
          'callback' => 'verstaka_comment'
        );
        wp_list_comments($args);
      ?>

    </ol>
  <?php } ?>

  <?php
    $fields = array(
      'author' => '<p class="comment-form-author"><label for="author">' . __( 'Name' ) . ($req ? '<span class="required">*</span>' : '') . '</label><input type="text" id="author" name="author" class="author" value="' . esc_attr($commenter['comment_author']) . '" placeholder="Егор Булычёв" pattern="[A-Za-zА-Яа-я]{3,}" maxlength="30" autocomplete="on" tabindex="1" required' . $aria_req . '></p>',
      'email' => '<p class="comment-form-email"><label for="email">' . __( 'Email') . ($req ? '<span class="required">*</span>' : '') . '</label><input type="email" id="email" name="email" class="email" value="' . esc_attr($commenter['comment_author_email']) . '" placeholder="example@example.com" maxlength="30" autocomplete="on" tabindex="2" required' . $aria_req . '></p>',
      'url' => '<p class="comment-form-url"><label for="url">' . __( 'Website' ) . '</label><input type="url" id="url" name="url" class="site" value="' . esc_attr($commenter['comment_author_url']) . '" placeholder="www.example.com" maxlength="30" tabindex="3" autocomplete="on"></p>'
    );

    $args = array(
      'comment_notes_after' => '',
      'comment_field' => '<p class="comment-form-comment"><label for="comment">' . _x( 'Comment', 'noun' ) . '</label><textarea id="comment" name="comment" class="comment-form" cols="45" rows="8" aria-required="true" placeholder="Текст сообщения..."></textarea></p>',
      'label_submit' => 'Отправить',
      'fields' => apply_filters('comment_form_default_fields', $fields)
    );
    comment_form($args);
  ?>
  <?php } else { ?>
  <h3>Обсуждения закрыты для данной страницы</h3>
  <?php }
?>
