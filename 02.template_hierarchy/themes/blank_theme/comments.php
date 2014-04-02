<? if ( $comments ): ?>
<ol id="commentlist">
<? foreach ($comments as $comment): ?>
    <li id="comment-<? comment_ID() ?>">
    <? comment_text(); ?>
    <p>
        <cite>
        <? comment_type(__('Comment'), __('Trackback'), __('Pingback')); ?>
        <? _e('by') ?>
        <? comment_author_link() ?> —
        <? comment_date() ?> @
        <a href="#comment-<? comment_ID() ?>">
            <? comment_time() ?>
        </a>
        </cite>
        <? edit_comment_link(__("Edit This"), ' |') ?>
    </p>
<? endforeach; ?>
</ol>
<? else : ?>
<p><? _e('No comments.'); ?></p>
<? endif; ?>